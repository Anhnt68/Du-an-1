<div class="col-xl-10">

<div class="container">
    <p class="title text-center fs-3">Chi tiết đơn hàng của bạn</p>
    <hr>
                <table class="table mw-100">
                  <thead>
                      <tr>
                        <th scope="col">MÃ đơn </th>
                        <th scope="col">Ảnh sản phẩm </th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng sản phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                      </tr>
                      </thead>
                 
                    <tbody>
                      <?php foreach($showdh as $show_dh){
    
        

                      extract($show_dh);
                      $hinhpath = "../uploads/".$anhsp;


                      echo'
                  <tr>
                      <td>'.$masp.'</td>
                      <td> <img src="'.$hinhpath.'" alt="" style="height:100px ;"></td>
                      <td>'.$tensp.'</td>
                      <td>'.$soluong.'</td>
                      <td>'.$giasp.'</td>
                      
                      
                    </tr>
                      ';
                      }
                      ?>
                     </tbody>
                  
                  </table>
                 
            </div>
        </div>
</div>
</div>