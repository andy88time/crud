<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belajar CRUD </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				
				<h3 class="fontmerah">Data Kampus</h3>

				<div class="form-group">
					
				</div>

				<p align="right">
					<a href="/add" class="btn btn-success">Create</a>
				</p>
				<!-- 
				<form action="/Kampus/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Kampus .." value="">
					<input class="btn btn-danger ml-3" type="submit" value="CARI">
				</form>
				--> 
				<br/>


				<table class="table table-striped">
					<tr>
						<th>Nim</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
					@foreach($datamahasiswa as $item)
					<tr>
						<td>{{ $item->nim }}</td>
						<td>{{ $item->nama }}</td>
						<td>{{ $item->alamat }}</td>
						<td><a class="btn btn-primary" href="/view/{{ $item->id }}">view</a> 
							<a class="btn btn-success" href="/edit/{{ $item->id }}">Edit</a> 
							<a class="btn btn-danger" href="/delete/{{ $item->id }}">Delete</a></td>
					</tr>
					@endforeach
				</table>

			</div>
		</div>
	</div>


</body>
</html>