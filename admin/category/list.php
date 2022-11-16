<div class="col-xl-10">
                <hr>
                <h2 class="text-center">
                    Danh sách loại hàng hóa
                </h2>
                <table class="table mw-100">
                  <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Mã loại</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">ảnh</th>
                        <th scope="col">
                  <a href="index.php?act=adddm"><button type="button"  class="btn btn-primary" >Thêm mới</button></a> 

                        </th>
                      </tr>
                      </thead>
                   
                    <tbody>
                      <?php foreach($listdm as $dm){
                        extract($dm);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        $hinhpath = "../upload/".$categoryImage;
                        if(is_file($hinhpath)){
                            $categoryImage="<img src='".$hinhpath."' height='80'";
                        }else{
                            $$categoryImage = "no photo";
                        }
                      echo'
                  <tr>
                      <td scope="row"><input type="checkbox" name="" id=""></td>
                      <td>'.$id.'</td>
                      <td>'.$categoryName.'</td>
                      <td>'.$categoryImage.'</td>
                      <td><a href="'.$suadm.'"><input type="button" value="Sửa" class="btn btn-primary"></a>
                      <a href="'.$xoadm.'"> <input type="button" value="Xóa" class="btn btn-primary bg-danger"></a>
                      </td>
                    </tr>
                      ';
                      }
                      ?>
                     </tbody>
                  
                  </table>
                  <button type="submit" class="btn btn-primary">Chọn tất cả</button>
                  <button type="reset" class="btn btn-primary">Bỏ chọn tất cả</button>
                  <button type="reset" class="btn btn-primary">Xóa các mục đã chọn</button>
                  <a href="index.php?act=adddm"><button type="button"  class="btn btn-primary" >Thêm mới</button></a> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>