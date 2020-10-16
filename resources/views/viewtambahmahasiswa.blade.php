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
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				@if (session('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
				@endif
				<h3 class="fontmerah">Tambah Data Mahasiswa</h3>
				<form method="post" action="/add">
					@csrf

					<div class="form-group">
					  <label for="nim">NIM</label>
					  <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim"  placeholder="Masukkan NIM Mahasiswa" >
					  <div class="invalid-feedback">NIM Harus diisi</div>
					  <small id="emailHelp" class="form-text text-muted">NIM harus unik.</small>
					</div>
					<div class="form-group">
					  <label for="nama">NAMA MAHASISWA</label>
					  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Mahasiswa">
					</div>
					<div class="form-group">
						<label for="nama">Nomor HP</label>
						<input type="text" class="form-control  @error('hp') is-invalid @enderror" id="hp" name="hp" placeholder="Nomor HP">
						<div class="invalid-feedback">HP Harus diisi</div>
					  </div>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
				
			</div>
		</div>
	</div>


</body>
</html>