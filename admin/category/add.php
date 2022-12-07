<div class="col-xl-10">
  <hr>
  <h2 class="text-center">
    Thêm mới loại hàng hóa
  </h2>
  <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mã loại</label>
      <input type="text" name="maloai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên loại</label>
      <input type="text" name="tenloai" class="form-control" id="exampleInputPassword1" value="<?= isset($tenloai) ? $tenloai : '' ?>">
      <span style="color: red;">
        <?= isset($errors['tenloai']) ? $errors['tenloai'] : '' ?>
      </span><br>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Thêm ảnh</label>
      <input type="file" name="anhloai" class="form-control" id="exampleInputPassword1" value="<?= isset($anhloai) ? $anhloai : '' ?>">
      <span style="color: red;">
        <?= isset($errors['anhloai']) ? $errors['anhloai'] : '' ?>
      </span><br>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mô Tả</label> <br>
      <textarea name="motaloai" id="" cols="80" rows="10"></textarea>
      <span style="color: red;">
        <?= isset($errors['motaloai']) ? $errors['motaloai'] : '' ?>
      </span><br>
    </div>
    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?act=listdm"><button type="button" class="btn btn-primary">Danh sách</button></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
      echo $thongbao;

    ?>
  </form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>