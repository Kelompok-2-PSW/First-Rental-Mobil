@extends('layouts.app')

@section('judul', 'Form Rent')
<style>
#c{
      font-size:50px;
      font-family: 'serif';
    }
</style>
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</svg>&#160;FORM RENT</h2>
<hr />
<form action="{{ route('tambahdata')}}" method="POST">
@csrf
<h5>Nama Pemesanan</h5>
<input type="text" name="nama_pemesanan" id="nama" placeholder="Masukkan Nama anda" class="form-control"><br>
<h5>Kode Mobil</h5>
<input type="text" name="kode_mobil" id="kode" placeholder="Masukkan Kode Mobil yang akan di pesan" class="form-control"><br>
<h5>Nama Mobil</h5>
<input type="text" name="nama_mobil" id="mobil" placeholder="Masukkan Nama Mobil yang akan di pesan" class="form-control"><br>
<h5>Tanggal Pemesanan</h5>
<input type="date" name="tanggal_pemesanan" id="tanggal" placeholder="Pilih tanggal pemesanan" class="form-control"><br>
<h5>Alamat</h5>
<input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat anda" class="form-control"><br>
<h5>No.Telephone</h5>
<input type="text" name="no_telephone" id="telephone" placeholder="Masukkan No.telephone anda" class="form-control"><br>
<input type="submit">
</div>
</form>
</body>
</html>
@endsection
