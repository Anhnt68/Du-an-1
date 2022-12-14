<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Main Quill library -->
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

        <!-- Theme included stylesheets -->
        <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

        <!-- Core build with no theme, formatting, non-essential modules -->
        <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
        <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
</head>

<body>

        <div class="container-fluid ">
                <div class="row my-2">
                        <div class="col-xl-3">
                                <a class="">
                                        <img src="../site/src/img/logo1.png" class="logo" style="width:100px ;">
                                </a>
                        </div>
                        <div class="col-xl-9">
                                <?php

                                if (isset($_SESSION['account']))
                                        extract($_SESSION['account']);

                                ?>
                                <ul class="navbar-nav d-flex justify-content-end flex-row">
                                        <li class="nav-item d-flex flex-column mx-3"><i class="bi bi-house-door-fill fs-4 m-auto"></i> <a href="../index.php" class="text-decoration-none text-dark">Home</a></li>


                                        </li>
                                </ul>
                        </div>
                </div>
                <div class="row">
                        <div class="col-xl-2 bg-secondary min-vh-100">
                                <ul class="list-group list-group-flush">
                                        <div class="btn-group list-group-item bg-secondary d-flex align-items-center">
                                                <i class="bi bi-speedometer2 fs-3 px-4 text-light"></i>
                                                <button class="btn btn-secondary dropdown-toggle text-decoration-none fs-5 text-light p-0 m-0" type="button" data-bs-toggle="dropdown">
                                                        Th???ng k??
                                                </button>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="index.php?act=bieudo">Th???ng k?? s???n ph???m</a></li>
                                                        <li><a class="dropdown-item" href="index.php?act=bieudodt">Th???ng k?? doanh thu </a></li>

                                                </ul>
                                        </div>


                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-list-ul fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=listdm">Danh
                                                        M???c</a>
                                        </li>
                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-bag-fill fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=listpro">S???n
                                                        Ph???m</a>
                                        </li>
                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-people-fill fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=dskh">Kh??ch H??ng</a>
                                        </li>
                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-cart-dash-fill fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=listbill">????n
                                                        H??ng</a>
                                        </li>
                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-chat-dots-fill fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=dsbl">B??nh Lu???n</a>
                                        </li>
                                        <li class="list-group-item bg-secondary d-flex align-items-center"><i class="bi bi-newspaper fs-3 px-4 text-light"></i><a class="text-decoration-none fs-5 text-light" href="index.php?act=listnews">Tin t???c</a>
                                        </li>

                                </ul>
                        </div>