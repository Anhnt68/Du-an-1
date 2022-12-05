<?php
function viewcart($del)
{
    $sum = 0;
    $stt1 = 0;
    $i = 0;
    $quantitysum = 0;
    if ($del == 1) {
        $deleteProduct_th = '<th>Thao tác</th>';
        $delete = '<td></td>';
    } else {
        $deleteProduct_th = "";
        $delete = "";
    }
    echo '
        <tr class="bg-secondary text-light" style="height:30px;width:100%">
            <th>STT</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Thành tiền</th>
            ' . $deleteProduct_th . '
        </tr>
    ';
    if (sizeof($_SESSION['mycart']) > 0) {

        foreach ($_SESSION['mycart'] as $cart) {
            global $img_path;
            $stt1 += 1;
            $image = $img_path . $cart[2];
            $priceSum = $cart[3] * $cart[4];
            $quantitysum += $priceSum;



            if ($del == 1) {
                $deleteProduct_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa" class="btn btn-danger"></a></td>';
            } else {
                $deleteProduct_td = "";
            }
            echo '
       
                <tr>
                    <td>' . $stt1 . '</td>
                    <td><img src="' . $image . '" alt="" style="height:100px"></td>
                    <td>' . $cart[1] . '</td>
=                    <td>' . number_format($cart[3], 0, '', ',') . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . number_format($priceSum, 0, '', ',') . '</td>
                    ' . $deleteProduct_td . '
                  
                 </tr>
                
                ';
            $i += 1;
        }

        echo '
        <tr>
    
        <th colspan="4">Tổng đơn hàng</th>
        <th >' . number_format($quantitysum, 0, '', ',') . '</th>
    
        ' . $delete . '
        <td></td>
    </tr>
        ';
    }
}
function tinhsoluong()
{
    $quantitysum = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $quantitysum += $cart[4];
    }
    return $quantitysum;
}
function tongdonhang()
{
    $sum = 0;
    $pricenew = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        switch ($cart[6]) {
            case '10':
                $pricenew = $cart[3] * 0.1;
                break;
            case '50':
                $pricenew = $cart[3] * 0.5;
                break;
            case '100':
                $pricenew = $cart[3];
                break;

            default:
                $pricenew = $cart[3];
                break;
        }
        $sumPrice = $pricenew * $cart[4];
        $sum += $sumPrice;
    }
    return $sum;
}
function insert_bill($accountId, $accountName, $accountAddress, $accountPhone, $accountEmail, $pttt,  $tongdonhang, $orderDate, $sodonhang)
{
    $sql = "insert into bill(accountId,billName, billAddress, billPhone, billEmail, billPttt, billTotal, oderDate,quatity) values('$accountId','$accountName', '$accountAddress', '$accountPhone', '$accountEmail', '$pttt', '$tongdonhang', '$orderDate','$sodonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_billdetail($productId, $billid, $productQuantity)
{
    $sql = "insert into billdetail(billid,productId,productQuantity) values('$billid','$productId','$productQuantity')";
    return pdo_execute($sql);
}


function loadone_bill($id)
{
    $sql = "select * from bill where id =" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_billdeatil($billid)
{
    $sql = "select * from billdetail where billid =" . $billid;
    $bill = pdo_query($sql);
    return $bill;
}
function loadAll_bill($kyw = "", $accountId)
{

    $sql = "select * from bill where 1";
    if ($accountId > 0)
        $sql .= " AND accountId =" . $accountId;
    if ($kyw != "")
        $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($billid)
{
    $sql = "select * from billdetail where billid =" . $billid;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_cart_quantity($billid)
{
    $sql = "select * from bill where quantity =" . $billid;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n)
{
    if ($n == 0) {
        $status = "Đơn hàng đang được tiếp nhận";
    } else if ($n == 1) {
        $status = "Đóng gói";
    } else if ($n == 2) {
        $status = "Đơn hàng đang được giao";
    } else if ($n == 3) {
        $status = "Giao thành công";
    }
    return $status;
}
function get_tttt($x)
{
    switch ($x) {
        case '0':
            $status = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $status = "Thanh toán qua momo";
            break;


        default:
            $status = "Thanh toán khi nhận hàng";
            break;
    }
    return $status;
}
function delete_donhang($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
function loadall_bill2()
{
    $sql = "select * from bill order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function update_bill($id, $billStatus)
{
    $sql = "update bill set  billStatus='" . $billStatus . "' where id=" . $id;

    pdo_execute($sql);
}
function Show_dh($id)
{
    $sql = "select billdetail.id as masp, products.productName as tensp,products.productImage as anhsp,
     products.productPrice as giasp,bill.billTotal as tongdh,billdetail.productQuantity as soluong,billdetail.productQuantity * products.productPrice as tongtien,bill.billTotal as tien";
    $sql .= " from products INNER JOIN billdetail ON products.id = billdetail.productId INNER JOIN bill ON bill.id = billdetail.billId";
    // $sql.=" where billdetail.billId=" .$id;
    $sql .= " where bill.id=" . $id;
    // $sql.=" and bill.id=" . $id;
    // count(billdetail.productId) as countsp, 
    $listtkk = pdo_query($sql);
    return $listtkk;
}
