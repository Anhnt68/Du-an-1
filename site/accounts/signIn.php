<div class="container">
    <?php
    if (isset($_SESSION['account'])) {
        extract($_SESSION['account']);
    ?>
    <?php
    } else {
    ?>


        <form action="index.php?act=dangnhap" method="post" style="width: 400px;" class="m-auto">
            <p class="title text-center fs-5">ĐĂNG NHẬP</p>
            <div class="mb10 position-relative w-100 mb-5" style="height: 40px;">
                <i class="bi bi-person-fill fs-3 position-adsolute"><input type="text" name="accountEmail" class="border-0 w-100 h-100 position-absolute fs-5 ms-3 ps-2" id="" placeholder="Email" value="<?= isset($accountEmail) ? $accountEmail : '' ?>"></i><br>

                <span class="mx-5" style="color: red;">
                    <?php
                    if (isset($error['Email']) && ($error['Email'] != "")) {
                        echo $error['Email'];
                    }
                    ?>
                </span><br>
            </div>
            <div class="mb10 position-relative w-100 mb-5" style="height: 40px;">
                <i class="bi bi-key-fill fs-3 position-adsolute w-100 h-100"><input type="password" name="accountPass" class="border-0 w-100 h-100 position-absolute fs-5 ms-3 ps-2" id="" placeholder="Mật khẩu"></i><br>
                <span class="mx-5" style="color: red;">
                    <?php
                    if (isset($error['Password']) && ($error['Password'] != "")) {
                        echo $error['Password'];
                    }
                    ?>
                </span><br>
            </div>
            <a href="index.php?act=quenmk" class="text-decoration-none ">Quên mật khẩu</a>
            <div class="row mb10">
                <input type="submit" class="btn btn-danger w-90 my-3" value="Đăng nhập" name="dangnhap">
            </div>

        </form>


</div>

<?php } ?>


</div>