@extends('back.index')
@section('content')
<section class="dark-mode vh-100 bg-repeat-0 bg-position-center bg-size-cover overflow-hidden" style="background-image: url(assets/img/landing/intro/hero/bg.jpg);">
  <div class="container vh-100">
    <div class="row flex-nowrap vh-100">
      <div class="col-lg-4 col-md-5 d-flex flex-column text-center text-md-start py-5">
        <h1 class="display-3 mt-auto mb-4">Batik Amarta</h1>
        <p class="lead text-light opacity-70 pb-5 mb-0 mb-md-3">Website</p>
        
        <div class="position-relative d-flex align-items-center justify-content-center justify-content-md-start mb-md-4 mb-lg-5 mt-auto">
          <div class="btn btn-icon btn-secondary rounded-circle">
            <i class="bx bx-chevron-down"></i>
          </div>
          <a href="#landings" class="nav-link stretched-link text-light fw-normal opacity-80 py-2 px-3" data-scroll data-scroll-offset="70">Lihat Kebawah</a>
        </div>
      </div>
      <div class="d-flex flex-shrink-0 align-items-start">
        <img src="assets/img/landing/intro/hero/screens01.png" class="rellax d-block flex-shrink-0 mt-n5" width="486" height="1390" alt="Screens" data-rellax-speed="4" data-disable-parallax-down="md">
        <img src="assets/img/landing/intro/hero/screens02.png" class="rellax d-block flex-shrink-0 mt-5" width="486" height="1470" alt="Screens" data-rellax-speed="-4" data-disable-parallax-down="md">
        <img src="assets/img/landing/intro/hero/screens01.png" class="rellax d-block flex-shrink-0" width="486" height="1480" alt="Screens" data-rellax-speed="4" data-disable-parallax-down="md">
      </div>
    </div>
  </div>
</section>
<section id="landings" class="container text-center pt-5 mt-2 mt-md-4 mt-lg-5">
    <h2 class="h1 pt-2 pt-lg-0">PRODUK</h2>
    <p class="fs-lg pb-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5">Baju Batik Berbagai Jenis Motif Batik dan Selamat Menikmati Pilihan Sesuai Anda</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik1c.jpg" class="b-block border rounded-3 shadow-sm" alt="Mobile App Showcase v.1">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#Modal1">
            Baju Batik Pria Modern Slim Fit Jumbo Merak Abu Tua - S
            <span class="badge bg-success fs-xs ms-2">New</span>
          </a>
        </h3>
      </div>
      
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik2a.jpg" class="b-block border rounded-3 shadow-sm" alt="Mobile App Showcase v.2">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-mobile-app-showcase-v2.html" class="stretched-link">Baju Batik Pria Modern Premium Slim Fit Kandas Abu - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik3c.jpg" class="b-block border rounded-3 shadow-sm" alt="Mobile App Showcase v.2">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-startup.html" class="d-flex justify-content-center align-items-center stretched-link">Baju Batik Pria Modern Premium Slim Fit Kawung Tosca - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik4b.jpg" class="b-block border rounded-3 shadow-sm" alt="Product Landing">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-product.html" class="d-flex justify-content-center align-items-center stretched-link">Baju Batik Pria Modern Slim Fit Jumbo Jagad Abu - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik5c.jpg" class="b-block border rounded-3 shadow-sm" alt="SaaS v.1">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-saas-v1.html" class="stretched-link">Baju BaTik Pria Modern Premium Jumbo Slim Fit Gegot - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik6a.jpg" class="b-block border rounded-3 shadow-sm" alt="SaaS v.2">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-saas-v2.html" class="stretched-link">Baju Batik Pria Modern Premium Jumbo SLim Fit Prada SLV - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik7a.jpg" class="b-block border rounded-3 shadow-sm" alt="SaaS v.3">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-saas-v3.html" class="stretched-link">Baju Batik Pria Modern Jumbo Slim Fit Kasual Jkw Hitam - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik8a.jpg" class="b-block border rounded-3 shadow-sm" alt="Financial Consulting">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-financial.html" class="stretched-link">Baju Batik Pria Modern Jumbo Premium Slim Fit Amarta - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik9a.jpg" class="b-block border rounded-3 shadow-sm" alt="Online Courses">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-online-courses.html" class="stretched-link">Baju Batik Pria Modern Premium Slim Fit Bango Coklat - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik10a.jpg" class="b-block border rounded-3 shadow-sm" alt="Medical">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-medical.html" class="stretched-link">Baju Batik Pria Modern Premium SLim Fit Awan Mendung - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik11a.jpg" class="b-block border rounded-3 shadow-sm" alt="Digital Agency">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-digital-agency.html" class="stretched-link">Baju Batik Pria Modern Premium Jumbo Slim Fit Abs Mrh X - S</a>
        </h3>
      </div>
      <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
        <img src="assets/img/produk/batik12a.jpg" class="b-block border rounded-3 shadow-sm" alt="Conference">
        <h3 class="h5 mt-4 mb-3 mb-lg-0">
          <a href="landing-conference.html" class="stretched-link">Baju Batik Pria Modern Premium Jumbo Slim Fit Ganesha - S</a>
        </h3>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="Modal1">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detail Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="assets/img/produk/batik1c.jpg" class="img-fluid rounded-3" alt="Image">
              </div>
              <div class="col-md-6 d-flex flex-column">
                <p class="flex-grow-1 mb-3" style="text-align: justify;">
                  Deskripsi produk yang mendetail bisa dituliskan di sini. Menyertakan informasi mengenai bahan, ukuran, cara perawatan, dan detail lainnya. Deskripsi produk yang mendetail bisa dituliskan di sini. Menyertakan informasi mengenai bahan, ukuran, cara perawatan, dan detail lainnya.
                </p>
                
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <div class="dropdown align-self-end mt-auto">
              <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-info-circle"></i> Tersedia Ukuran
              </button>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                <div class="d-flex justify-content-start">
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> S</button>
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> M</button>
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> L</button>
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> XL</button>
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> XXL</button>
                  <button class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> XXXL</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  
@endsection