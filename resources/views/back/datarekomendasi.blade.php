@extends('back.layout.index')

@section('sidebar')
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('berandaadmin') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('product.index') }}">
            <i class="bi bi-circle"></i><span>Data Produk</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('reko.index') }}">
            <i class="bi bi-circle"></i><span>Data Rekomendasi</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
@endsection

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Rekomendasi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('berandaadmin') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rekomendasi</h5>
            <hr class="my-4">

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggan</th>
                  <th>Jenis Batik</th>
                  <th>Warna</th>
                  <th>Bahan</th>
                  <th>Kualitas</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rekomen as $rekomens)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $rekomens->nama_pelanggan}}</td>
                  <td>{{ $rekomens->jenis_batik}}</td>
                  <td>{{ $rekomens->warna}}</td>
                  <td>{{ $rekomens->bahan}}</td>
                  <td>{{ $rekomens->kualitas}}</td>
                  <td>{{ $rekomens->harga}}</td>
                  <td>
                    <div class="btn-group btn-sm" role="group" aria-label="Delete settings">
                      <button class="btn btn-outline-danger btn-icon" type="button" data-bs-toggle="modal" data-bs-placement="bottom" data-bs-target="#modalhapus{{ $rekomens->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                          <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                          <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

            <!-- Modal Hapus (semua modal ditempatkan di luar loop) -->
            @foreach ($rekomen as $rekomens)
            <div class="modal fade" tabindex="-1" id='modalhapus{{ $rekomens->id }}' role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Hapus Rekomendasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Ingin Menghapus Rekomendasi <strong>{{ $rekomens->jenis_batik }}</strong> yang dipilih oleh <strong>{{ $rekomens->nama_pelanggan }}</strong>?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('reko.destroy', $rekomens->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
