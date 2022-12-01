<?php 
function insert_comments($content, $productId, $accountId, $accountName	, $commentDate)
{
    $sql = "INSERT INTO comments(content, productId, accountId, accountName,commentDate) VALUES('$content', '$productId', '$accountId', '$accountName','$commentDate')";
    pdo_execute($sql);
}
function load_bl_theo_idsp($pid){
    $sql = "SELECT * FROM comments JOIN products ON comments.productId=products.id WHERE comments.productId=$pid ORDER BY comments.commentDate DESC";
    $listcomment = pdo_query($sql);
    return $listcomment;
}
// function loadall_comment($idpro)
// {
//     $sql = "SELECT * FROM comments WHERE 1";
//     if($idpro>0)$sql.=" AND productId='".$idpro."'";
//     $sql.=" order by id desc";
     
//     // if ($kyw != "") {
//     //     $sql .= " and name like '%" . $kyw . "%'";
//     // }
//     // if ($categoryid > 0) {
//     //     $sql .= " and categoryid = '" . $categoryid . "'";
//     // }
//     // $sql .= ' order by id desc';
//     $listcomment = pdo_query($sql);
//     return $listcomment;
// }
function loadall_comment($idpro){
    $sql = "select * from comments where 1";
    if($idpro>0) 
    $sql.=" AND productId = '".$idpro."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
    $delete="delete from comments where id =" .$id;
    pdo_execute($delete);
}

// function takeAll_U_P(){
//     $sql = "SELECT * FROM products JOIN comments ON products.id=comments.productId WHERE 1;";
//     $listall = pdo_query($sql);
//     return $listall;
// }
?>
