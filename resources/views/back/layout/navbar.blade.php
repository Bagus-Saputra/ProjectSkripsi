<header class="header navbar navbar-expand-lg bg-light shadow-sm fixed-top">
  <div class="container px-3">
    <a href="/" class="navbar-brand pe-3">
      <img src="assets/img/logo.svg" width="47" alt="batikamarta">
      Batik Amarta
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('rekomen') }}" class="nav-link">Rekomendasi</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('prod') }}" class="nav-link">Produk</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pesan') }}" class="nav-link">Pesan</a>
          </li>
        </ul>
      </div>
      {{-- <div class="offcanvas-header border-top">
        <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
          <i class="bx bx-cart fs-4 lh-1 me-1"></i>
        </a>
      </div>       --}}
    </div>
    <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
      <input type="checkbox" class="form-check-input" id="theme-mode">
      <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
      <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
    </div>
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/login" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="" rel="noopener">
      <i class="bx bx-log-in fs-lg me-2"></i>
      &nbsp;Login
    </a>
    
  </div>
</header>