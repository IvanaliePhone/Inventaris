@extends('dashboard')

@section('content')
<html>
<head>
	<style type="text/css">
		/* Table */
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		.demo-table {
			border-collapse: collapse;
			font-size: 12px;
		}
		.demo-table th, 
		.demo-table td {
			padding: 7px 17px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 12px;
		}
		.demo-table thead th:last-child,
		.demo-table tfoot th:last-child,
		.demo-table tbody td:last-child {
			border: 0;
		}

		/* Table Header */
		.demo-table thead th {
			border-right: 1px solid #c7ecc7;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child {
			text-align: right;
		}
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			transition: all .2s;
		}

		/* Table Footer */
		.demo-table tfoot th {
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tfoot th:first-child {
			text-align: right;
		}
	</style>
</head>
<body>
<center><p><h1><i class="fas fa-archway me-3"></i>DATA BARANG</h1></p>
  <link rel="stylesheet" type="text/css" href="style.css">
<center>
  <table class="table caption-top">
    <thead>
    <tr>
      <th scope="col">Kode Inventaris</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Merek Barang</th>
	  <th scope="col">Kondisi Barang</th>
	  <th scope="col">Sumber Dana</th>
	  <th scope="col">Keterangan Barang</th>
	  <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
	@foreach($barang as $barangs)
	<tr>
      <td>{{$barangs->no}}</td>
      <td>{{$barangs->nama_brg}}</td>
      <td>{{$barangs->kode_brg}}</td>
      <td>{{$barangs->merk_brg}}</td>
	  <td>{{$barangs->kondisi_brg}}</td>
      <td>{{$barangs->sumber_dana}}</td>
      <td>{{$barangs->ket_brg}}</td>
	  <td><a href="{{url('databarang/'.$barangs->no.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Edit</button></a>
    <a href="" onclick="if(confirm('Do you want to delete item?'))event.preventDefault(); document.getElementById('delete-{{$barangs->no}}').submit();" class="btn btn-danger btn-sm">Delete</a>
                  <form id="delete-{{$barangs->no}}" method="post" action="{{route('delete',$barangs->no)}}" style="display: none;">
                  @csrf
                </form>

	</td>
    </tr>
	@endforeach
    
  </tbody>
</table>
@isset($data)
@php




@endphp
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action='{{route("update")}}' method='POST'>
  @csrf
  <div class="mb-3">
    <label for="kodebarang" class="form-label">Kode Bidang Barang</label>
      <select id="kodebarang" class="form-select" name='kodebidangbarang' required  >
        <option value='1' @if($data[0]->kode_bidang == '1') selected @endif>Barang Umum</option>
        <option value='2' @if($data[0]->kode_bidang == '2') selected @endif>Barang Alat Umum</option>
        <option value='3' @if($data[0]->kode_bidang == '3') selected @endif>Barang TU</option>
        <option value='4' @if($data[0]->kode_bidang == '4') selected @endif>Barang Ruang Guru</option>
        <option value='5' @if($data[0]->kode_bidang == '5') selected @endif>Barang Ruang Perpustakaan</option>
        <option value='6' @if($data[0]->kode_bidang == '6') selected @endif>Barang UKS</option>
        <option value='7' @if($data[0]->kode_bidang == '7') selected @endif>Barang Koperasi</option>
        <option value='8' @if($data[0]->kode_bidang == '8') selected @endif>Barang Ruang Satpam</option>
      </select>
  <div class="mb-3">
    <label for="kodelokasi" class="form-label">Kode Lokasi</label>
    <select id="kodelokasi" class="form-select" name='kodelokasi' required>
      @foreach($lokasi as $l)
        <option value='{{$l->kode_lokasi}}' @if($data[0]->kode_lokasi == $l->kode_lokasi) selected @endif>Gedung {{$l->gedung}} lantai {{$l->lantai}} ruangan {{$l->ruangan}} {{$l->ket_ruang}}</option> 
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="kodekelompokalat" class="form-label">Kode Kelompok Alat</label>
      <select id="kodekelompokalat" class="form-select" name='kodekelompokalat' required>
        @foreach($kelompokalat as $k)
          <option value="{{$k->kode_klmpk_alat}}" @if($data[0]->kode_klmpk_alat == $k->kode_klmpk_alat) selected @endif>{{$k->klmpk_alat}}  </option>

        @endforeach
      </select>
  </div>
  <div class="mb-3">
      <label for="kodenamabarang" class="form-label">Kode Nama Barang</label>
      <input type="text" class="form-control" id="namabarang" name='kodenamabarang' required value='{{$data[0]->kode_brg}}'>
    </div>
    <div class="mb-3">
    <label for="namabarang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" required name='namabarang' value='{{$data[0]->nama_brg}}'>
  </div>
  <div class="mb-3">
    <label for="merkbarang" class="form-label">Merk Barang</label>
    <input type="text" class="form-control" id="merkbarang" name='merek' required value='{{$data[0]->merk_brg}}'>
  </div>
  <div class="mb-3">
    <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
    <input type="date" class="form-control" id="tanggalmasuk" name='tanggal' required value='{{$data[0]->tanggal}}'>
  </div>

  <div class="mb-3">
    <label for="kondisibarang" class="form-label">Kondisi Barang</label>
    <input type="text" class="form-control" id="kondisibarang" name='kondisi' required value='{{$data[0]->kondisi_brg}}'>
  </div>
  <div class="mb-3">
    <label for="sumberdana" class="form-label">Sumber Dana</label>
    <input type="text" class="form-control" id="sumberdana" name="sumberdana" required value='{{$data[0]->sumber_dana}}'>
  </div>
  <div class="mb-3">
    <label for="ketbarang" class="form-label">Keterangan Barang</label>
    <input type="text" class="form-control" id="ketbarang" name="ketbarang" required value='{{$data[0]->ket_brg}}'>
  </div>
    
  <div class="mb-3 form-check">
  </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name='idb' value='{{$data[0]->no}}'>
        <button type='submit' class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>
@endisset
</body>
</html>
@endsection