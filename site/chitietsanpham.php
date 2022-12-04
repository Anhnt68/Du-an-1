<?php
extract($pro_one);
//   include "site/binhluan/binhluan.php";

if (!is_array($pro_one)) {
    echo "Khong co san pham";
} else {
    $name_pro = $pro_one["productName"];
    $name_img_pro = $pro_one["productImage"];
    $image_pro = $img_path . $pro_one["productImage"];
    $quantity = $pro_one["quatity"];
    if (is_file($image_pro)) {
        $image_pro = '<img src="' . $image_pro . '" class="rounded w-100" alt="" />';
    } else {
        $image_pro = '';
    }

    $id_pro = $pro_one["id"];
    $price_pro = $pro_one["productPrice"];
    $desc_pro = $pro_one["productDesc"];


    // tăng view
    update_view($id);
?>
    <div class="container-fluid">


        <div class="cart row m-auto justify-content-around pt-5">
            <div class="col-12 col-md-8 col-lg-7 text-center" style="width: 600px;height: 600px;">
                <?= $image_pro ?>
            </div>
            <div class="col-12 col-md-4 col-lg-5 border-left">
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
                                <?= number_format($price_pro, 0, '', ',') ?>
                            </strong></span><span><strong>&nbsp;₫</strong></span>
                    </div>
                </div>
                <div class="cart-content__note row py-4">
                    <p>
                        <span>✨</span> Thương hiệu:&nbsp;<a href="#" class="text-decoration-none text-danger">
                            <?= $ten ?>
                        </a><br />
                    </p>
                </div>
                <div class="cart-content__note row py-1">
                    <p>
                        Tồn kho:&nbsp;<a href="#" class="text-decoration-none text-danger">
                            <?= $quantity ?>
                        </a><br />
                    </p>
                </div>
                <div class="row">
                    <form method="POST" action="index.php?act=addtocart">
                        <div class="area_order">
                            <div class="quanlity mb-4">

                                <div class="buttons_added">
                                    <p class="m-0 d-inline-block"><strong>Số lượng:</strong></p>
                                    <input id="this-item-quantity" class="input-qty" max="10" min="1" name="productQuantity" type="number" value="1" required value="1" />
                                </div>

                            </div>
                            <input type="hidden" name="id" value="<?= $id_pro ?>">
                            <input type="hidden" name="productName" value="<?= $name_pro ?>">
                            <input type="hidden" name="productImage" value="<?= $name_img_pro ?>">
                            <input type="hidden" name="productPrice" value="<?= $price_pro ?>">
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="10" name="dungtich" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    10ml
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="dungtich" value="50" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    50ml
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="dungtich" value="100" id="defaultCheck1" checked>
                                <label class="form-check-label" for="defaultCheck1">
                                    100ml
                                </label>
                            </div>
                            <input type="hidden" name="categoryName" value="<?= $categoryid ?>">

                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <input type="submit" name="addtocart" class="border-0 w-30 btn btn-danger p-2" value="Thêm vào giỏ hàng">
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

        <iframe src="site/binhluan/binhluan.php?idsp=<?= $id ?>" frameborder="0" width="100%" height="300px" ></iframe>
        
    </div>




    <!-- Thư viện jquery -->




    </div>
    <!-- <style>
            .row{ display: grid;
                grid-template-columns: repeat(4fr);

        </style> -->
    <div class="product-rating fw-bold fs-2 my-3">
        SẢN PHẨM LIÊN QUAN
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

        foreach ($sp_cung_loai as $sp_cung_loai_1) {
            extract($sp_cung_loai_1);

            $image_pro1 = $img_path . $sp_cung_loai_1[2];

            $image_pro3 = '<img src="' . $image_pro1 . '" class="rounded w-100" alt="" />';


            $linksp = "index.php?act=sanphamct&idsp=" . $sp_cung_loai_1[0];
            echo '
        <div class="col-12 col-lg-3 d-flex flex-column text-center">
            <a href="' . $linksp . '">' . $image_pro3 . '</a>
            <div class="price text-danger fs-3">
                        <span >
                                <!-- gia -->
                                ' . $sp_cung_loai_1[3] . '
                           </span><span class="fs-4">Đ</span>
                    </div>
            <a href="' . $linksp . '" class="text-decoration-none  fs-2 fw-bold text-danger">' . $sp_cung_loai_1[1] . '</a>
        </div>
        ';
        }

        ?>



    </div>
    </div>
<?php } ?>