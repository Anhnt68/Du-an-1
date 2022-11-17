<?php
if (is_array($product)) {
    extract($product);
}

$hinhpath = "../upload/" . $productImage;
if (is_file($hinhpath)) {
    $productImage = "<img src = '" . $hinhpath . "' height='80'>";
} else {
    $productImage = "no photo";
}
?>
<div class="col-xl-8 m-auto">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatepro" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="categoryid">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        if ($categoryid == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '"' . $s . '>' . $categoryName . '</option>';
                    }
                    ?>
                </select>
            </div>
            <?php
                extract($product);
            ?>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="productName" value="<?= $productName ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="productPrice" value="<?= $productPrice ?>">
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="productImage" id="">
                <?= $productImage ?>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="productDesc" cols="50" rows="10" value="<?= $productDesc ?>"></textarea>
            </div>
            <div class="row mb10">
                So luong <br>
                <input type="text" name="quatity" value="<?= $quatity ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listpro"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
