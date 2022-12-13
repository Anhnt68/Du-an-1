<?php
extract($news_one);

    $news_title = $news_one["news_title"];
    $news_desc = $news_one["news_desc"];
    $news_detail = $news_one["news_detail"];
    $news_image1 = $news_one["news_image"];
    $news_image = $img_path . $news_one["news_image"];
   
    if (is_file($news_image)) {
        $news_image = "<img src = '" . $news_image . "' height='80'>";
    } else {
        $news_image = "no photo";
    }


?>

<div class="container text-center w-75 p-4">
    <div class="title">
        <h2> <?= $news_title ?></h2>
    </div>
    <div class="item-1">
    <?= $news_detail ?>      
              </div>
    </div>