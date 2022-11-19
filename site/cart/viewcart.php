<div class="container">
    <p class="title text-center fs-3">Giỏ Hàng</p>
    <div class="billform boxcontent">
        <table class="table text-center my-auto">

            <?php
            viewcart(1);
            //     $sum = 0;
            //     $i = 0;
            //     foreach ($_SESSION['mycart'] as $cart) {
            //         $image = $img_path . $cart[2];
            //         $sumPrice = $cart[3] * $cart[4];
            //         $sum += $sumPrice;
            //         $deleteProduct = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
            //         echo '
            //             <tr>
            //                 <td><img src="' . $image . '" alt="" style="height:100px"></td>
            //                 <td>' . $cart[1] . '</td>
            //                 <td>' . $cart[3] . '</td>
            //                 <td>' . $cart[4] . '</td>
            //                 <td>' . $sumPrice . '</td>
            //                 <td>' . $deleteProduct . '</td>
            //              </tr>

            //             ';
            //         $i += 1;
            //     }
            //     echo '
            //     <tr>
            //     <td colspan="4">Tong don hang</td>
            //     <td>' . $sum . '</td>
            //     <td></td>
            // </tr>
            //     '
            ?>

        </table>
    </div>
    <div class="text-center m-3">
        <a href="index.php?act=bill"><input type="button" class="btn btn-primary mx-3" value="Tiếp tục đặt hàng"></a>
        <a href="index.php?delcart"><input type="button" class="btn btn-danger" value="Xóa Giỏ Hàng"></a>
    </div>
</div>