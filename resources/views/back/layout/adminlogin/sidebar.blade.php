{{-- <aside class="dark-mode">
    <div id="componentsNav" class="offcanvas-lg offcanvas-start d-flex flex-column position-fixed top-0 start-0 vh-100 bg-dark border-end-lg" style="width: 21rem; z-index: 1045;">
      <div class="offcanvas-header d-none d-lg-flex justify-content-start">
        <a href="typography.html" class="navbar-brand text-dark d-none d-lg-flex py-0">
          <img src="../assets/img/logo.svg" width="47" alt="Silicon">
          Batik Amarta
        </a>
      </div>
      <div class="offcanvas-header d-block d-lg-none border-bottom">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h5 class="d-lg-none mb-0">Menu</h5>
          <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#componentsNav"></button>
        </div>
        <div class="list-group list-group-flush mx-n4">
          <a href="../index.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
            <i class="bx bx-desktop fs-lg opacity-80 me-2"></i>
            Preview
          </a>
          <a href="../docs/getting-started.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
            <i class="bx bx-file fs-lg opacity-80 me-2"></i>
            Documentation
          </a>
        </div>
      </div>
      <div class="offcanvas-body swiper scrollbar-hover overflow-hidden w-100 p-4" data-swiper-options='{
        "direction": "vertical",
        "slidesPerView": "auto",
        "freeMode": true,
        "scrollbar": {
          "el": ".swiper-scrollbar"
        },
        "mousewheel": true
      }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide h-auto">
            <h3 class="fs-lg">Data Admin</h3>
            <div class="list-group list-group-flush border-bottom pb-3 mb-4 mx-n4">
              <a href="{{ route('berandaadmin') }}" class="list-group-item list-group-item-action border-0 py-2 px-4 active">Dashboard</a>
              <a href="{{ route('ahh') }}" class="list-group-item list-group-item-action border-0 py-2 px-4" >Produk</a>
              <a href="{{ route('rekdata') }}" class="list-group-item list-group-item-action border-0 py-2 px-4">Rekomendasi</a>
              <a href="images.html" class="list-group-item list-group-item-action border-0 py-2 px-4">Images &amp; figures</a>
              <a href="tables.html" class="list-group-item list-group-item-action border-0 py-2 px-4">Tables</a>
            </div>
          </div>
        </div>
        <div class="swiper-scrollbar end-0"></div>
      </div>
      <div class="offcanvas-header border-top">
        <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
          <i class="bx bx-cart fs-4 lh-1 me-1"></i>
          &nbsp;Buy now
        </a>
      </div>
    </div>
</aside> --}}
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="{{ route('berandaadmin') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('ahh') }}">
            <i class="bi bi-circle"></i><span>Data Produk</span>
          </a>
        </li>
        <li>
          <a href="{{ route('rekdata') }}">
            <i class="bi bi-circle"></i><span>Data Rekomendasi</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
        <li>
          <a href="charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>ApexCharts</span>
          </a>
        </li>
        <li>
          <a href="charts-echarts.html">
            <i class="bi bi-circle"></i><span>ECharts</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="icons-bootstrap.html">
            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-remix.html">
            <i class="bi bi-circle"></i><span>Remix Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-boxicons.html">
            <i class="bi bi-circle"></i><span>Boxicons</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav --> --}}

    {{-- <li class="nav-heading">Pages</li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-error-404.html">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li><!-- End Error 404 Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-blank.html">
        <i class="bi bi-file-earmark"></i>
        <span>Blank</span>
      </a>
    </li><!-- End Blank Page Nav -->

  </ul> --}}

</aside>