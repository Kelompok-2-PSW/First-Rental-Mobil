<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>
    <?php echo $__env->yieldContent('title'); ?>
    </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >First Rental Mobil</a>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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

    <?php echo $__env->yieldContent('container'); ?>
    
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\project1\resources\views/layout/main.blade.php ENDPATH**/ ?>