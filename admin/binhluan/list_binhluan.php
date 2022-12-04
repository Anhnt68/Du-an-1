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
                    <th>Delete</th>
                </tr>
                <script>
                    function myFunction() {
                        let text = "Ban muon xoa?";
                        if (confirm(text) == true) {
                            return true;
                        } else {
                            return false;
                        }

                    }
                </script>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);

                    $xoabl = "index.php?act=xoabl&idsp=" . $id;
                    echo '<tr >
                           
                            <td>' . $id . '</td>
                         
                            <td>' . $content . '</td>
                            <td> ' . $accountName . ' </td>
                            <td>' . $productId . '</td>
                            <td>' . $commentDate . '</td>
                            <td>  <a href="' . $xoabl . '"><input type="button" value="Xóa" class="xoa btn btn-danger" id="demo" onclick="return myFunction()"> </a></td>
                      
                        </tr>';
                }
                ?>



            </table>
        </div>

    </div>
</div>
</div>