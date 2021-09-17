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
    </tr>
	@endforeach
    
  </tbody>
</table>
</body>
</html>
@endsection