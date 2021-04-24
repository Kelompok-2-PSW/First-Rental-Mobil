<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Clepster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet"> 
    <title>@yield('judul')</title>
    <style>
    body{
      background-color: rgb(161, 167, 160);

      font-size:30px;
    }
    #judul{
      font-family:  Copperplate;
      font-size:35px;
    }

    #select{
      color:white;
      font-size:20px;
    }
  </style>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark mb-3 text-white">
  <h2 id="judul">First Rental Mobil</h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end text-white" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active tetxt" aria-current="page" href="/" id="select">Home |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/car" id="select">Car |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about us" tabindex="-1" aria-disabled="true" id="select">About Us |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rent" tabindex="-1" aria-disabled="true" id="select">Login |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/keluar" tabindex="-1" aria-disabled="true" id="select">Log Out </a>
      </li>
    </ul>
  </div>
</nav>

 
    @yield('container')

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 By:
    <a class="text-dark">First_Rental_Mobil.com</a>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>