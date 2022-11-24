<?php
function viewcart($del)
{
    $sum = 0;
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
        $quantitysum += $cart[4];
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
function tinhsoluong(){
    $quantitysum = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $quantitysum += $cart[4];
  

    }
  return $quantitysum;
    
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
function insert_bill($accountId, $accountName, $accountAddress, $accountPhone, $accountEmail, $pttt,  $tongdonhang, $orderDate,$sodonhang)
{
    $sql = "insert into bill(accountId,billName, billAddress, billPhone, billEmail, billPttt, billTotal, oderDate,quatity) values('$accountId','$accountName', '$accountAddress', '$accountPhone', '$accountEmail', '$pttt', '$tongdonhang', '$orderDate','$sodonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_billdetail($billid)
{
    $sql = "insert into billdetail(billid) values('$billid')";
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
function loadAll_bill($kyw = "", $iduser)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0)
        $sql .= " AND iduser =" . $iduser;
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
    if ($n ==0){
        $status= "Đơn hàng đang được tiếp nhận"; 
    }else if ($n==1){
        $status = "Đóng gói";
    }else if ($n==2){
        $status = "Đơn hàng đang được giao";
    }else if ($n==3){
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
            $status = "Thanh toán online";
            break;
        case '2':
            $status = "thanh tóan qua momo";
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
function update_bill($id,$billStatus){
    $sql = "update bill set  billStatus='".$billStatus."' where id=".$id;

pdo_execute($sql);
}