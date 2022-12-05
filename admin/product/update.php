<?php
if (is_array($product)) {
    extract($product);
}

$hinhpath = "../uploads/" . $productImage;
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
            <div class="mb-3">
                <select name="categoryid" class="form-select">
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên Sản Phẩm</label>
                <input type="text" name="productName" class="form-control" id="exampleInputPassword1" value="<?= $productName ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giá</label>
                <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1" value="<?= $productPrice ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                <input type="file" name="productImage" class="form-control" id="exampleInputPassword1" value="<?= $productImage ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                <textarea name="productDesc" style="resize: none;" class="form-control" id="exampleInputPassword1" cols="120" rows="8"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dung Tích</label>
                <input type="text" name="productCapacity" class="form-control" id="exampleInputPassword1" value="<?= $productCapacity ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số Lượng</label>
                <input type="text" name="quatity" class="form-control" id="exampleInputPassword1" value="<?= $quatity ?>">
            </div>


            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?act=listpro"><button type="button" class="btn btn-primary">Danh sách</button></a>
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