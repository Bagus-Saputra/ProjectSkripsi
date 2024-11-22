@extends('back.index')
@section('content')
<section class="dark-mode vh-100 bg-repeat-0 bg-position-center bg-size-cover overflow-hidden" style="background-image: url(assets/img/landing/intro/hero/rekbg.jpg);">
    <div class="container vh-100">

      <!-- Text -->
      <div class="container zindex-5 pt-5">
        <div class="row justify-content-center text-center pt-4 pb-sm-2 py-lg-5">
          <div class="col-xl-8 col-lg-9 col-md-10 py-5">
            <h1 class="display-4 text-light pt-sm-2 pb-1 pb-sm-3 mb-3">Sistem Rekomendasi</h1>
            <h3>Bingung cari motif dan warna yang sesuai harga terjangkau ?</h3>
            <p class="fs-lg text-light opacity-70 pb-2 pb-sm-0 mb-4 mb-sm-5">Silahkan tekan tombol dibawah ini</p>
            <a href="{{ route('rekrekomen') }}" class="btn btn-primary shadow-primary btn-lg">Rekomendasi</a>
          </div>
        </div>
      </div>

      <!-- Bottom shape -->
      {{-- <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n4 mt-sm-n1" style="color: var(--si-dark);">
        <div class="position-relative start-50 translate-middle-x flex-shrink-0" style="width: 3788px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144"><path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"/></svg>
        </div>
      </div>
      <div class="d-none d-lg-block" style="height: 300px;"></div>
      <div class="d-none d-md-block d-lg-none" style="height: 150px;"></div> --}}
    </div>
  </section>

  <!-- Vendor Scripts -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="assets/vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
  <script src="assets/vendor/rellax/rellax.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/img-comparison-slider/dist/index.js"></script>

  <!-- Main Theme Script -->
  <script src="assets/js/theme.min.js"></script>
@endsection