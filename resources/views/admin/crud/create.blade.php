@extends('layouts.web')

@section('judul', 'car')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-`Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<script src="main.js"></script>
</head>
<body>
<div class="container">
<h2 id="c"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>&#160;Tambah Mobil</h2>
<hr />
<form method="POST" action="{{route('crud.store')}}" enctype="multipart/form-data">
@csrf
<h5>No Mobil</h5>
<input type="text" name="no_mobil" id="no" placeholder="Masukkan nomor mobil" class="form-control"><br>
<h5>Merk</h5>
<input type="text" name="merk" id="merk" placeholder="Masukkan merk mobil" class="form-control"><br>
<h5>Gambar</h5>
<input type="file" name="gambar" id="gambar" placeholder="Masukkan Nama Mobil yang akan di pesan" class="form-control"><br>
<h5>Harga</h5>
<input type="text" name="harga" id="harga" placeholder="Masukkan harga" class="form-control"><br>
<h5>STATUS</h5>
<input class="form-check-input" name="STATUS"  class="form-control" type="radio" value="Tidak Tersedia">Tidak Tersedia<br>
<input class="form-check-input" name="STATUS"  class="form-control" type="radio" value="Tersedia">Tersedia<br>
<input type="submit">
</div>
</form>
</body>
</html>

@endsection