<div class="container">
    <div class="row boxcontent m-auto" style="width:400px">
        <div class="boxtitledangki text-center fs-5 mb-3">
            ĐĂNG KÍ TÀI KHOẢN
        </div>
        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">

            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Email</label><br>
                <input type="text" name="accountEmail" id="input-form" class="border border-0 border-bottom w-100 form-control" placeholder="nguyenvana@gmail.com" value="<?= isset($accountEmail) ? $accountEmail : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['accountEmail']) ? $errors['accountEmail'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Họ và tên</label><br>
                <input type="text" name="accountName" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="Nguyễn Văn A" value="<?= isset($accountName) ? $accountName : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['accountName']) ? $errors['accountName'] : '' ?>
                </span><br>

            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Mật khẩu</label><br>
                <input type="password" name="accountPass" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="********" value="<?= isset($accountPass) ? $accountPass : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['accountPass']) ? $errors['accountPass'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Nhập lại Mật khẩu</label><br>
                <input type="password" name="accountPass1" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="********">
                <span style="color: red;">
                    <?= isset($errors['accountPass1']) ? $errors['accountPass1'] : '' ?>
                </span><br>
            </div>
            <input type="file" hidden name="accountImage" id="input-form" class="border border-0 border-bottom w-100 form-control">


            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Địa chỉ</label><br>
                <input type="text" name="accountAddress" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="Hà Nội" value="<?= isset($accountAddress) ? $accountAddress : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['accountAddress']) ? $errors['accountAddress'] : '' ?>
                </span><br>
            </div>
            <div class="form-input">
                <label for="" class="labeltitle fs-5 ms-2">Số điện thoại</label><br>
                <input type="text" name="accountPhone" id="input-form " class="border border-0 border-bottom w-100 form-control" placeholder="0987678876" value="<?= isset($accountPhone) ? $accountPhone : '' ?>">
                <span style="color: red;">
                    <?= isset($errors['accountPhone']) ? $errors['accountPhone'] : '' ?>
                </span><br>
            </div>
            <div class="form-input text-center">

                <input type="submit" class="btn btn-primary" name="dangky" id="login-button" value="Đăng Kí">
            </div>
        </form>
    </div>

</div>