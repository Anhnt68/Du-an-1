<div class="col-xl-8 m-auto">
            <div class="row frmtitle" style="margin: 10px 0;">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addpro" method="POST" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="categoryid" >
                            <?php
                                foreach($listdm as $dm){
                                    extract($dm);
                                    echo '<option value="'.$id.'">'.$categoryName.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="productName">
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="productPrice">
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="productImage" id="">
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="productDesc" cols="80" rows="10" style="width: 100%;border-radius: 5px;"></textarea>
                    </div>
                    <div class="row mb10">
                        Số lượng <br>
                        <input type="text" name="quatity">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name = "themmoi" value = "THÊM MỚI">
                        <input type="reset" value = "NHẬP LẠI">
                        <a href="index.php?act=listpro"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>

    </div>