@extends('dashboard')
@section('content')
<div class="container">
<div class="card text mt-3 ml-5">
  <div class="card-header fw-bold">
    <h2>Tambah Data Barang</h1>
  </div>
  <div class="card-body">
  <form>
  <div class="mb-3">
    <label for="kodebarang" class="form-label">Kode Bidang Barang</label>
      <select id="kodebarang" class="form-select">
        <option>Barang Umum</option>
        <option>Barang Alat Umum</option>
        <option>Barang TU</option>
        <option>Barang Ruang Guru</option>
        <option>Barang Ruang Perpustakaan</option>
        <option>Barang UKS</option>
        <option>Barang Koperasi</option>
        <option>Barang Ruang Satpam</option>
      </select>
  <div class="mb-3">
    <label for="kodelokasi" class="form-label">Kode Lokasi</label>
    <select id="kodelokasi" class="form-select">
      <optgroup label="Gedung A">
      <option>Ruang Kepala Sekolah</option>
      <option>Ruang Tata Usaha dan Wakasek</option>
      <option>Pengurus Yayasan</option>
      <option>Sekretaris Yayasan</option>
      <option>Pantry</option>
      <option>VIP</option>
      <option>Kamar Mandi Lt.1</option>
      <option>Guru</option>
      <option>Rapat</option>
      <option>Kamar Mandi Lt.2</option>
    </optgroup>
    <optgroup label="Gedung B">
      <option>Lab.Bahasa</option>
      <option>Lab.IPA</option>
      <option>UKS dan BK</option>
      <option>Kamar Mandi Putri Lt.1</option>
      <option>Perpustakaan</option>
      <option>Ruang BK</option>
      <option>Kamar Mandi Lt.2</option>
    </optgroup>
    <optgroup label="Gedung C">
      <option>Kelas XII BKP</option>
      <option>Ruang Pramuka</option>
      <option>Ibadah</option>
      <option>Kamar Mandi Putri Lt.1</option>
      <option>Kelas XII TB</option>
      <option>Kelas XII RPL</option>
      <option>Kamar Mandi Putra Lt.2</option>
    </optgroup>
    <optgroup label="Gedung D">
      <option>Kelas XII BKP</option>
      <option>Ruang Pramuka</option>
      <option>Ibadah</option>
      <option>Kamar Mandi Putri Lt.1</option>
      <option>Kelas XII TB</option>
      <option>Kelas XII RPL</option>
      <option>Kamar Mandi Putra Lt.2</option>
    </optgroup>
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
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Konfirmasi penambahan barang</label>
  </div>
  
</form>
  <div class="card-footer text-muted">
  <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</div>
</div>


@endsection