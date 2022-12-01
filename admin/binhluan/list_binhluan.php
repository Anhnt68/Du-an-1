<div class="col-xl-10 ">
    <div class="row frmtitle">
        <H1>DANH SÁCH BÌNH LUẬN</H1>
    </div>
    <div class="row frmcontent">

        <div class="row1 mb10 frmdsloai">
            <table class="table text-center">
                <tr>
                    
                    <th>ID</th>
               
                    <th>NỘI DUNG BÌNH LUẬN</th>
                  
                    <th>HỌ TÊN</th>
                    <th>ID SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
              
                   
                    echo '<tr >
                           
                            <td>' . $id . '</td>
                         
                            <td>' . $content . '</td>
                            <td> ' . $accountName . ' </td>
                            <td>' . $productId . '</td>
                            <td>' . $commentDate . '</td>
                         
                        </tr>';
                }
                ?>



            </table>
        </div>
    
    </div>
</div>
</div>
