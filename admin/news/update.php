<?php
if (is_array($news)) {
    extract($news);
}

$hinhpath = "../uploads/" . $news_image;
if (is_file($hinhpath)) {
    $news_image = "<img src = '" . $hinhpath . "' height='80'>";
} else {
    $news_image = "no photo";
}
?>
<div class="col-xl-8 m-auto">
    <div class="row frmtitle">
        <h1>CẬP NHẬT TIN TỨC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatenews" method="POST" enctype="multipart/form-data">
           
          
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tiêu Đề Bài Viết</label>
                <input type="text" name="news_title" class="form-control" id="exampleInputPassword1" value="<?= $news_title ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                <input type="file" name="news_image" class="form-control" id="exampleInputPassword1" ><?= $news_image ?>
            </div>
            <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mô Tả</label> <br>
      <textarea name="news_desc" id="" cols="80" rows="10"><?= $news_desc ?>"</textarea>
    </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Chi tiết</label>
                <textarea name="news_detail" style="resize: none;" class="form-control" id="exampleInputPassword1" cols="120" rows="8"><?= $news_detail ?></textarea>
            </div>
           


            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?act=listnews"><button type="button" class="btn btn-primary">Danh sách</button></a>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>