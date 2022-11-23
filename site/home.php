<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="site/src/img/image(4423).png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="site/src/img/image(4432).png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="site/src/img/banner3.jpg" alt="">
    </div>

  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<div class="container mt-5 mb-3 m-auto">
  <div class="text-center fs-1">
    Danh mục
  </div>
  <div class="row">
    <?php
    foreach ($dsdm as $dm) {
      extract($dm);
      $hinh = $img_path . $categoryImage;
      $linkdm = "index.php?act=sanpham&iddm=" . $id;
      echo ' 
      <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="' . $hinh . '" alt=""></a>
      <a class="list-group-item" href="">
        <p class="fs-4">' . $categoryName . '</p>
      </a>

    </div>
                  ';
    }
    ?>

    <!-- <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div>
    <div class="col-12 col-md-6 col-xl-3 w-20 mb-5 d-flex justify-content-around align-items-center">
      <a href=""><img src="site/src/img/cate1.jpg" alt=""></a>
      <a class="list-group-item" href="">
        <p>Nước hoa 1</p>
      </a>

    </div> -->


  </div>
</div>

<!--  sp nổi bật -->

<div class="container text-center mt-5 mb-5 bg-light">

  <div class="row">
    <div class="col-sm-3">
      <img src="site/src/img/bannernb.jpg" alt="" class="bannernb pt-3">
    </div>
    <div class="col-sm-9">
      <div class="row pb-3">
        <p class="text-nowrap m-auto fs-2">Sản phẩm nổi bật</p>
      </div>
      <div class="row">
        <div class="col-4 col-sm-4">
          <img src="site/src/img/spnb.jpg" alt="" class="spnb">
        </div>
        <div class="col-4 col-sm-4">
          <img src="site/src/img/spnb.jpg" alt="" class="spnb">
        </div>
        <div class="col-4 col-sm-4">
          <img src="site/src/img/spnb.jpg" alt="" class="spnb">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- product -->
<div class="container-fluid">
  <h5>Sản phẩm dành cho bạn</h5>
  <div class="row d-inline-flex">
    <!-- Gallery Item 1 -->
    <?php
    $i = 0;
    foreach ($spnew as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $sp[0];
      $hinh = $img_path . $productImage;
      echo '
      <div class="col-12 col-sm-6 col-md-3 p-2 mb-4">
      <div class="d-flex flex-column text-center border height100">
        <div>
          <img src="' . $hinh . '" alt="" class="sp">
        </div>
        <a href="' . $linksp . '" class="text-decoration-none fs-4 text-dark text-uppercase font-weight-bold">' . $productName . '</a>
        <p class="text-danger fs-5">$' . $productPrice . '</p>
                          <div class="row btnaddtocart">
                            <form method="post" action="index.php?act=addtocart">
                                <input type="hidden" name="id" value="' . $id . '"> 
                                <input type="hidden" name="productName" value="' . $productName . '"> 
                                <input type="hidden" name="productImage" value="' . $productImage . '"> 
                                <input type="hidden" name="productPrice" value="' . $productPrice . '"> 
                                <input type="submit" name="addtocart" class="btn btn-danger border-0" value="Thêm vào giỏ hàng"> 
                            </form>
                          </div>
      </div>
    </div>
                   
                    ';
      $i += 1;
    }
    ?>
  </div>
</div>
<!--  -->