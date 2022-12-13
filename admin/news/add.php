<div class="col-xl-8 m-auto">
    <div class="row frmtitle" style="margin: 10px 0;">
        <h1>THÊM TIN TỨC MỚI</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addnews" method="POST" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tiêu đề tin tức</label>
                <input type="text" name="news_title" class="form-control" id="exampleInputPassword1" value="<?= isset($news_title) ? $news_title : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['news_title']) ? $errors['news_title'] : '' ?>
                </span><br>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ảnh tiêu đề</label>
                <input type="file" name="news_image" class="form-control" id="exampleInputPassword1" value="<?= isset($news_image) ? $news_image : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['news_image']) ? $errors['news_image'] : '' ?>
                </span><br>
            </div>
            <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mô Tả</label> <br>
      <textarea name="news_desc" id="" cols="80" rows="10"><?= $news_desc?? "" ?></textarea>
      <span style="color: red;">
        <?= isset($errors['news_desc']) ? $errors['news_desc'] : '' ?>
      </span><br>
    </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mô tả chi tiết</label>
                <textarea name="news_detail" class="form-control" cols="80" rows="10" style="width: 100%;border-radius: 5px;"><?= $news_detail ?? "" ?></textarea>
                <span style="color: red;">
                    <?= isset($errors['news_detail']) ? $errors['news_detail'] : '' ?>
                </span><br>
            </div>
           
            <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=listnews"><button type="button" class="btn btn-primary">Danh sách</button></a>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace('news_detail');
    </script>
</div>

</div>