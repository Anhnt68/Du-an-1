<?php
function insert_product($productName, $productPrice, $productImage, $productDesc, $quatity, $categoryid)
{
    $sql = "insert into products(productName, productPrice, productImage, productDesc, quatity, categoryid) values('$productName', '$productPrice', '$productImage', '$productDesc', '$quatity', '$categoryid')";
    pdo_execute($sql);
}
function loadall_product($kyw, $categoryid)
{
    $sql = "select * from products where 1";
     if ($kyw != "") {
         $sql .= " and productName like '%" . $kyw . "%'";
     }
     if ($categoryid > 0) {
         $sql .= " and categoryId = '" . $categoryid . "'";
     }
     $sql .= ' order by id desc';
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function search_pro($tukhoa){
    $sql = "select * from products where 1";
    if ($tukhoa != "") {
        $sql .= " and productName like '%" . $tukhoa . "%'";
    }
    $sql .= ' order by id desc';
    $searchpro = pdo_query($sql);
    return $searchpro;
}
// function showpro($idcat)
// {
//     $sql = "select * from products where 1";
//     if ($idcat > 0) {
//         $sql .= " AND categoryId=" . $idcat;
//     }
//     $sql .= " order by id desc";
//     $listprocate = pdo_query($sql);
//     return $listprocate;
// }
function delete_product($id)
{
    $sql = "delete from products where id =" . $id;
    pdo_execute($sql);
}

function loadall_product_home()
{
    $sql = "select * from products where 1 order by id desc limit 0,12";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function load_ten_category($categoryid)
{
    if ($categoryid > 0) {
        $sql = "select * from categorys where id =" . $categoryid;
        $category = pdo_query_one($sql);
        extract($category);
        return $categoryName;
    } else {
        return "";
    }
}
function loadone_product($id)
{
    $sql = "select * from products where id =" . $id;
    $pro = pdo_query_one($sql);
    return $pro;
}
function load_product_cungloai( $categoryid)
{
    $sql = "select * from products where categoryid = " . $categoryid ;
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function update_product($id, $categoryid, $productName, $productPrice, $productImage, $productDesc, $quatity)
{
    if ($productImage != "")
        $sql = "UPDATE products set categoryid = '" . $categoryid . "',productName = '" . $productName . "',productPrice = '" . $productPrice . "',productImage = '" . $productImage . "',productDesc = '" . $productDesc . "', , quatity = '" . $quatity . "' where id = " . $id;
    else
        $sql = "UPDATE products set categoryid = '" . $categoryid . "',productName = '" . $productName . "',productPrice = '" . $productPrice . "',productDesc = '" . $productDesc . "' , quatity = '" . $quatity . "' where id = " . $id;
    pdo_execute($sql);
}
// view
function update_view($id){
    $sql = "UPDATE products SET productView = productView+1 WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_pro_view()
{
    $sql = "select * from products where 1 order by productView desc limit 0,3";
    $list_pro_view = pdo_query($sql);
    return $list_pro_view;
}
