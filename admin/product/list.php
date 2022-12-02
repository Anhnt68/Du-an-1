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
                            foreach ($lisdm as $dm) {
                                extract($dm);
                                echo '<option value="' . $id . '">' . $categoryName . '</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name = "listok" value="GO">
                    </form> -->
            <table table class="table mw-100">
                <tr>
                    <th>MÃ SP</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ</th>
                    <th>ẢNH</th>
                    <th>MÔ TẢ</th>
                    <th>DUNG TÍCH</th>
                    <th>SỐ LƯỢNG</th>
                    <th> <a href="index.php?act=addpro"><button type="button" class="btn btn-primary">Thêm mới</button></a>
                    </th>
                </tr>
                <?php
                foreach ($listproduct as $product) {
                    extract($product);
                    $suapro = "index.php?act=suapro&id=" . $id;
                    $xoapro = "index.php?act=xoapro&id=" . $id;
                    $hinhpath = "../uploads/" . $productImage;
                    if (is_file($hinhpath)) {
                        $productImage = "<img src = '" . $hinhpath . "' height='80'>";
                    } else {
                        $productImage = "no photo";
                    }
                    echo '<tr>
                                        <td>' . $id . '</td>
                                        <td>' . $productName . '</td>
                                        <td>' . number_format($productPrice, 0, '', ',') . '</td>
                                        <td>' . $productImage . '</td>
                                        <td>' . $productDesc . '</td>
                                        
                                        <td>' . $productCapacity . '</td>
                                        <td>' . $quatity . '</td>
                                        <td><a  href="' . $suapro . '"><input type="button" value="Sửa" class="btn btn-primary"> </a> <a href="' . $xoapro . '"><input type="button" value="Xóa" class="btn btn-primary bg-danger"> </a></td>
                                    </tr>';
                }
                ?>

            </table>
        </div>

    </div>
</div>