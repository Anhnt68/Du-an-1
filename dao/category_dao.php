<?php
function insert_dm($tenloai,$motaloai,$anhloai){
    $sql = "insert into categorys(categoryName,categoryDesc,categoryImage) values('$tenloai','$motaloai','$anhloai')";
    
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
function update_dm($id,$tenloai,$motaloai,$anhloai){
    if($anhloai!=""){
        $sql = "update categorys set  categoryName='".$tenloai."',categoryDesc='".$motaloai."',categoryImage='".$anhloai."' where id=".$id;
    }else{
        $sql = "update categorys set  categoryName='".$tenloai."',categoryDesc='".$motaloai."' where id=".$id;
    }
    pdo_execute($sql);
}
?>