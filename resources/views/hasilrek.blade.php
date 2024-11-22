@extends('back.index')
@section('content')
<div class="container zindex-4 pt-4"></div>
<div class="mb-4 row align-items-center"></div>
<section id="landings" class="container text-center pt-5 mt-2 mt-md-4 mt-lg-5">
    <h2 class="h1 pt-2 pt-lg-0">HASIL PRODUK</h2>
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
      <a href="{{ route('rekrekomen') }}" class="btn btn-primary shadow-primary btn-lg">Kembali</a>

      <!-- Modal-->
    @foreach($products as $product)
    <div class="modal fade" tabindex="-1" role="dialog" id="Modal{{ $loop->index + 1 }}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $loop->iteration }}. {{ $product->nama_batik }}</h5>
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

                    
                    <div class="dropdown align-self-end mt-auto">
                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-info-circle"></i> Pesan
                        </button>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                          <div class="d-flex justify-content-start">
                            <a href="https://www.tiktok.com/@batikamarta?is_from_webapp=1&sender_device=pc" target="_blank" class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> Tiktok</a>
                            <a href="https://www.tokopedia.com/archive-batikamartha-169" target="_blank" class="btn btn-outline-info btn-sm mx-1"><i class="bi bi-check"></i> Tokopedia </a>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>
@endsection
