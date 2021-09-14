@extends('dahsboard')

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
			font-size: 16px;
		}
		.demo-table th, 
		.demo-table td {
			padding: 4px 30px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 10px;
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
			border-right: 1px solid #C4FAF8;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #C4FAF8;
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
<p><h1 align ="center">Data ruangan</h1></p>
	<table class="demo-table">
		<caption class="title"> Data Ruangan </caption>
		<thead>
			<table="center">
			<tr>
			<th style="width:20px"> Kode</th>
			<th style="width:20px">Arti kode</th>
			<th style="width:20px">kode Ruangan</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>			
			</tr>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>			
			</tr>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>			
			</tr>
           
			
           

		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
</body>
</html>
@endsection