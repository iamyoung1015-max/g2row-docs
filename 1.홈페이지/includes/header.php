<?php
/* $HOME — 랜딩(index.php) 이 아닌 페이지에서 앵커가 동작하도록 붙이는 접두사.
   index.php 에서는 비어 있어(''), 같은 문서 안 앵커로 부드럽게 이동한다.
   privacy.php 등 하위 페이지에서는 'index.php' 를 넣어 랜딩의 해당 위치로 보낸다. */
$HOME = $HOME ?? '';
?>
<!-- ============================ 헤더 ============================ -->
<header class="site-header">
  <div class="container header-inner">
    <a href="<?= $HOME ?>#top" class="logo"><img src="assets/img/logo.png" alt="G2ROW"></a>
    <div class="nav-wrap" id="nav">
      <nav class="nav">
        <a href="<?= $HOME ?>#setup">개발키트</a>
        <a href="<?= $HOME ?>#edu">교육</a>
        <a href="<?= $HOME ?>#instructor">강사</a>
        <a href="<?= $HOME ?>#stats-row">레퍼런스</a>
        <a href="<?= $HOME ?>#results">프로젝트 사례</a>
        <a href="<?= $HOME ?>#faq">FAQ</a>
      </nav>
      <div class="nav-actions">
        <a href="<?= $HOME ?>#contact" class="btn btn-primary btn-sm">전문 상담 신청하기</a>
      </div>
    </div>
    <button class="nav-toggle" aria-label="메뉴 열기"><span class="msym">menu</span></button>
  </div>
</header>
