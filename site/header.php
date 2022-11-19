<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="site/src/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
</head>

<body>
  <div class="container position-relative">
    <nav class="navbar bg-white">
      <div class="container-fluid">
        <a class="">
          <img src="site/src/img/logo.png" class="logo position-absolute" style="z-index:2;width: 200px;height: 200px;">
        </a>
        <div class="d-flex justify-content-end align-items-center">
          <form class="d-flex px-2" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <a class="" href=""><i class="bi bi-cart3 fs-3 text-dark"></i></a>
          <a class="btn btn-primary mx-2" href="index.php?act=signIn">Sign in</a>
          <a class="btn btn-danger" href="#">sign Up</a>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container">

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon ms-auto"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav m-auto">
            <li class="nav-item px-4">
              <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="index.php?act=gioithieu">Giới thiệu</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="index.php?act=tintuc">Tin tức</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="index.php?act=lienhe">Liên hệ</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>