@extends('back.login.index')
@section('content')
<section class="position-relative h-100 pt-5 pb-4">

    <!-- Sign in form -->
    <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
      <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
        <h1 class="text-center text-xl-start">Selamat Datang</h1>
        <p class="text-center text-xl-start pb-3 mb-3">Belum Punya Akun ? <a href="#">Daftar Disini.</a></p>
        <form class="needs-validation mb-2" action="/actionlogin" method="POST">
          @include('back.layout.alert')
          @csrf
          <div class="position-relative mb-4">
            <label for="email" class="form-label fs-base">Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-lg" aria-describedby="email" placeholder=" " name="email" required>
            <div class="invalid-feedback position-absolute start-0 top-100">Tolong Diisi Email Dengan Benar!</div>
          </div>
          <div class="mb-4">
            <label for="password" class="form-label fs-base">Password</label>
            <div class="password-toggle">
              <input type="password" name="password" id="password" class="form-control form-control-lg" required>
              <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox" aria-describedby="password" placeholder=" " name="password">
                <span class="password-toggle-indicator"></span>
              </label>
              <div class="invalid-feedback position-absolute start-0 top-100">Tolong Diisi Password Dengan Benar!</div>
            </div>
          </div>
          <div class="mb-4">
            <div class="form-check">
              <input type="checkbox" id="remember" class="form-check-input">
              <label for="remember" class="form-check-label fs-base">Remember me</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Sign in</button>
        </form> 
          
        <hr class="my-4">
        
        <a href="#" class="btn btn-link btn-lg w-100">Forgot your password?</a>

      </div>
      <div class="w-100 align-self-end">
        <p class="nav d-block fs-xs text-center text-xl-start pb-2 mb-0">
          &copy; All rights reserved. Made by 
          <a class="nav-link d-inline-block p-0" href="{{ route('login') }}" {{-- target="_blank" --}} rel="noopener">Human Secret</a>
        </p>    
      </div>
    </div>
    
    <!-- Background -->
    <div class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-cover d-none d-xl-block" style="background-image: url(assets/img/account/1.jpg);"></div>
  </section>

  <a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
  </a>


  <!-- Vendor Scripts -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Main Theme Script -->
  <script src="assets/js/theme.min.js"></script>
@endsection