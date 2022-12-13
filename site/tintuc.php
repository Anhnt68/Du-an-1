</div>

<div class="container text-center w-75 p-4">
    <div class="title">
        <h2>Tin Tức Liên Quan</h2>
    </div>

    <?php
    $i = 0;
    foreach ($news as $news) {
      extract($news);
      $linknews = "index.php?act=newsct&id=" .$id;
      $hinh = $img_path . $news_image;
      echo '
      <div class="row m-5">
      <div class="content-lage d-flex ">
          <div class="content-right col-6">
              <img class="w-75" src="' . $hinh . '" alt="" style="width:150px;height:250px">
          </div>
          <div class="content-left col-6 text-justify">
              <div class="title-item">
                  <h2>'.$news_title.'</h2>
              </div>
           
              <div class="item-1">
                  <p>'.$news_desc.'</p>
              </div>
              <a href="' . $linknews . '""> <button class="btn btn-danger my-3">Chi tiết bài viết...</button></a>
              
              <div>
           

              </div>
          </div>
          

      </div>
  </div>
                   
                    ';
      $i += 1;
    }
    ?>
    <div class="row ">
        <p class="text-center col-12">Đến với Chuẩn Perfume, bạn sẽ hoàn toàn yên tâm về chất lượng sản phẩm, giá
            thành hợp lý, tư vấn nhiệt tình, có hiểu biết, giao hàng nhanh chóng và nhiều chương trình khuyến mãi,
            giảm giá hấp dẫn. Với hàng ngàn sản phẩm nước hoa, Chuẩn Authentic sẽ đáp ứng đa dạng nhu cầu thời trang
            của khách hàng.</p>
    </div>
    <div class="row my-4">
        <h3>Chuẩn Perfume Nâng Tầm Cuộc Sống</h2>
    </div>


</div>

<style>
    .item-1,.title-item{
        text-align: justify;
    }
</style>
</body>