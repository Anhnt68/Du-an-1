<div class="container">
    <?php
    if (isset($_SESSION['account']) && (is_array($_SESSION['account']))) {
        extract($_SESSION['account']);
    }
    ?>

    <div class="row boxcontent m-auto" style="width:400px">
        <div class="boxtitledangki text-center fs-5 mb-3">
            CẬP NHẬT TÀI KHOẢN
        </div>
        <form action="index.php?act=updateAccount" method="post" enctype="multipart/form-data">
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Email</label><br>
                <input type="text" name="accountEmail" id="input-form" class="border border-0 border-bottom w-100 form-control" placeholder="nguyenvana@gmail.com" value="<?= $accountEmail  ?>">
                <span style="color: red;">
                    <?= isset($errors['accountEmail']) ? $errors['accountEmail'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Họ và tên</label><br>
                <input type="text" name="accountName" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="Nguyễn Văn A" value="<?= $accountName ?>">
                <span style="color: red;">
                    <?= isset($errors['accountName']) ? $errors['accountName'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Mật khẩu</label><br>
                <input type="password" name="accountPass" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="********" value="<?= $accountPass ?>">
                <span style="color: red;">
                    <?= isset($errors['accountPass']) ? $errors['accountPass'] : '' ?>
                </span><br>
            </div>

            <input type="file" name="accountImage" id="input-form " class="border border-0 border-bottom w-100 form-control">

            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Địa chỉ</label><br>
                <input type="text" name="accountAddress" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="Hà Nội" value="<?= $accountAddress ?>">
                <span style="color: red;">
                    <?= isset($errors['accountAddress']) ? $errors['accountAddress'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Số điện thoại</label><br>
                <input type="text" name="accountPhone" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="0987678876" value="<?= $accountPhone ?>">
                <span style="color: red;">
                    <?= isset($errors['accountPhone']) ? $errors['accountPhone'] : '' ?>
                </span><br>
            </div>
            <div class="form-input text-center">
                <input type="hidden" name="id" name="id" value=" <?= $id ?>">
                <input type="submit" class="btn btn-primary" name="update" id="login-button" value="Cập nhật">
            </div>
        </form>
    </div>
</div>