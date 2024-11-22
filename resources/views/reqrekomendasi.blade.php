@extends('back.index')
@section('content')
<div class="container zindex-4 pt-4"></div>
<div class="mb-4 row align-items-center"></div>
<div class="mb-4 row align-items-center"></div>
<div class="mb-4 row align-items-center"></div>
<form action="{{ route('rekrekomenn') }}" method="POST">
  @include('back.layout.alert')
  @csrf
  <div class="mb-4 row align-items-center">
    <label class="col-md-2 col-form-label fs-sm" for="nama_pelanggan">Nama Pelanggan</label>
    <div class="col-md-10">
      <input class="form-control" type="text" id="nama_pelanggan" name="nama_pelanggan">
    </div>
  </div>

  <div class="mb-4 row align-items-center">
      <label class="col-md-2 col-form-label fs-sm" for="jenis_batik">Jenis Batik</label>
      <div class="col-md-10">
        <select class="form-select" id="jenis_batik" name="jenis_batik">
          <option>Choose option...</option>
          <option>Batik Tulis</option>
          <option>Batik Cetak</option>
          <option>Batik Printing</option>
        </select>
      </div>
  </div>
  <div class="mb-4 row align-items-center">
      <label class="col-md-2 col-form-label fs-sm" for="warna">Warna</label>
      <div class="col-md-10">
        <select class="form-select" id="warna" name="warna">
          <option>Choose option...</option>
          <option>Gelap</option>
          <option>Sedang</option>
          <option>Cerah</option>
        </select>
      </div>
  </div>
  <div class="mb-4 row align-items-center">
      <label class="col-md-2 col-form-label fs-sm" for="bahan">Bahan</label>
      <div class="col-md-10">
        <select class="form-select" id="bahan" name="bahan">
          <option>Choose option...</option>
          <option>Katun</option>
          <option>Dolby</option>
          <option>Polyester</option>
        </select>
      </div>
  </div>
  <div class="mb-4 row align-items-center">
      <label class="col-md-2 col-form-label fs-sm" for="kualitas">Kualitas</label>
      <div class="col-md-10">
        <select class="form-select" id="kualitas" name="kualitas">
          <option>Choose option...</option>
          <option>Premium</option>
          <option>Modern</option>
          <option>Jumbo</option>
        </select>
      </div>
  </div>
  <div class="mb-4 row align-items-center">
    <label class="col-md-2 col-form-label fs-sm" for="harga">Harga</label>
    <div class="col-md-10">
      <input class="form-control" type="text" id="harga" name="harga">
    </div>
  </div>
  <div class="container zindex-1 pt-1">
    <div class="row justify-content-center text-center pt-4 pb-sm-2 py-lg-5">
      <div class="col-xl-8 col-lg-9 col-md-10 py-5">
        <button type="submit" class="btn btn-primary shadow-primary btn-lg">Cari</button>
      </div>
    </div>
  </div>
</form>
@endsection
