<?php
function loadAll_thongke(){
    $sql = "select categorys.id as madm, categorys.categoryName as tendm, count(products.id) as countsp, min(products.productPrice) as minprice, max(products.productPrice)as maxprice, avg(products.productPrice) as avgprice";
    $sql.=" from products left join categorys on categorys.id=products.categoryId";
    $sql.=" group by categorys.id order by categorys.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadAll_thongkedt(){
    $sql = "select products.id as masp, products.productName as tensp, count(billdetail.productId) as countsp, avg(bill.billTotal) as avgprice,products.productPrice as giasp,count(billdetail.productId) * products.productPrice as tienthudc";
    $sql.=" from products INNER JOIN billdetail ON products.id = billdetail.productId INNER JOIN bill ON bill.id = billdetail.billId WHERE billdetail.productId =  products.id AND billdetail.billId = bill.id";
    $sql.=" group by products.id order by products.id desc";
    $listtkk = pdo_query($sql);
    return $listtkk;
}
 
?>