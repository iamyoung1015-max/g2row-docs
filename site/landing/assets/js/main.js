/* ===========================================================
   main.js — G2ROW 랜딩 페이지 동작 전부
   (구 landing.js 병합. 이 페이지에서 쓰지 않는 코드는 제거됨)
   =========================================================== */
(function () {
  "use strict";

  // ── 모바일 내비 토글 ──
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('nav');
  navToggle?.addEventListener('click', () => nav?.classList.toggle('open'));
  document.querySelectorAll('#nav a').forEach(a =>
    a.addEventListener('click', () => nav?.classList.remove('open'))
  );

  // ── 숫자 카운트업 — 화면에 들어올 때 1회 실행 ──
  const counters = document.querySelectorAll('.count[data-count]');
  if (counters.length) {
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const runCount = el => {
      const target = Number(el.dataset.count) || 0;
      if (reduce) { el.textContent = target; return; }
      const duration = 1400;
      let start = null;
      const tick = now => {
        if (start === null) start = now;
        const p = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - p, 3); // ease-out
        el.textContent = Math.round(target * eased);
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };

    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          runCount(entry.target);
          obs.unobserve(entry.target);
        });
      }, { threshold: 0.4 });
      counters.forEach(el => io.observe(el));
    } else {
      counters.forEach(runCount);
    }
  }

  // ── AI 프로젝트 사례 카드 캐러셀 (카드 3개 노출 · 3번째 60% peek · 좌우 버튼 · 도트 · 자동 넘김) ──
  // 카드 1장씩 이동. 카드폭/개수는 CSS 변수(--pcc-per)로 브레이크포인트마다 달라지므로 DOM에서 실측한다.
  document.querySelectorAll('.pcase-cards').forEach(s => {
    const vp = s.querySelector('.pcase-viewport');
    const track = s.querySelector('.pcase-track');
    const cards = [...s.querySelectorAll('.pcase-card')];
    const dotWrap = s.querySelector('.pcase-dots');
    if (!vp || !track || cards.length === 0) return;

    // ⚠ 카드폭·이동량은 반드시 '기기 픽셀 정수'로 맞출 것.
    // CSS만으로 두면 카드폭이 calc((100% - gap*2)/2.6) = 396.92…px 같은 소수가 되고, 카드 경계가 기기 픽셀 중간에 걸린다.
    // 그러면 뷰포트(overflow:hidden) 경계에서 옆 카드가 안티에일리어싱되어 1px 잘린 것처럼 보인다.
    // → 카드폭을 기기 픽셀 정수로 내림해 --pcc-card-w에 고정하고, transform도 같은 격자에 스냅한다.
    const snap = v => { const d = window.devicePixelRatio || 1; return Math.round(v * d) / d; };
    const cssVar = (name, dflt) => parseFloat(getComputedStyle(s).getPropertyValue(name)) || dflt;
    let CARD_W = 0, GAP = 0;
    const relayout = () => {
      GAP = parseFloat(getComputedStyle(track).columnGap) || 0;
      const vpW = vp.getBoundingClientRect().width;
      const d = window.devicePixelRatio || 1;
      const w = Math.floor((vpW - GAP * cssVar('--pcc-gaps', 2)) / cssVar('--pcc-per', 2.6) * d) / d;
      CARD_W = w > 0 ? w : 0;
      if (CARD_W) s.style.setProperty('--pcc-card-w', CARD_W + 'px');          // 미설정 시 CSS calc 폴백 유지
    };
    const step = () => CARD_W + GAP;
    const maxShift = () => Math.max(0, snap(cards.length * step() - GAP - vp.getBoundingClientRect().width));
    const pages = () => {                                                     // 이동 가능한 페이지 수(= 도트 개수)
      const st = step();
      if (!(st > 0)) return 1;                                                // 레이아웃 전·숨김 상태에서 0 나누기 방지
      return Math.max(1, Math.ceil(maxShift() / st - 0.01) + 1);
    };

    let i = 0, dots = [];
    const go = k => {
      const p = pages();
      i = (k % p + p) % p;                                                    // 끝에서 다음 → 처음으로 순환
      track.style.transform = 'translateX(-' + snap(Math.min(i * step(), maxShift())) + 'px)';
      dots.forEach((d, j) => d.classList.toggle('on', j === i));
    };
    // 도트는 현재 뷰포트의 페이지 수만큼 생성(리사이즈로 페이지 수가 바뀌면 다시 생성)
    const buildDots = () => {
      if (!dotWrap) return;
      const p = pages();
      if (dots.length === p) return;
      dotWrap.innerHTML = '';
      dots = Array.from({ length: p }, (_, j) => {
        const b = document.createElement('button');
        b.type = 'button';
        b.setAttribute('aria-label', (j + 1) + '번 페이지');
        b.addEventListener('click', () => nav2(j));
        dotWrap.appendChild(b);
        return b;
      });
    };

    const AUTOPLAY_MS = Number(s.dataset.autoplay || 5000);                   // n초마다 자동으로 다음 카드
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let timer = null;
    const stop = () => { clearInterval(timer); timer = null; };
    const start = () => { if (reduce || !AUTOPLAY_MS || pages() <= 1) return; stop(); timer = setInterval(() => go(i + 1), AUTOPLAY_MS); };
    const nav2 = k => { go(k); start(); };                                    // 수동 조작 후 타이머 재시작

    s.querySelector('.pcase-prev')?.addEventListener('click', () => nav2(i - 1));
    s.querySelector('.pcase-next')?.addEventListener('click', () => nav2(i + 1));
    window.addEventListener('resize', () => { relayout(); buildDots(); go(Math.min(i, pages() - 1)); });
    s.addEventListener('mouseenter', stop);                                   // 마우스 오버 시 일시정지
    s.addEventListener('mouseleave', start);
    document.addEventListener('visibilitychange', () => document.hidden ? stop() : start());
    relayout();
    buildDots();
    go(0);
    start();
  });

  // ── URL 미정 버튼 → 안내 문구 토글 ──
  document.querySelectorAll('[data-note]').forEach(btn => {
    btn.addEventListener('click', () => {
      const note = document.getElementById(btn.getAttribute('data-note') + '-note');
      if (note) note.hidden = !note.hidden;
    });
  });

  // ── '교육 신청하기' → 문의 유형 '교육' 자동 체크 ──
  document.querySelectorAll("[data-preset='edu']").forEach(link => {
    link.addEventListener('click', () => {
      const cb = document.getElementById('svc-edu');
      if (cb) cb.checked = true;
    });
  });

  // ── 문의 폼 검증 ──
  // 필수 항목 · 개인정보 동의 · 이메일 형식을 한 번에 확인해 폼 아래 인라인으로 안내한다.
  // ⚠ 아직 전송하지 않는다(항상 preventDefault). 서버 연동 후 조건부로 바꿀 것.
  const form = document.getElementById('inquiry');
  const msg = document.getElementById('form-msg');
  if (form && msg) {
    const REQUIRED = [['f-company', '회사명'], ['f-name', '담당자명'], ['f-tel', '연락처']];
    const EMAIL_RE = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;

    form.addEventListener('submit', e => {
      e.preventDefault();

      const problems = REQUIRED
        .filter(([id]) => !document.getElementById(id)?.value.trim())
        .map(([, label]) => label);

      if (!document.getElementById('f-agree')?.checked) problems.push('개인정보 수집·이용 동의');

      const email = form.querySelector('[name="email"]');
      if (email?.value && !EMAIL_RE.test(email.value)) problems.push('이메일 형식');

      msg.textContent = problems.length
        ? problems.join(', ') + ' 항목을 확인해 주세요.'
        : '입력값 확인까지만 동작합니다. 실제 접수는 폼 연동 후 가능합니다.';
      msg.hidden = false;
    });
  }
})();
