<div class="col-xl-10">
                <hr>
                <h2 class="text-center">
                    Danh sách thống kê
                </h2>
                <table class="table mw-100">
                  <thead>
                      <tr>
                        <th scope="col">MÃ loại</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">Số lượng sản phẩm</th>
                        <th scope="col">Giá sản phẩm cao nhất</th>
                        <th scope="col">Giá sản phẩm thấp nhất</th>
                        <th scope="col">Giá trung bình</th>
                      </tr>
                      </thead>
                   
                    <tbody>
                      <?php foreach($listthongke as $thongke){
                      extract($thongke);
                      echo'
                  <tr>
                      <td>'.$madm.'</td>
                      <td>'.$tendm.'</td>
                      <td>'.$countsp.'</td>
                      <td>'.$maxprice.'</td>
                      <td>'.$minprice.'</td>
                      <td>'.$avgprice.'</td>
                      
                      
                    </tr>
                      ';
                      }
                      ?>
                     </tbody>
                  
                  </table>
                 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>