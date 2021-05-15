@extends('layouts.app')

@section('judul', 'First Rental')
<style>
    #judul1{
      font-size:80px;
      font-family: 'serif';
      text-shadow: 0px 0px 20px #232323;
      color:black;
      font-style: bold;
    }

    #judul2{
      font-size:50px;
      font-family: 'serif';
    }

    .isi{
      font-family: 'Oranienbaum', serif;
      font-size: 20px;
      text-align: justify, center;
    }
    </style>
@section('content')
<marquee scrolldelay="50" bgcolor="white">
        <h4 id="judul2" >Selamat Datang di First Rental Mobil Kami</h4>
        </marquee><br><br>
        <div class="container">
        <h1 class="text-center" id="judul1">FIRST RENTAL MOBIL<h1><br>
        <img src="image/gbr2.jpeg" width="auto" height="auto"><br><br>
        <div class="container"></div><h1 class="isi">
            First Rental Mobil merupakan sebuah aplikasi berbasis web mengenai sewa mobil.
            Dengan menggunakan aplikasi berbasis web ini, Anda dapat dengan mudah dan 
            lebih efektif untuk melakukan pemesanan maupun melihat
            mengenai informasi rental mobil ini dan tidak perlu datang ke tempat.<br>
        </h1>
        </div>
</div><br>
<footer class="text-center text-lg-start text-white" style="background-color:rgb(68, 71, 67);">
  <div class="container p-4">
    <!--Grid row-->
   
    <div class="row">
      <div class="col-md-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="350" height="60" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
  <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
</svg><br><br>
<center>
        <h1 class="isi1">Keuntungan mengenai Harga Sewa</h1>
</center>
        <p class="isi">
        Dalam menggunakan aplikasi berbasis web ini, sangatlah mudah dan terdapat diskon maupun potongan harga
        </p>
      </div>
      <br>
      <br>
      <div class="col-md-4" >
      <svg xmlns="http://www.w3.org/2000/svg" width="350" height="60" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg><br><br>
    <center>
        <h1 class="isi1">Keuntungan mengenai Waktu Operasi</h1>
        </center>
        <p class="isi">
        Keuntungan dalam menggunakan aplikasi berbasis web ini, 
        yaitu waktu operasi sangat efektif dibandingkan dengan langsung ke lokasi langsung
        </p>
      </div>
      <br>
      <br>
      <div class="col-md-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="350" height="60" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
</svg><br><br>
    <center>
        <h1 class="isi1" >Keuntungan mengenai Keamanan Sewa</h1>
    </center>
        <p class="isi">
        Keuntungan dalam menggunakan aplikasi berbasis web ini, yaitu keamanan sewa yang sangat terjangkau
        </p>
      </div>
      
    </div>
  </div>
</footer>
</body>
</html>
@endsection
