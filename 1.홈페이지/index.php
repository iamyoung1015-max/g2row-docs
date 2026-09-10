<?php
/**
 * G2ROW 랜딩 페이지
 * ------------------------------------------------------------------
 *   includes/  head · header · footer · scripts
 *   assets/    css/style.css · js/main.js · img/
 * 본문 섹션은 아래 <main> 안에 순서대로 들어 있다.
 */
$PAGE_TITLE = 'G2ROW — 엑셀 쓸 줄 아시면, AI로 프로그램을 만들 수 있습니다';
?>
<!doctype html>
<html lang="ko">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body class="vb">

<a class="skip" href="#main">본문 바로가기</a>

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

<!-- ============================ S1 히어로 ============================ -->
<section class="heroD1" id="top">
  <div class="container heroD1-inner">
    <div class="heroD1-copy">
      <p class="eyebrow">제조·물류 특화 AX 구축 파트너</p>
      <h1>엑셀 쓸 줄 아시면,<br>AI로 프로그램을 만들 수 있습니다.</h1>
      <p class="heroD1-sub">개발 환경도 서버도 준비하실 필요 없습니다. 교육을 통해 첫 프로그램을 직접 만들어 배포합니다.</p>
      <div class="heroD1-cta">
        <a href="#contact" class="btn btn-primary btn-lg">전문 상담 신청하기</a>
        <a href="#setup" class="btn btn-ghost btn-lg">개발키트 살펴보기</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ S2 현장의 고민 ============================ -->
<section class="section-pad painB" id="problem">
  <div class="container">
    <div class="pb-wrap">
      <div class="pb-head">
        <span class="eyebrow">현장의 고민</span>
        <h2>AI 도입, 마음은 있는데<br>시작이 어렵습니다.</h2>
      </div>
      <div class="pb-items">
        <div class="pb-item"><span class="pb-no">01</span><h3>회사 업무 중 AI를 어디에 적용해야 할지 모르겠습니다.</h3></div>
        <div class="pb-item"><span class="pb-no">02</span><h3>업무 자동화를 어떻게 시작해야 할지 모르겠습니다.</h3></div>
        <div class="pb-item"><span class="pb-no">03</span><h3>여러 곳에 데이터가 흩어져 있어 활용하기 어렵습니다.</h3></div>
        <div class="pb-item"><span class="pb-no">04</span><h3>개발 인력이나 전담 인력이 부족합니다.</h3></div>
      </div>
    </div>
  </div>
</section>

<!-- 브리지 : 흰 → 다크 -->
<div class="bridge-band">
  <svg class="bridge-dip" viewBox="0 0 1440 66" preserveAspectRatio="none" aria-hidden="true"><path d="M720 65.3057C783.213 11.779 947.498 1.45994 1081.13 0H358.875C492.502 1.45996 656.786 11.7791 720 65.3057Z"/></svg>
</div>

<!-- ============================ S3 사업 모델 ============================ -->
<section class="section-pad" id="solution">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">사업 모델</span>
      <h2>개발 환경은 저희가 끝내 놓고,<br>만드는 건 직접 하십니다.</h2>
    </div>

    <div class="hub-model">
      <div class="hub">
        <span class="hub-tag">AX 개발키트</span>
        <span class="who">개발 환경 세팅이 부담인 제조·물류 기업</span>
        <p>파이썬 설치부터 서버·데이터베이스까지,<br>비개발자가 막히는 구간이 전부 세팅된 상태로 도착합니다.</p>
      </div>
      <div class="hub-branch-label">직접 만들 역량이 필요하다면?</div>
      <div class="branches">
        <div class="branch">
          <span class="bn">4시간 실무 교육</span>
          <span class="who">스스로 만들고 싶은 실무자</span>
          <p>쓰던 업무 파일을 가지고 와서, 교육이 끝날 때 배포된 첫 프로그램을 가지고 돌아갑니다.</p>
        </div>
        <div class="branch">
          <span class="bn">구축 · 운영 지원</span>
          <span class="who">직접 하기 어려운 기업</span>
          <p>필요한 프로그램을 함께 만들고, 이후 직접 운영할 수 있도록 코드와 환경을 인수인계합니다.</p>
        </div>
      </div>
    </div>

    <div class="cmp-wrap">
      <table class="cmp">
        <caption class="skip">기존 AI 개발과 G2ROW 개발키트 비교</caption>
        <thead>
          <tr><th scope="col">구분</th><th scope="col">기존 AI 개발</th><th scope="col">G2ROW 개발키트</th></tr>
        </thead>
        <tbody>
          <tr><th scope="row">초기 세팅</th><td>파이썬, 에디터 개별 설치</td><td>클라우드 접속 즉시 완료</td></tr>
          <tr><th scope="row">인프라 구축</th><td>서버 및 DB 별도 구매 및 연동 필요</td><td>키트 내 올인원 자동 구성 완료</td></tr>
          <tr><th scope="row">필요 역량</th><td>코딩 및 서버 운영 지식 필요</td><td>엑셀 활용 및 업무 프로세스 이해도</td></tr>
          <tr><th scope="row">첫 결과물</th><td>수개월 단위의 외주 또는 개인 학습</td><td>교육 4시간 안에 첫 버전 배포</td></tr>
          <tr><th scope="row">유지 보수</th><td>외주 의존 또는 수정 시마다 추가 비용 발생</td><td>실무자가 직접 AI로 수정 및 배포</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 브리지 : 다크 → 흰 -->
<div class="bridge-band bridge-up">
  <svg class="bridge-dip" viewBox="0 0 1440 66" preserveAspectRatio="none" aria-hidden="true"><path d="M720 65.3057C783.213 11.779 947.498 1.45994 1081.13 0H358.875C492.502 1.45996 656.786 11.7791 720 65.3057Z"/></svg>
</div>

<!-- ============================ S4 개발키트 ============================ -->
<section class="section-pad" id="setup">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">개발키트</span>
      <h2>비개발자도 바로<br>개발을 시작할 수 있도록.</h2>
      <p>하드웨어 · 소프트웨어 · 플랫폼을 하나로 묶은 올인원 상품입니다.</p>
    </div>

    <div class="kit-def">
      <span class="pct">100%</span>
      <p>개발에 필요한 모든 환경이 세팅된 상태로 도착합니다.</p>
    </div>

    <div class="grid grid-3">
      <div class="cardw">
        <span class="setup-no">01</span>
        <h3>키트에서 바로 개발</h3>
        <p>파이썬(Python) 설치, Claude API 연동, 코드 편집기(VS Code / Claude Code), 웹 서버, 데이터베이스 설치와 설정이 끝난 상태로 제공됩니다.</p>
        <img class="setup-img" src="assets/img/claude-code.png" alt="Claude Code 사전 설치 환경">
      </div>
      <div class="cardw">
        <span class="setup-no">02</span>
        <h3>입력하면 초안, 누르면 배포</h3>
        <p>G2ROW 플랫폼에서 요구사항을 입력하여 초안을 만들고, 버튼 하나로 배포까지 끝납니다.</p>
      </div>
      <div class="cardw">
        <span class="setup-no">03</span>
        <h3>계속 고칠 수 있습니다</h3>
        <p>생성한 코드가 그대로 남아 있어, “여기에 이 기능 추가해줘” 라고 요청하며 AI로 계속 다듬을 수 있습니다.</p>
        <img class="setup-img" src="assets/img/ubuntu-pc.png" alt="개발키트 PC">
      </div>
    </div>

    <p class="sub-head">하드웨어 옵션</p>
    <div class="grid grid-4">
      <div class="cardw hw-card"><span class="n">미니 PC</span><p>자리를 적게 차지합니다. 간단한 업무용.</p></div>
      <div class="cardw hw-card"><span class="n">일반 PC</span><p>대부분의 제조·물류 업무에 맞는 표준 사양.</p></div>
      <div class="cardw hw-card"><span class="n">워크스테이션</span><p>데이터가 많고 연산이 무거운 환경.</p></div>
      <div class="cardw hw-card pick"><span class="flag">추가 구매 없음</span><span class="n">사내 유휴 PC</span><p>새로 사지 않으셔도 됩니다. 회사에 남는 PC에 저희가 설치해 드립니다.</p></div>
    </div>

    <div class="center-cta">
      <button class="btn btn-primary btn-lg" type="button" data-note="store">개발키트 자세히 보기</button>
    </div>
  </div>
</section>

<!-- ============================ S5 교육 ============================ -->
<section class="section-pad section-soft" id="edu">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">교육</span>
      <h2>4시간이면 물고기 잡는 법을<br>알려드립니다.</h2>
      <p>대상은 제조·물류 실무자입니다. 개발 경험이 없어도 됩니다.</p>
    </div>

    <ul class="edu-feat">
      <li><span class="msym">check_circle</span>개발 지식 불필요</li>
      <li><span class="msym">check_circle</span>서버·환경 준비 불필요</li>
      <li><span class="msym">check_circle</span>끝나면 첫 버전이 남습니다</li>
    </ul>

    <div class="grid grid-3">
      <div class="cardw">
        <span class="sn">1</span>
        <h3>첫 프로그램 만들기</h3>
        <p>키트에 접속해서 사용하던 업무 파일을 첫 화면에 띄웁니다.</p>
        <p class="step-do">플랫폼 접속 → 요구사항 입력 → 초안 생성</p>
      </div>
      <div class="cardw">
        <span class="sn">2</span>
        <h3>내 업무에 맞게 다듬기</h3>
        <p>말로 시키면서 필요한 기능을 붙입니다.</p>
        <p class="step-do">프롬프트 반복 개선</p>
      </div>
      <div class="cardw">
        <span class="sn">3</span>
        <h3>실무에 배포하고 유지하기</h3>
        <p>프로그램으로 배포하고, 이후 직접 고칠 수 있게 됩니다.</p>
        <p class="step-do">배포 → 코드 수정</p>
      </div>
    </div>

    <div class="center-cta">
      <a href="#contact" class="btn btn-primary btn-lg" data-preset="edu">교육 신청하기</a>
    </div>
  </div>
</section>

<!-- ============================ 강사 소개 (라이브 #instructor 그대로) ============================ -->
<section class="section-pad section-soft" id="instructor">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">강사 소개</span>
      <h2>AI는 알려드리고,<br>시행착오는 덜어드립니다.</h2>
    </div>
    <div class="instructor">
      <div class="instructor-body">
        <div class="instructor-name">
          <strong>한태진</strong>
          <span class="role">컨설턴트</span>
        </div>
        <blockquote>도입 후에도 제대로 활용되지 못하는 시스템을 많이 보았습니다.<br>그래서 교육과 컨설팅도 <span class="q-hl">실제 업무에서 활용되는 것</span>을 목표로 합니다.</blockquote>
        <table class="career">
          <tr><th>현재</th><td>(주)팩앤롤 기술이사, G2ROW 대표 강사</td></tr>
          <tr><th>이력</th><td>OOO OO OOOO 과정 수행</td></tr>
          <tr><th>학력</th><td>OO대학교 컴퓨터OO학부 석사</td></tr>
          <tr><th>전문 분야</th><td class="career-tags"><span class="skill-tag">생성형 AI</span><span class="skill-tag">AX 컨설팅</span><span class="skill-tag">스마트공장 구축</span><span class="skill-tag">업무 자동화</span></td></tr>
        </table>
        <div class="instructor-social">
          <span class="soc" title="쓰레드 (URL 미정)"><img src="assets/img/icon-threads-.png" alt="쓰레드"></span>
          <span class="soc" title="블로그 (URL 미정)"><img src="assets/img/icon-blog.png" alt="블로그"></span>
          <span class="soc" title="페이스북 (URL 미정)"><img src="assets/img/icon-facebook.png" alt="페이스북"></span>
          <span class="soc" title="유튜브 (URL 미정)"><img src="assets/img/icon-youtube.png" alt="유튜브"></span>
        </div>
      </div>
      <div class="photo"><img src="assets/img/instructor-han.jpg" alt="한태진 컨설턴트 — 스마트팩토리 컨퍼런스 강연"></div>
    </div>
  </div>
</section>

<!-- ============================ S6 왜 G2ROW인가 ============================ -->
<section id="stats-row">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">왜 G2ROW인가</span>
      <h2>제조·물류 현장을<br>잘 아는 실행 파트너</h2>
    </div>

    <div class="statrow">
      <div class="sr-item">
        <div class="sr-label">기업 맞춤 솔루션 구축</div>
        <div class="sr-num"><span class="count" data-count="100">100</span><span class="sr-suf">+건</span></div>
      </div>
      <div class="sr-item">
        <div class="sr-label">정부지원 사업 수행</div>
        <div class="sr-num"><span class="count" data-count="30">30</span><span class="sr-suf">+건</span></div>
      </div>
      <div class="sr-item">
        <div class="sr-label">제조·물류 시스템 경험</div>
        <div class="sr-num"><span class="count" data-count="12">12</span><span class="sr-suf">년</span></div>
      </div>
    </div>

    <div class="sr-points">
      <div class="sr-point sr-point--lg">
        <strong>제조·물류 업무를 이해하는 경험</strong>
        <p>업종별 현장 특성을 이해한 실전 구축 프로젝트를 다수 보유하고 있습니다.</p>
        <div class="sr-thumb sr-thumb--logos">
          <div class="logo-marquee">
            <div class="logo-track">
              <span class="logo-item"><img src="assets/img/client-1.png" alt="한화오션"></span>
              <span class="logo-item"><img src="assets/img/client-2.png" alt="일동제약"></span>
              <span class="logo-item"><img src="assets/img/client-3.png" alt="세아제강"></span>
              <span class="logo-item"><img src="assets/img/client-4.png" alt="세메스"></span>
              <span class="logo-item"><img src="assets/img/client-5.png" alt="미래엔"></span>
              <span class="logo-item"><img src="assets/img/client-6.png" alt="에스티밴드"></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-1.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-2.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-3.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-4.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-5.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client-6.png" alt=""></span>
            </div>
          </div>
          <div class="logo-marquee">
            <div class="logo-track logo-track--rev">
              <span class="logo-item"><img src="assets/img/client_7.png" alt="벽산"></span>
              <span class="logo-item"><img src="assets/img/client_8.png" alt="레이크"></span>
              <span class="logo-item"><img src="assets/img/client_9.png" alt="국립생태원"></span>
              <span class="logo-item"><img src="assets/img/client_10.png" alt="도어코리아"></span>
              <span class="logo-item"><img src="assets/img/client_11.png" alt="와이씨켐"></span>
              <span class="logo-item"><img src="assets/img/client_12.png" alt="현대트랜시스"></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_7.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_8.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_9.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_10.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_11.png" alt=""></span>
              <span class="logo-item" aria-hidden="true"><img src="assets/img/client_12.png" alt=""></span>
            </div>
          </div>
        </div>
        <a href="https://www.facnroll.co.kr/case" target="_blank" rel="noopener" class="sr-more">구축 사례 더 보기 <span class="msym">arrow_forward</span></a>
      </div>
      <div class="sr-point sr-point--kasmo">
        <strong>스마트공장 공급기업 Pool 등록</strong>
        <p>인공지능혁신추진단(KASMO) 인증 공급기업으로,<br>만족도 4.69점을 기록했습니다.</p>
        <div class="sr-thumb sr-thumb--fill"><img src="assets/img/badge-kasmo.jpg" alt="KASMO 인공지능혁신추진단"></div>
      </div>
      <div class="sr-point">
        <strong>정부 지원사업 완주 실적</strong>
        <p>지원사업 준비부터 선정, 수행까지 전 과정을 경험한 노하우를 보유하고 있습니다.</p>
        <div class="sr-thumb"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ AI 프로젝트 사례 (원본 카드 캐러셀) ============================ -->
<section class="section-pad section-soft" id="results">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">AI 프로젝트</span>
      <h2>AI로 만드는 업무 변화</h2>
      <p>AI를 업무에 적용한 프로젝트를 확인해 보세요.</p>
    </div>
    <div class="pcase-cards" data-autoplay="5000">
      <div class="pcase-stage">
        <div class="pcase-viewport">
          <div class="pcase-track">
            <article class="pcase-card result-card">
              <div class="thumb"><img src="assets/img/case-tds-dashboard.png" alt="생산 실적 자동 집계 대시보드 미리보기" loading="lazy"></div>
              <div class="body"><span class="cat">제조</span><h3>생산 실적 자동 집계 대시보드</h3><p>수기 집계를 자동화해 실시간으로 생산 현황 파악</p></div>
            </article>
            <article class="pcase-card result-card">
              <div class="thumb"><img src="assets/img/case-tongin-dashboard.png" alt="품질 불량 데이터 분석·리포트 미리보기" loading="lazy"></div>
              <div class="body"><span class="cat">제조</span><h3>품질 불량 데이터 분석·리포트</h3><p>불량 데이터를 자동 분석해 원인·추이 리포트 생성</p></div>
            </article>
            <article class="pcase-card result-card">
              <div class="thumb"><img src="assets/img/case-foodfactory-dashboard.png" alt="설비 점검 이력 관리 미리보기" loading="lazy"></div>
              <div class="body"><span class="cat">제조</span><h3>설비 점검 이력 관리</h3><p>점검 기록을 디지털화하고 주기 알림 자동화</p></div>
            </article>
            <article class="pcase-card result-card">
              <div class="thumb"><img src="assets/img/case-brezelle-dashboard.png" alt="창고 재고 실시간 현황판 미리보기" loading="lazy"></div>
              <div class="body"><span class="cat">물류</span><h3>창고 재고 실시간 현황판</h3><p>입출고를 반영한 재고 현황을 한눈에</p></div>
            </article>
            <article class="pcase-card result-card">
              <div class="thumb">결과물 미리보기</div>
              <div class="body"><span class="cat">물류</span><h3>입출고 자동 기록·알림</h3><p>반복 입력을 줄이고 이상 상황 자동 알림</p></div>
            </article>
            <article class="pcase-card result-card">
              <div class="thumb">결과물 미리보기</div>
              <div class="body"><span class="cat">물류</span><h3>피킹·배송 최적화 도구</h3><p>동선·순서를 최적화해 작업 시간 단축</p></div>
            </article>
          </div>
        </div>
        <button class="pcase-arrow pcase-prev" type="button" aria-label="이전 사례"><span class="msym">chevron_left</span></button>
        <button class="pcase-arrow pcase-next" type="button" aria-label="다음 사례"><span class="msym">chevron_right</span></button>
      </div>
      <div class="pcase-dots" aria-label="사례 페이지"></div>
    </div>
  </div>
</section>

<!-- ============================ S7 진행 절차 ============================ -->
<section class="section-pad" id="process">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">진행 절차</span>
      <h2>상담부터 인수까지,<br>네 단계로 진행합니다.</h2>
      <p>할 수 있는 것과 없는 것, 비용과 범위를 먼저 확정하고 시작합니다.</p>
    </div>
    <ol class="gtl gtl-4">
      <li class="gtl-item">
        <span class="gtl-date"><span class="gtl-dot"></span>STEP 1</span>
        <h4>상담</h4>
        <p>어떤 업무가 불편한지부터 듣습니다.</p>
      </li>
      <li class="gtl-item">
        <span class="gtl-date"><span class="gtl-dot"></span>STEP 2</span>
        <h4>진단 · 범위 확정</h4>
        <p>할 수 있는 것과 없는 것을 먼저 확인합니다.</p>
      </li>
      <li class="gtl-item">
        <span class="gtl-date"><span class="gtl-dot"></span>STEP 3</span>
        <h4>구축 · 교육</h4>
        <p>필요한 프로그램을 직접 만들 수 있도록 알려 드립니다.</p>
      </li>
      <li class="gtl-item">
        <span class="gtl-date"><span class="gtl-dot"></span>STEP 4</span>
        <h4>인수 · 운영</h4>
        <p>개발 코드와 환경을 직접 운영할 수 있도록 지원합니다.</p>
      </li>
    </ol>
  </div>
</section>

<!-- ============================ S8 FAQ ============================ -->
<section class="section-pad section-soft" id="faq">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">FAQ</span>
      <h2>자주 묻는 질문</h2>
    </div>
    <div class="faq">
      <details open>
        <summary><span class="q">개발을 몰라도 되나요?</span></summary>
        <p>네. 엑셀로 업무를 하실 수 있다면 시작할 수 있습니다. 만들고 싶은 프로그램을 글로 작성하면 AI가 코드를 만들어 줍니다. 교육 4시간 안에 직접 하나의 프로그램을 만들어 배포까지 해봅니다.</p>
      </details>
      <details>
        <summary><span class="q">사내 데이터가 없어도 시작할 수 있나요?</span></summary>
        <p>가능합니다. 처음부터 많은 데이터가 필요하지 않습니다. 먼저, 어떤 업무에 AI를 적용할지 함께 찾고 그 업무에 필요한 데이터가 무엇인지부터 차근차근 정리해 드립니다.</p>
      </details>
      <details>
        <summary><span class="q">교육으로 만든 프로그램을 실무에 써도 되나요?</span></summary>
        <p>간단한 업무라면 바로 활용할 수 있습니다. 사용하면서 필요한 기능이 생기면 AI에게 요청해 계속 수정할 수 있습니다. 처음부터 완성된 프로그램을 만드는 것이 아니라, 실제로 사용하면서 필요한 만큼 발전시켜 갑니다.</p>
      </details>
      <details>
        <summary><span class="q">키트는 정확히 뭘 받는 건가요?</span></summary>
        <p>PC 한 대와 그 안에 미리 설치된 개발 환경, 그리고 프로그램을 만들고 배포하는 데 필요한 플랫폼 계정을 제공합니다. 복잡한 개발 환경을 직접 구축하지 않고 바로 시작할 수 있습니다.</p>
      </details>
      <details>
        <summary><span class="q">회사에 있는 PC로도 되나요?</span></summary>
        <p>최소 사양을 충족하는 기존 PC가 있다면 새로 구매하지 않아도 됩니다. 저희가 필요한 개발 환경을 설치해 드립니다.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============================ S9 상담 신청 ============================ -->
<section class="section-pad contact" id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-intro">
        <span class="eyebrow">상담 신청</span>
        <h2>AI를 어디부터 시작해야 될지<br>함께 찾아드립니다.</h2>
        <p class="contact-sub">현재 고민을 들려주시면,<br>우리 회사에 맞는 시작점을 함께 찾아드립니다.</p>
        <div class="contact-info">
          <a class="ci-item" href="tel:1855-0313">
            <span class="msym">call</span>
            <span><span class="ci-label">대표번호</span><strong>1855-0313</strong></span>
          </a>
          <a class="ci-item" href="mailto:g2rowkr@gmail.com">
            <span class="msym">mail</span>
            <span><span class="ci-label">이메일</span><strong>g2rowkr@gmail.com</strong></span>
          </a>
          <span class="ci-item">
            <span class="msym">location_on</span>
            <span><span class="ci-label">주소</span><strong>부산광역시 남구 수영로 60, 3층</strong></span>
          </span>
        </div>
      </div>

      <div class="contact-form-wrap">
        <form class="form contact-form" id="inquiry" novalidate>
          <div class="row">
            <div class="field">
              <label for="f-company">회사명 <span class="req">*</span></label>
              <input id="f-company" name="company" type="text" placeholder="" required>
            </div>
            <div class="field">
              <label for="f-name">담당자명 <span class="req">*</span></label>
              <input id="f-name" name="name" type="text" placeholder="" required>
            </div>
          </div>
          <div class="row">
            <div class="field">
              <label for="f-tel">연락처 <span class="req">*</span></label>
              <input id="f-tel" name="tel" type="tel" inputmode="tel" placeholder="000-000-0000" required>
            </div>
            <div class="field">
              <label for="f-email">이메일</label>
              <input id="f-email" name="email" type="email" placeholder="name@company.co.kr">
            </div>
          </div>

          <div class="field">
            <label>문의 유형 <span class="lbl-note">복수 선택 가능</span></label>
            <div class="svc-list">
              <label class="svc"><input type="checkbox" name="svc" value="개발키트"><span class="svc-body"><strong>개발키트</strong><em>도입 · 구매 문의</em></span></label>
              <label class="svc"><input type="checkbox" name="svc" value="교육" id="svc-edu"><span class="svc-body"><strong>교육</strong><em>4시간 실무 과정</em></span></label>
              <label class="svc"><input type="checkbox" name="svc" value="구축 상담"><span class="svc-body"><strong>구축 상담</strong><em>솔루션 기획 · 구축</em></span></label>
              <label class="svc"><input type="checkbox" name="svc" value="무료 진단"><span class="svc-body"><strong>무료 진단</strong><em>진단 리포트 제공</em></span></label>
            </div>
          </div>

          <div class="field">
            <label for="f-msg">문의 내용</label>
            <textarea id="f-msg" name="message" placeholder="어떤 업무가 불편하신지 편하게 적어 주세요. 예) 출고 대장을 엑셀로 관리하는데 매일 수기로 옮겨 적습니다."></textarea>
          </div>

          <div class="consent">
            <input id="f-agree" type="checkbox" name="agree" required>
            <label for="f-agree"><span class="req">[필수]</span> <a href="privacy.php" target="_blank" rel="noopener">개인정보 수집·이용</a>에 동의합니다.</label>
          </div>

          <button class="btn btn-primary btn-block btn-lg" type="submit" style="margin-top:18px">상담 신청하기</button>
          <p class="form-msg" id="form-msg" role="status" hidden></p>
        </form>
      </div>
    </div>
  </div>
</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
