<div class="col-xl-8 m-auto">
    <div class="row frmtitle" style="margin: 10px 0;">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addpro" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                Danh mục <br>
                <select name="categoryid" class="form-select">
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="' . $id . '">' . $categoryName . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
                <input type="text" name="productName" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giá</label>
                <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Hình</label>
                <input type="file" name="productImage" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                <textarea name="productDesc" class="form-control" cols="80" rows="10" style="width: 100%;border-radius: 5px;"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số lượng</label>
                <input type="text" name="quatity" class="form-control" id="exampleInputPassword1">
            </div>


            <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=listpro"><button type="button" class="btn btn-primary">Danh sách</button></a>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>

</div>