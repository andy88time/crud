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
				
				<h3 class="fontmerah">Data Profil</h3>

				<div class="card" style="width: 18rem;">
					<div class="card-body">
					  <h5 class="card-title">{{ $mahasiswa->nim }} / {{ $mahasiswa->nama }}</h5>
					  <p class="card-text"> Add. {{ $mahasiswa->alamat }}</p>
					  <p class="card-text"> Phone. {{ $mahasiswa->hp }}</p>
					  <p class="card-text"> Email. {{ $mahasiswa->email }}</p>
					  <a href="/" class="btn btn-primary">Back</a>
					</div>
				  </div>
				

			</div>
		</div>
	</div>


</body>
</html>