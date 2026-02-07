<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="/laravel-app-pub/static/js/bootstrap.bundle.min.js"></script>
  <script src="/laravel-app-pub/static/js/jquery-3.7.1.min.js"></script>
  
  <link href="/laravel-app-pub/static/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    @media (max-width: 991.98px) {
      .auth-dropdown .auth-btn,
      .auth-btn {
        width: 100%;
        justify-content: center;
      }
      .auth-dropdown .dropdown-menu {
        width: 100%;
      }
    }
    @media (min-width: 992px) {
      .auth-dropdown .dropdown-menu {
        right: 0;
        left: auto;
      }
    }
    .sidebar-panel {
      background: #3c4147;
    }
  </style>
  <title>Document</title>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid px-3 px-lg-4">
      <div class="d-flex align-items-center w-100 d-lg-none">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Toggle sidebar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand fw-semibold mx-auto mb-0">Laravel Korea</span>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <a class="navbar-brand fw-semibold d-none d-lg-inline-flex" href="#">Laravel Korea</a>
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="topNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">학습자료</a></li>
          <li class="nav-item"><a class="nav-link" href="#">스터디/행사</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Q&amp;A</a></li>
        </ul>
        <!-- 로그인 -->
        <div class="dropdown auth-dropdown">
          <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center auth-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-box-arrow-in-right me-1" aria-hidden="true"></i>로그인
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right me-2" aria-hidden="true"></i>로그인</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus me-2" aria-hidden="true"></i>회원가입</a></li>
          </ul>
        </div>
        <!-- 마이페이지 (로그인후) -->
        <!-- 
        <button class="btn btn-outline-light d-flex align-items-center auth-btn" type="button">
          <i class="bi bi-person-circle me-1" aria-hidden="true"></i>My Page
        </button>
        -->
      </div>
    </div>
  </nav>

  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileSidebarLabel">메뉴</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="nav flex-column gap-2">
        <a class="nav-link text-white" href="#">릴리즈 노트</a>
        <a class="nav-link text-white" href="#">가이드</a>
        <a class="nav-link text-white" href="#">API 문서</a>
        <a class="nav-link text-white" href="#">시작하기</a>
        <a class="nav-link text-white" href="#">커뮤니티</a>
      </nav>
    </div>
  </div>

  <div class="container-fluid px-3 px-lg-4 py-4 flex-grow-1">
    <div class="row g-4">
      <aside class="col-lg-3 d-none d-lg-block">
        <div class="sidebar-panel text-white rounded-3 p-4 h-100">
          <h6 class="text-uppercase text-secondary small">프로그램</h6>
          <nav class="nav flex-column gap-2 mt-3">
            <a class="nav-link text-white" href="#">릴리즈 노트</a>
            <a class="nav-link text-white" href="#">업그레이드 가이드</a>
            <a class="nav-link text-white" href="#">가이드</a>
            <a class="nav-link text-white" href="#">API 문서</a>
            <a class="nav-link text-white" href="#">커뮤니티</a>
            <a class="nav-link text-white" href="#">공지사항</a>
            <a class="nav-link text-white" href="#">문의하기</a>
          </nav>
        </div>
      </aside>
      <main class="col-lg-9">
        <section class="bg-white p-4 p-lg-5 rounded-3 shadow-sm">
          <h1 class="display-6 fw-semibold">라라벨 한국어 매뉴얼</h1>
          <p class="text-secondary mb-4">헤더, 사이드바, 본문, 푸터 레이아웃만 잡은 반응형 샘플입니다.</p>
          <div class="row g-3">
            <div class="col-md-7">
              <div class="p-3 border rounded-3">
                <h6 class="fw-semibold">메인 콘텐츠 영역</h6>
                <p class="mb-0 text-secondary">실제 메뉴와 문서를 배치할 영역입니다.</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="p-3 border rounded-3">
                <h6 class="fw-semibold">보조 패널</h6>
                <p class="mb-0 text-secondary">검색/목차 같은 보조 정보 영역.</p>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <div class="vstack gap-3">
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 1</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 2</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 3</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 4</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 5</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 6</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 7</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 8</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 9</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 10</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 11</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 12</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 13</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 14</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 15</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 16</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 17</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 18</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 19</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
            <div class="p-3 border rounded-3 bg-light">
              <h6 class="fw-semibold">샘플 섹션 20</h6>
              <p class="mb-0 text-secondary">스크롤 테스트용 더미 콘텐츠입니다.</p>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

  <footer class="bg-dark text-secondary py-4">
    <div class="container-fluid px-3 px-lg-4">
      <div class="d-flex flex-wrap gap-3 border-bottom border-secondary pb-3 mb-3">
        <a class="text-white text-decoration-none" href="/laravel-app-pub/privacy-policy.html">개인정보처리방침</a>
        <a class="text-white text-decoration-none" href="/laravel-app-pub/terms-of-service.html">이용약관</a>
      </div>
      <div class="row g-3 align-items-start">
        <div class="col-12 col-lg-7">
          <h6 class="text-white mb-2">티이에치스터디그룹</h6>
          <div class="text-white-50 small">
            <div>관리자 : 이태희</div>
            <div>긴급연락처 : 010-2789-1039</div>
            <div>대표전화 : 031-494-4157</div>
            <div>이메일 : ceman08071039@gmail.com</div>
            <div>주소 : 경기도 안산시 단원구 시화호수로 633 마리나큐브오피스텔 909호</div>
          </div>
        </div>
        <div class="col-12 col-lg-5 text-center text-lg-end mt-2 mt-lg-0">
          <div class="text-white-50 small">© 2024 티이에치스터디그룹. All rights reserved.</div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    $(function() {
        alert("ok!!");
    });
  </script>
</body>
</html>
