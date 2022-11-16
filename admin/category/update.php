<?php

    extract($dm);
    $hinhpath = "../upload/".$categoryImage;
    if(is_file($hinhpath)){
        $categoryImage="<img src='".$hinhpath."' height='80'";
    }else{
        $$categoryImage = "no photo";
    }

?>
<div class="col-xl-10">
            <hr>
            <h2 class="text-center">
                Sửa danh mục hàng hóa
            </h2>
            <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                  <input type="text" name="maloai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                
                </div>
               
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                  <input type="text" name="tenloai" class="form-control" id="exampleInputPassword1" value="<?= $categoryName?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> ảnh</label>
                    <input type="file" name="anhloai" class="form-control" id="exampleInputPassword1"><?= $categoryImage ?>
                  </div>
                <div class="mb-3">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <input type="submit" class="btn btn-primary" name="capnhat" value="capnhat">
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?act=listdm"><button type="button"  class="btn btn-primary" >Danh sách</button></a> 
                  </div>
               
                <?php 
if(isset($thongbao)&&($thongbao!=""))
echo $thongbao;

?>
              </form>
            </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

