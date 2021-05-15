@extends('layouts.web')

@section('judul', 'Laporan Pemesanan')
<style>
#d{
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
<h2 id="d"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>&#160;Laporan Pemesanan</h2>
<hr />
@foreach($liat as $li)
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesanan</th>
      <th scope="col">kode Modil</th>
      <th scope="col">Nama Mobil</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Telephone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td>{{ $li->nama_pemesanan }}</td>
      <td>{{ $li->kode_mobil }}</td>
      <td>{{ $li->nama_mobil }}</td>
      <td>{{ $li->tanggal_pemesanan }}</td>
      <td>{{ $li->alamat }}</td>
      <td>{{ $li->no_telephone }}</td>
    </tr>
  </tbody>
</table>
 @endforeach
</body>
</html>

@endsection