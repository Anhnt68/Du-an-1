<?php
function viewcart($del)
{
    $sum = 0;
    $i = 0;
    if ($del == 1) {
        $deleteProduct_th = '<th>Thao tác</th>';
        $delete = '<td></td>';
    } else {
        $deleteProduct_th = "";
        $delete = "";
    }
    echo '
        <tr class="bg-secondary text-light" style="height:30px">
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Thành tiền</th>
            ' . $deleteProduct_th . '
        </tr>
    ';
    foreach ($_SESSION['mycart'] as $cart) {
        global $img_path;
        $image = $img_path . $cart[2];
        $sumPrice = $cart[3] * $cart[4];
        $sum += $sumPrice;
        if ($del == 1) {
            $deleteProduct_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa" class="btn btn-danger"></a></td>';
        } else {
            $deleteProduct_td = "";
        }
        echo '
       
                <tr>
                    <td><img src="' . $image . '" alt="" style="height:100px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $sumPrice . '</td>
                    ' . $deleteProduct_td . '
                 </tr>
                
                ';
        $i += 1;
    }
    echo '
        <tr>
        <th colspan="4">Tổng đơn hàng</th>
        <th >' . $sum . '</th>
        ' . $delete . '
        <td></td>
    </tr>
        ';
}
