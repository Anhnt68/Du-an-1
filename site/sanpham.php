<div class="container">
    <div class="boxtitle text-center border-bottom">
        <h3>Sản Phẩm <?= $ten ?></h3>
    </div>
    <div class="row d-inline-flex ">
        <?php
        $i = 0;
        foreach ($list_pro_cate as $pro) {
            extract($pro);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $productImage = $img_path . $productImage;

            echo '
                <div class="col-12 col-sm-6 col-md-3 p-2 mb-4">
                <div class="d-flex flex-column text-center border h-100">
                <div>
                    <img src="' . $productImage . '" alt="" class="sp" style="width:200px;height:200px">
                </div>
                  <a href="' . $linksp . '" class="text-decoration-none fs-4 text-dark font-weight-bold mb-3 px-3">' . $productName . '</a>
                  <p class="text-danger fs-5 mt-auto">' . number_format($productPrice, 0, '', ',') . '&nbsp;₫</p>
                </div>
                </div>
                ';
            $i += 1;
        }
        ?>
    </div>
</div>