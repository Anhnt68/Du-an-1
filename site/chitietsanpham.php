<?php

if (!is_array($pro_one)) {
    echo "Khong co san pham";
} else {
    $name_pro = $pro_one["productName"];
    $name_img_pro = $pro_one["productImage"];
    $image_pro = $img_path . $pro_one["productImage"];
    if (is_file($image_pro)) {
        $image_pro = '<img src="' . $image_pro . '" class="rounded w-100" alt="" />';
    } else {
        $image_pro = '';
    }

    $id_pro = $pro_one["id"];

    $price_pro = $pro_one["productPrice"];
    $desc_pro = $pro_one["productDesc"];
    // extract($dm_one);
    // $brand_pro = $pro_one["productBrand"];
    // $category_name = $pro_one["categoryName"];
    // $categoryid = $dm_one["categoryName"];
?>
    <div class="container-fluid">
        <div class="col fs-2 text-danger">CHI TIET SAN PHAM</div>

        <div class="cart row">
            <div class="col-12 col-md-8 col-lg-7  text-center">
                <?= $image_pro ?>

            </div>
            <div class="col-12 col-md-4 col-lg-5 border-left">
                <!-- <p
              class="ps-1 text-uppercase font-weight-bold h3 text-center text-danger">
              NUOC HOA HONG VIP NHAT HIEN NAY
            </p>
            <div class="row">

            </div> -->
                <div class="row">
                    <h2 class="text-danger text-justify my-2">
                        <strong>
                            <!-- NƯỚC HOA NỮ CHARME IN LOVE 100ML -->
                            <?= $name_pro ?>
                        </strong>
                    </h2>


                    <div class="price text-danger fs-3">
                        <span><strong>
                                <!-- gia -->
                                <?= $price_pro ?>
                            </strong></span><span><strong> Đ</strong></span>
                    </div>
                </div>
                <div class="cart-content__note row py-4">


                    <p>
                        <span>✨</span> Thương hiệu:&nbsp;<a href="#" class="text-decoration-none text-danger"><?= $categoryName ?></a><br />

                    </p>



                </div>


                <!--<input type="number" name="quantity" required value="1" min=1>-->
                <!-- <button type="button" name="product" value="275" class="buy_btn"> -->
                <div class="row">
                    <form method="POST" action="index.php?act=addtocart">
                        <div class="area_order">
                            <div class="quanlity">
                                <span>
                                    <div class="buttons_added">
                                        <p class="m-0"><strong>Số lượng:</strong></p>
                                        <input id="this-item-quantity" class="input-qty" max="10" min="1" name="productQuantity" type="number" value="1" required value="1" />
                                    </div>
                                </span>
                            </div>
                            <input type="hidden" name="id" value="<?= $id_pro ?>">
                            <input type="hidden" name="productName" value="<?= $name_pro ?>">
                            <input type="hidden" name="productImage" value="<?= $name_img_pro ?>">
                            <input type="hidden" name="productPrice" value="<?= $price_pro ?>">
                            <input type="hidden" name="categoryName" value="<?= $categoryid ?>">

                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <input type="submit" name="addtocart" class="border-0 w-75 btn btn-danger" value="Thêm vào giỏ hàng">
                    </form>
                </div>
                <!-- </button> -->
                <a href="/user?wishlist&add=275" class="add-to-wishlist is-css">
                    <span class="icon js-product-gift-icon" data-placement="bottom" data-toggle="tooltip" data-title="Thêm Vào Yêu Thích" data-original-title="" title="">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </span>
                </a>
            </div>
            <label class="text-secondary h6 my-3">Miễn Phí Giao Hàng Trên Toàn Quốc</label>
        </div>
    </div>
    <div class="menu-content" style="padding: 0; margin: 20px 0">
        <!-- <ul class="menu-content d-flex justify-content-start">
            <li class="active">Chi tiết</li>
            <li class="active">Đánh giá</li>
            <li class="active">Hỏi đáp</li>
          </ul> -->
        <div class="btn-group btn-group-md btn-mt">
            <button type="button" class="btn btn-secondary">Chi tiết</button>

        </div>
        <div class="content tab-content" id="tab-1" style="
              display: block;
              background-color: #f3f4f6;
              padding: 10px 10px;
            ">


            <p style="text-align: justify">
                <!-- mota -->
                <?= $desc_pro ?>

            </p>

        </div>
    </div>
    <!----------------------------------- show comment----------------------------------- -->
    <div class="product-rating fw-bold fs-2 my-3">
        ĐÁNH GIÁ SẢN PHẨM
    </div>
    <!-- Media object -->
    <div class="d-flex">
        <!-- Image -->
        <img src="../site/src/img/nuochoa.jpg" alt="ten anh" class="me-3 rounded-circle" style="width: 60px; height: 60px;" />
        <!-- Media body -->
        <div>
            <h5 class="fw-normal">
                CONG TRAN
                <small class="text-muted fs-6">Posted on February 19, 2021</small>
            </h5>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
            <!-- Phản hồi bình luận -->
            <i class="bi bi-arrow-return-right"></i><span><a href="#">Phản hồi</a></span>
            <!-- Nested Media object -->
            <div class="d-flex mt-4">
                <img src="../site/src/img/nuochoa.jpg" alt="ten anh" class="me-3 rounded-circle" style="width: 60px; height: 60px;" />
                <div>
                    <h5 class="fw-normal ">
                        ANH NGUYEN
                        <small class="text-muted fs-6">Posted on February 19, 2021</small>
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor inci
                    </p>
                </div>
            </div>
            <!-- Nested Media object -->
        </div>
        <!-- Media body -->
    </div>
    <!-- Media object -->
    </div>

    <div class="card-content">
        <div class="row" style="width: 100%">
            <div class="col-1">
                <img src="../site/src/img/nuochoa.jpg" width="70" class="rounded-circle mt-2" />
            </div>

            <div class="col-11">
                <div class="comment-box ml-2">
                    <h4>Add a comment</h4>

                    <div class="rating">
                        <input type="radio" name="rating" value="5" id="5" /><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4" /><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3" /><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2" /><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1" /><label for="1">☆</label>
                    </div>

                    <div class="comment-area">
                        <textarea class="form-control" placeholder="what is your view?" rows="4" cols="12"></textarea>
                    </div>

                    <div class="comment-btns mt-2">
                        <div class="d-flex justify-content-end">
                            <div class="pull-left mx-3">
                                <button class="btn btn-success btn-sm" type="reset">
                                    Cancel
                                </button>
                            </div>

                            <div class="pull-right">
                                <button class="btn btn-success send btn-sm" type="submit">
                                    Send <i class="fa fa-long-arrow-right ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <style>
            .row{ display: grid;
                grid-template-columns: repeat(4fr);

        </style> -->
    <div class="row my-3">
        <h2>Sản phẩm liên quan</h2>
    </div>
    <div class="row ">
        <!-- <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="#"><img class="w-50" srcset="../site/src/img/nuochoa7.jpg" x2 alt=""></a>
            <a href="#" class="text-decoration-none  fs-5 text-danger ">Nc hoa hot nhat 1</a>
        </div>
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="#"><img class="w-50" srcset="../site/src/img/nuochoa7.jpg" x2 alt=""></a>
            <a href="#" class="text-decoration-none  fs-5 text-danger ">Nc hoa hot nhat 1</a>
        </div>
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="#"><img class="w-50" srcset="../site/src/img/nuochoa7.jpg" x2 alt=""></a>
            <a href="#" class="text-decoration-none  fs-5 text-danger ">Nc hoa hot nhat 1</a>
        </div>
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="#"><img class="w-50" srcset="../site/src/img/nuochoa7.jpg" x2 alt=""></a>
            <a href="#" class="text-decoration-none  fs-5 text-danger ">Nc hoa hot nhat 1</a>
        </div>
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="#"><img class="w-50" srcset="../site/src/img/nuochoa7.jpg" x2 alt=""></a>
            <a href="#" class="text-decoration-none  fs-5 text-danger">Nc hoa hot nhat 1</a>
        </div> -->

        <?php

        foreach ($sp_cung_loai as $sp_cung_loai) {
            extract($sp_cung_loai);

            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="' . $linksp . '">' . $image_pro . '</a>
            <div class="price text-danger fs-3">
                        <span >
                                <!-- gia -->
                                ' . $price_pro . '
                           </span><span class="fs-4">Đ</span>
                    </div>
            <a href="' . $linksp . '" class="text-decoration-none  fs-2 fw-bold text-danger">' . $name_pro . '</a>
        </div>
        ';
        }
        ?>



    </div>
    </div>
<?php } ?>