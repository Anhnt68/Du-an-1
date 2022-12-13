<?php
function insert_news($news_title,$news_desc,$news_detail,$news_image){
    $sql ="insert into news(news_title,news_desc,news_detail,news_image) values('$news_title','$news_desc','$news_detail','$news_image') ";
    pdo_execute($sql);
}
function loadAll_news(){
    $sql ="select * from news order by id desc";
    $listnews= pdo_query($sql);
    return $listnews;
}
function delete_news($id){
    $sql = "delete from news where id=".$id;
    pdo_execute($sql);
   }
   function loadOne_news($id){
    $sql = "select * from news where id =" . $id;
    $news = pdo_query_one($sql);
    return $news;
}
function update_news($id,$news_title,$news_desc,$news_detail,$news_image){
    if($news_image!=""){
        $sql = "update news set  news_title='".$news_title."',news_desc='".$news_desc."',news_detail='".$news_detail."',news_image='".$news_image."' where id=".$id;
    }else{
        $sql = "update news set  news_title='".$news_title."',news_desc='".$news_desc."',news_detail='".$news_detail."' where id=".$id;

    }
    pdo_execute($sql);
}
function loadall_news_home()
{
    $sql = "select * from news where 1 order by id desc limit 0,5";
    $listnews = pdo_query($sql);
    return $listnews;
}
?>