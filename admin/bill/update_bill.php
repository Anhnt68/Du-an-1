<?php
    extract($dh);

?>
<div class="col-xl-10">
            <hr>
          
            <h2 class="text-center">
                Sửa trạng thái giao hàng
            </h2>
            <div class="mb-3">

            <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">

                <label for="">Tình trạng đơn</label> <br>
              <select name="billStatus" id="" required>
              <option value="0">Đơn hàng đang được tiếp nhận</option>
              <option value="1">Đóng gói</option>
              <option value="2">Đơn hàng đang được giao</option>
              <option value="3">Giao thành công</option>
              </select>
    </div>

              <div class="mb-3">
                  
                  <input type="submit" class="btn btn-primary" name="capnhat" value="capnhat">
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?act=listbill"><button type="button"  class="btn btn-primary" >Danh sách</button></a> 
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

