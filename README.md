# G2ROW 내부 작업 문서

내부 검토용 문서 저장소입니다. 외부 배포·인용을 위한 자료가 아닙니다.

## 구조

```
0.사업전략/          문서 원본 (단일 원본, 여기만 편집)
1.홈페이지/          홈페이지 산출물 (작업 예정)
site/               Pages 사이트 껍데기 (레이아웃 · CSS · robots.txt)
.github/workflows/  push 시 자동 빌드·배포
```

## 편집 방법

`0.사업전략/*.md` 만 수정하고 push 하면 됩니다.
사이트는 빌드 시점에 원본을 읽어 생성하므로 **사본을 따로 고칠 필요가 없습니다.**

```bash
git add . && git commit -m "docs: 내용 수정" && git push
```

## 검색 노출 차단

사이트에는 아래가 적용돼 있고, 빌드 단계에서 누락 여부를 검증합니다.

- 모든 페이지 `<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">`
- `robots.txt` 전체 `Disallow: /` (Google · Bing · 네이버 · 다음 · AI 크롤러 포함)

> ⚠️ **주의** — 위 설정은 *검색엔진 색인*만 막습니다.
> 이 저장소는 public 이므로 **URL을 아는 사람은 계정 없이 사이트를 볼 수 있고, GitHub 상의 파일도 열람 가능합니다.**
> 완전한 비공개가 필요하면 저장소를 private 으로 전환해야 합니다 (이 경우 Pages 사이트는 사용 불가).
