<?php
function insert_dm($tenloai,$anhloai){
    $sql = "insert into categorys(categoryName,categoryImage) values('$tenloai','$anhloai')";
    
    pdo_execute($sql);
}
function loadAll_dm(){
    $sql ="select * from categorys order by id desc";
    $listdm= pdo_query($sql);
    return $listdm;
}
function delete_dm($id){
 $sql = "delete from categorys where id=".$id;
 pdo_execute($sql);
}
function loadOne_dm($id){
    $sql ="select *from categorys where id=?";
    return pdo_query_one($sql,$id);
}
function update_dm($id,$tenloai,$anhloai){
    if($anhloai!=""){
        $sql = "update categorys set  categoryName='".$tenloai."',categoryImage='".$anhloai."' where id=".$id;
    }else{
        $sql = "update categorys set  categoryName='".$tenloai."' where id=".$id;
    }
    pdo_execute($sql);
}
?>