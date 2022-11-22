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
function tongdonhang()
{
    $sum = 0;
    
    foreach ($_SESSION['mycart'] as $cart) {
        $sumPrice = $cart[3] * $cart[4];
        $sum += $sumPrice;
    }
    return $sum;
}
function insert_bill($accountId, $accountName, $accountAddress, $accountPhone, $accountEmail, $pttt,  $tongdonhang, $oderDate){
    $sql = "insert into bill(accountId,billName, billAddress, billPhone, billEmail, billPttt, billTotal, oderDate) values('$accountId','$accountName', '$accountAddress', '$accountPhone', '$accountEmail', '$pttt', '$tongdonhang', '$oderDate')";
    return pdo_execute_return_lastInsertId($sql);

}
function loadone_bill($id)
{
    $sql = "select * from bill where id =" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
?>
