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
        @foreach($products as $product)
        <div class="col card-hover shadow-none bg-none position-relative mb-4 mb-lg-5">
            <img src="{{ asset('img/product/' . $product->gambar) }}" class="b-block border rounded-3 shadow-sm" alt="{{ $product->nama_batik }}">
            <h3 class="h5 mt-4 mb-3 mb-lg-0">
                <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#Modal{{ $loop->index + 1 }}">
                    {{ $loop->iteration }}. 
                    {{ $product->nama_batik }}
                </a>
            </h3>
        </div>
        @endforeach
    </div>

    @foreach($products as $product)
    <div class="modal fade" tabindex="-1" role="dialog" id="Modal{{ $loop->index + 1 }}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $product->nama_batik }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('img/product/' . $product->gambar) }}" class="img-fluid rounded-3" alt="{{ $product->nama_batik }}">
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <p class="flex-grow-1 mb-3" style="text-align: justify;">
                              {!! nl2br(e($product->deskripsi)) !!}
                            </p>
                            <div class="mt-auto fw-bold fs-5 text-primary">
                              Rp{{ number_format($product->harga, 0, ',', '.') }},-
                          </div>
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
                    <!-- Dropdown ukuran bisa ditambahkan di sini jika diperlukan -->
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>
@endsection
