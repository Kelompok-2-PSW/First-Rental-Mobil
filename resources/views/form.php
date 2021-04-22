<!DOCTYPE HTML>  
<html>
<head>
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

<h2>FORM RENT</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama Pemesanan:<br>
  <input type="text" name="name">
  <br><br>
  Kode Mobil:<br>
  <input type="text" name="Kode Mobil">
  <br><br>
  Nama Mobil:<br>
  <input type="text" name="Nama Mobil">
  <br><br>
  Alamat:<br>
  <input type="text" name="Alamat">
  <br><br>
  No. Telephone:<br>
  <input type="text" name="No. Telephone">
  <br><br>
  Biaya Sewa:<br>
   <textarea name="Biaya Sewa" rows="5" cols="40"></textarea>
  <br><br>
  Tanggal :<br>
  <input type="date" name="Tanggal">
  <br><br>
  Pilihan Pengambilan Mobil:
  <br><br>
  <input type="radio" name="memilih" value="Ambil Mobil Ditempat">Ambil Mobil Ditempat
  <br><br>
  <input type="radio" name="memilih" value="Mobil diantar ke alamat Rumah">Mobil diantar ke alamat Rumah
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>