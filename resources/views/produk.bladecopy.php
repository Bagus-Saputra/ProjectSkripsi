@extends('back.index')
@section('content')
<section class="container py-5 my-5 my-md-4 my-lg-5">
  <h2 class="h1 text-center pt-1 pt-xl-3 mb-lg-4">Produk Tersedia</h2>
  <div class="row mx-n2">
      <!-- Item -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
        <div class="card h-100 card-body card-hover mx-2" data-bs-toggle="modal" data-bs-target="#Modal1">
            <div class="card-img-top" style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                <img src="assets/img/produk/batik1c.jpg" class="rounded-3" alt="Image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Slim Fit Jumbo Merak Abu Tua - S</h3>
            <p class="mb-0 limit-text">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a magna ullamcorper consectetur.</p>
            <div class="d-flex align-items-baseline">
                <div class="fw-bold fs-5 text-primary">
                    Rp299.000,-
                </div>
            </div>
        </div>
    </div>


      <!-- Item 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik2a.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik2a.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Premium Slim Fit Kandas Abu - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>

      <!-- Item 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik3.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik3c.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Premium Slim Fit Kawung Tosca - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>

      <!-- Item 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik4b.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik4b.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Slim Fit Jumbo Jagad Abu - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik5c.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik5c.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju BaTik Pria Modern Premium Jumbo Slim Fit Gegot - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="fw-bold fs-5 text-primary">
                      Rp299.000,-
                  </div>
              </div>
          </div>
      </div>

      <!-- Item 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik6a.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik6a.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Premium Jumbo SLim Fit Prada SLV - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>

      <!-- Item 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik7a.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik7a.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Jumbo Slim Fit Kasual Jkw Hitam - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>

      <!-- Item 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">
          <div class="card h-100 card-body card-hover mx-2">
              {{-- <img src="assets/img/produk/batik8a.jpg" alt="Gallery image" class="rounded-3"> --}}
              <div class="card-img-top"
                  style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden;">
                  <img src="assets/img/produk/batik8a.jpg" class="rounded-3" alt="Image"
                      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
              </div>
              <h3 class="h5 pt-3 pb-1 mb-2">Baju Batik Pria Modern Jumbo Premium Slim Fit Amarta - S</h3>
              <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a
                  magna ullamcorper consectetur.</p>
              <div class="d-flex align-items-baseline">
                  <div class="text-decoration-line-through text-muted pe-2 text-truncate">
                      Rp299.000,-
                  </div>
                  <div class="fw-bold fs-5 text-danger">
                      Rp250.000,-
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pagination with prev / next icons only -->
  <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
          <li class="page-item">
              <a href="#" class="page-link">
                  <i class="bx bx-chevron-left mx-n1"></i>
              </a>
          </li>
          <li class="page-item disabled d-sm-none">
              <span class="page-link text-body">2 / 5</span>
          </li>
          <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">1</a>
          </li>
          <li class="page-item active d-none d-sm-block" aria-current="page">
              <span class="page-link">
                  2
                  <span class="visually-hidden">(current)</span>
              </span>
          </li>
          <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">3</a>
          </li>
          <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">4</a>
          </li>
          <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">5</a>
          </li>
          <li class="page-item">
              <a href="#" class="page-link">
                  <i class="bx bx-chevron-right mx-n1"></i>
              </a>
          </li>
      </ul>
  </nav>

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