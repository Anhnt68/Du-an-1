<div class="col-xl-10">
                <hr>
                <h2 class="text-center">
                    Danh sách loại hàng hóa
                </h2>
            <div class="">

                <div class="">
                    <!-- <form action="index.php?act=listpro" method="POST">
                        <input type="text" name="kyw">
                        <select name="categoryid" >
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($lisdm as $dm){
                                    extract($dm);
                                    echo '<option value="'.$id.'">'.$categoryName.'</option>';
                                }
                            ?>
                        </select>
                        <input type="submit" name = "listok" value="GO">
                    </form> -->
                    <table table class="table mw-100">
                        <tr>
                            <th></th>
                            <th>MÃ SP</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>GIAS</th>
                            <th>ANH</th>
                            <th>MÔ TẢ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>U/D</th>
                        </tr>
                        <?php 
                            foreach($listproduct as $product){
                                extract($product);
                                $suapro = "index.php?act=suapro&id=".$id;
                                $xoapro = "index.php?act=xoapro&id=".$id;
                                $hinhpath = "../upload/".$productImage;
                                if(is_file($hinhpath)){
                                    $productImage="<img src = '".$hinhpath."' height='80'>";
                                } else {
                                    $productImage = "no photo";
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$productName.'</td>
                                        <td>'.$productPrice.'</td>
                                        <td>'.$productImage.'</td>
                                        <td>'.$productDesc.'</td>
                                        <td>'.$quatity.'</td>
                                        <td><a href="'.$suapro.'"><input type="button" value="Sửa"> </a> <a href="'.$xoapro.'"><input type="button" value="Xoá"> </a></td>
                                    </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xoá các mục đã chọn">
                            <a href="index.php?act=addpro"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>