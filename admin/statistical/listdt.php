<div class="col-xl-10">
                <hr>
                <h2 class="text-center">
                    Danh sách thống kê
                </h2>
                <table class="table mw-100">
                  <thead>
                      <tr>
                        <th scope="col">MÃ sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng sản phẩm bán được</th>
                        <th scope="col">Giá của sản phẩm</th>
                        <th scope="col">tổng tiền thu được</th>
                      
                      </tr>
                      </thead>
                   
                    <tbody>
                      <?php foreach($listthongkee as $thongke){
                      extract($thongke);
                      echo'
                  <tr>
                      <td>'.$masp.'</td>
                      <td>'.$tensp.'</td>
                      <td>'.$countsp.'</td>
                      <td>'.$giasp.'</td>
                      <td>'.$tienthudc.'</td>
                    
                    
                      
                      
                    </tr>
                      ';
                      }
                      ?>
                     </tbody>
                  
                  </table>
<a href="index.php?act=bieudodt"><button type="button"  class="btn btn-primary" >Danh sách</button></a> 
                 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>