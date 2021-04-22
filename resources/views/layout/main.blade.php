<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>
    @yield('title')
    </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
  <a class="navbar-brand">First Rental Mobil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/car">Car</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rent" tabindex="-1" aria-disabled="true">Rent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about us" tabindex="-1" aria-disabled="true">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/keluar" tabindex="-1" aria-disabled="true">Log Out</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    @yield('container')
    
  </body>
</html>
