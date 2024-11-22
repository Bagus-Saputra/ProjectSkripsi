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
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-link">
          <a href="{{ route('product.index') }}">
            <i class="bi bi-circle"></i><span>Data Produk</span>
          </a>
        </li>
        <li>
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
    <h1>Data Produk</h1>
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
        @include('back.layout.alert')
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Produk</h4>
           
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalId">
              Tambah Produk
            </button>
            <hr class="my-4">

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>N</b>o
                  </th>
                  <th>Nama Batik</th>
                  <th>Jenis Batik</th>
                  <th>warna</th>
                  <th>bahan</th>
                  <th>kualitas</th>
                  <th>harga</th>
                  <th>gambar</th>
                  <th>deskripsi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                  @foreach ($product as $products)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{!! Str::limit($products->nama_batik, 10, '...') !!}</td>
                    <td>{{ $products->jenis_batik }}</td>
                    <td>{{ $products->warna }}</td>
                    <td>{{ $products->bahan }}</td>
                    <td>{{ $products->kualitas }}</td>
                    <td>{{ $products->harga }}</td>
                    <td><img src=" img/product/{{ $products->gambar }}" alt="Produk" class="rounded" width="100" height="70"></td>
                    <td>{!! Str::limit($products->deskripsi, 10, '...') !!}</td>
                    <td>

                      
                      <div class="btn-group" role="group" aria-label="Delete settings">
                        <button class="btn btn-outline-info btn-icon" type="button" data-bs-toggle="modal" data-bs-placement="bottom" data-bs-target="#modaledit{{ $products->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                      </div>
                      
                      
                      <div class="btn-group" role="group" aria-label="Delete settings">
                        <button class="btn btn-outline-danger btn-icon" type="button" data-bs-toggle="modal" data-bs-placement="bottom" data-bs-target="#modalhapus{{ $products->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></button>
                      </div>
                      
                      
                      
                    </td>
                  </tr>
              
              <!-- End Table with stripped rows -->

              <div class="modal fade" id="modalId" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambahkan Produk</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="tab-pane fade show active" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                          @endif
                          <div class="mb-3">
                            <label class="form-label" >Nama Batik</label>
                            <input class="form-control" type="text" name="nama_batik" placeholder="sangiran...">

                            <label class="form-label" >Jenis Batik</label>
                            <input class="form-control" type="text" name="jenis_batik">

                            <label class="form-label" >Warna</label>
                            <input class="form-control" type="text" name="warna">

                            <label class="form-label" >Bahan</label>
                            <input class="form-control" type="text" name="bahan">

                            <label class="form-label" >Kualitas</label>
                            <input class="form-control" type="text" name="kualitas">

                            <label class="form-label" >Harga</label>
                            <input class="form-control" type="text" name="harga">

                            <div class="mb-1">
                              <label for="file-input" class="form-label">File</label>
                              <input class="form-control" type="file" id="file-input" name="gambar">
                            </div>

                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" rows="5" type ="text" name="deskripsi" placeholder="ini bapak budi..."></textarea>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                        
                        </div>
                      </form>
                  </div>
                </div>
              </div>
              
              <div class="modal fade" tabindex="-1" id="modaledit{{ $products->id }}" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Produk</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="editProductForm" action="{{ route('product.update', ['product' => $products->id]) }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <label class="form-label">Nama Batik</label>
                          <input class="form-control" type="text" name="nama_batik" value="{{ $products->nama_batik }}">
                  
                          <label class="form-label">Jenis Batik</label>
                          <input class="form-control" type="text" name="jenis_batik" value="{{ $products->jenis_batik }}">
                  
                          <label class="form-label">Warna</label>
                          <input class="form-control" type="text" name="warna" value="{{ $products->warna }}">
                  
                          <label class="form-label">Bahan</label>
                          <input class="form-control" type="text" name="bahan" value="{{ $products->bahan }}">
                  
                          <label class="form-label">Kualitas</label>
                          <input class="form-control" type="text" name="kualitas" value="{{ $products->kualitas }}">
                  
                          <label class="form-label">Harga</label>
                          <input class="form-control" type="text" name="harga" value="{{ $products->harga }}">
                  
                          <label class="form-label">Gambar</label>
                          <input class="form-control" type="file" name="gambar">
                  
                          <label class="form-label">Deskripsi</label>
                          <textarea class="form-control" name="deskripsi">{{ $products->deskripsi }}</textarea>
                  
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                          </div>
                      </form>
                  </div>
                  
                  </div>
                </div>
              </div>
              
              <div class="modal fade" tabindex="-1" id='modalhapus{{ $products->id }}' role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda Ingin Menghapus Produk <strong>{{ $products->nama_batik }}</strong> dengan harga <strong>{{ $products->harga }}</strong>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    
              @endforeach
                
          </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection