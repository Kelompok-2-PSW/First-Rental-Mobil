@extends('layouts.app')

@section('judul', 'Form Rent')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>First Rental Mobil</title>
  </head>
  <body>
  <?php
$name = $kodemobil = $namamobil = $alamat = $notelp = $biayasewa = $tanggal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nama"]);
  $kodemobil = test_input($_POST["Kode Mobil"]);
  $namamobil = test_input($_POST["Nama Mobil"]);
  $alamat = test_input($_POST["Alamat"]);
  $notelp = test_input($_POST["No. Telephone"]);
  $biayasewa = test_input($_POST["Biaya Sewa"]);
  $tanggal = test_input($_POST["Tanggal"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br><br>
<div class="container">
<div class="container">
<h1><i class="fab fa-wpforms"></i> FORM RENT</h1></div>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="row container">
<div class="col-md-6">
<label for="">Nama Pemesanan </label>
  <input class="form-control" type="text" name="name">
  <label for="">Kode Mobil</label>
  <input class="form-control" type="text" name="Kode Mobil">
  <label for="">Nama Mobil </label>
  <input class="form-control" type="text" name="Nama Mobil">
  <label for="">Tanggal </label>
  <input class="form-control" type="date" name="Tanggal">
</div>
<div class="col-md-6">
  <label for="">Alamat</label>
  <input class="form-control" type="text" name="Alamat">
  <label for="">No. Telephone</label>
  <input class="form-control" type="number" name="No. Telephone">
  <label for=""> Biaya Sewa</label>
  <input class="form-control" type="number"name="Biaya Sewa">
</div>
<div class="container"><br>
Pilihan Pengambilan Mobil: <br>
  <input class="form-check-input" type="radio" name="memilih" value="Ambil Mobil Ditempat"> Ambil Mobil Ditempat <br>
  <input class="form-check-input" type="radio" name="memilih" value="Mobil diantar ke alamat Rumah"> Mobil diantar ke alamat Rumah <br>
  <div style="float:right;">
  <button class="btn-primary ms-auto" type="submit" name="simpan">Simpan</button>
  </div>
  <p style="font-size:12px; color:red; font-style:italic;">*Dikenakan biaya antar sebesar Rp 20.000,-</p>
  </div>  
</div>
</form>
</div>
  </body>
</html>
@endsection
