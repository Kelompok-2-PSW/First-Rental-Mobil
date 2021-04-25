@extends('layout/main')

@section('judul', 'First Rental')
<style>
    #judul1{
      font-size:80px;
      font-family: 'serif';
      text-shadow: 0px 0px 20px #232323;
      color:rgb(73, 209, 209);
      font-style: bold;
    }

    #judul2{
      font-size:50px;
      font-family: 'serif';
    }

    .isi{
      font-family: 'Oranienbaum', serif;
      font-size: 20px;
      text-align: justify;
    }
    </style>
@section('container')

        <marquee scrolldelay="50" bgcolor="white">
        <h4 id="judul2" >Selamat Datang di First Rental Mobil Kami</h4>
        </marquee><br><br>
        <div class="container">
        <h1 class="text-center" id="judul1">FIRST RENTAL MOBIL<h1><br>
        <img src="image/gbr2.jpg" width="1300px" height="700px"><br><br>
        <h1 class="isi">
            First Rental Mobil merupakan sebuah aplikasi berbasis web mengenai sewa mobil.
            Dengan menggunakan aplikasi berbasis web ini, Anda dapat dengan mudah dan 
            lebih efektif untuk melakukan pemesanan maupun melihat
            mengenai informasi rental mobil ini dan tidak perlu datang ke tempat.<br>
        </h1>
</div><br>
<footer class="text-center text-lg-start text-white" style="background-color:rgb(68, 71, 67);">
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <div class="col-lg-8 col-md-4 mb-4 mb-md-0">
        <h1 class="isi1">Keuntungan mengenai Harga Sewa</h1>

        <p class="isi">
        Dalam menggunakan aplikasi berbasis web ini, sangatlah mudah dan terdapat diskon maupun potongan harga
        </p>
      </div>

      <div class="col-lg-8 col-md-4 mb-4 mb-md-0" >
        <h1 class="isi1">Keuntungan mengenai Waktu Operasi</h1>
        <p class="isi">
        Keuntungan dalam menggunakan aplikasi berbasis web ini, 
        yaitu waktu operasi sangat efektif dibandingkan dengan langsung ke lokasi langsung
        </p>
      </div><br>

      <div class="col-lg-8 col-md-4 mb-4 mb-md-0">
        <h1 class="isi1">Keuntungan mengenai Keamanan Sewa</h1>
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
