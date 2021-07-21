<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Manual CSS --}}
    <link rel="stylesheet" href="assets/dist/css/style.css">
    <title>AL | {{ $title }}</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/produk">Produk</a>
            <a class="nav-link" href="/user">User</a>
            <a class="nav-link btn btn-outline-primary" href="/sign_in">Masuk / Daftar</a>
            <form class="d-flex position-absolute end-0 me-3">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button type="button" class="btn btn-primary"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </nav>