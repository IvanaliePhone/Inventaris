@extends('dahsboard')
@section('content')
<div class="container col-md-9 col-xs-12 ">
<div class="card text mt-3 ml-5">
  <div class="card-header fw-bold">
  <h1><i class="fas fa-plus me-3"></i>Tambah Data Barang</h1>
  </div>
  <div class="card-body">
  <form>
  <div class="mb-3">
    <label for="kodebarang" class="form-label">Kode Bidang Barang</label>
      <select id="kodebarang" class="form-select">
        <option>-</option>
        <option>-</option>
        <option>-</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="gedung" class="form-label">Gedung</label>
      <select id="gedung" class="form-select">
        <option>-</option>
        <option>-</option>
        <option>-</option>
      </select>
    </div>
  <div class="mb-3">
    <label for="kodelokasi" class="form-label">Kode Lokasi</label>
      <select id="kodelokasi" class="form-select">
        <!-- <optgroup label="ayam">
            <option value="">goreng</option>
            <option value="">kuah</option>
        </optgroup>
        <optgroup label="ayam">
            <option value="">goreng</option>
            <option value="">kuah</option>
        </optgroup> -->
        <option>-</option>
        <option>-</option>
        <option>-</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="kodekelompokalat" class="form-label">Kode Kelompok Alat</label>
      <select id="kodekelompokalat" class="form-select">
        <option>-</option>
        <option>-</option>
        <option>-</option>
      </select>
  </div>
  <div class="mb-3">
      <label for="kodenamabarang" class="form-label">Kode Nama Barang</label>
      <select id="kodenamabarang" class="form-select">
        <option>-</option>
        <option>-</option>
        <option>-</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="namabarang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" >
  </div>
  <div class="mb-3">
    <label for="merkbarang" class="form-label">Merk Barang</label>
    <input type="text" class="form-control" id="merkbarang" >
  </div>
  <div class="mb-3">
    <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
    <input type="date" class="form-control" id="tanggalmasuk">
  </div>
  <div class="mb-3">
    <label for="kondisibarang" class="form-label">Kondisi Barang</label>
    <input type="text" class="form-control" id="kondisibarang" >
  </div>
  <div class="mb-3">
    <label for="sumberdana" class="form-label">Sumber Dana</label>
    <input type="text" class="form-control" id="sumberdana" >
  </div>
  <div class="mb-3">
    <label for="ketbarang" class="form-label">Keterangan Barang</label>
    <input type="text" class="form-control" id="ketbarang" >
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Konfirmasi penambahan barang</label>
  </div>
  </form>
  <div class="card-footer text-muted">
  <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</div>
</div>
@endsection