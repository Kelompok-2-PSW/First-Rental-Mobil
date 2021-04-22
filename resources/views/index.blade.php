@extends('layout/main')

@section('title', 'First Rental Mobil')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
        <marquee>
        <h4 class="color:grey">Selamat Datang di First Rental Mobil Kami</h4>
        </marquee><br><br>
        <h1 class="text-center" class="mt-4" id>First Rental Mobil<h1>
        <img src="image/gbr1.jpg">
        <h2><small>
            First Rental Mobil merupakan sebuah aplikasi berbasis web mengenai sewa mobil.<br>
            Dengan menggunakan aplikasi berbasis web ini, Anda dapat dengan mudah melakukan pemesanan maupun melihat
            mengenai informasi rental mobil ini dan tidak perlu datang ke tempat.<br>

        </h2>
        </p>
        </div>
    </div>
</div><br>
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Keuntungan mengenai Harga Sewa</h5>

        <p>
        Dalam menggunakan aplikasi berbasis web ini, sangatlah mudah dan terdapat diskon maupun potongan harga
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Keuntungan mengenai Waktu Operasi</h5>

        <p>
          Keuntungan dalam menggunakan aplikasi berbasis web ini, yaitu waktu operasi sangat efektif dibandingkan dengan langsung ke lokasi langsung
        </p>
      </div>

      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Keuntungan mengenai Keamanan Sewa</h5>

        <p>
          Keuntungan dalam menggunakan aplikasi berbasis web ini, yaitu keamanan sewa yang sangat terjangkau
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 By:
    <a class="text-dark">First_Rental_Mobil.com</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection