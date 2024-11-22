@extends('back.index')
@section('content')
<section class="container py-5 my-5 my-md-4 my-lg-5">
  <h2 class="h1 text-center pt-1 pt-xl-3 mb-lg-4">Produk Tersedia</h2>
  <div class="row mx-n2">
      @foreach($products as $product)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2" data-bs-toggle="modal" data-bs-target="#Modal{{ $loop->index + 1 }}">
              <div class="card-img-top" style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="{{ asset('img/product/' . $product->gambar) }}" class="rounded-3" alt="{{ $product->nama_batik }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">{{ $product->nama_batik }}</h3>
              <p class="mb-0 limit-text">{{ $product->deskripsi }}</p>
              <div class="d-flex align-items-baseline">
                  <div class="fw-bold fs-5 text-primary">
                      Rp{{ number_format($product->harga, 0, ',', '.') }},-
                  </div>
              </div>
          </div>
      </div>
      @endforeach

      <!-- Modal -->
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
                  <img src="{{ asset('/img/product/' . $product->gambar) }}" class="img-fluid rounded-3" alt="{{ $product->nama_batik }}">
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
            </div>
          </div>
        </div>
      </div>
      @endforeach
  </div>

  <!-- Pagination -->
  <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
          {{ $products->links() }}
      </ul>
  </nav>
</section>
@endsection
