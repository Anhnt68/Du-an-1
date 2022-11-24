<div class="row mb">
    <div class="boxtrai mr">
        <div class="row dangki">

            <div class="boxtitledangki">
                ĐĂNG KÍ THÀNH VIÊN
            </div>
            <div class="row boxcontent">
                <form action="index.php?act=dangky" method="post">
                    <div class="form-input">
                        <label for="" class="labeltitle">Email</label><br>
                        <input type="email" name="accountEmail" id="input-form"><br>
                    </div>

                    <div class="form-input">
                        <label for="" class="labeltitle">User</label><br>
                        <input type="text" name="accountName" id="input-form">
                    </div>
                    <div class="form-input">
                        <label for="" class="labeltitle">password</label><br>
                        <input type="password" name="accountPass" id="input-form">
                    </div>

                    <div class="form-input">
                        <label for="" class="labeltitle">Address</label><br>
                        <input type="text" name="accountAddress" id="input-form">
                    </div>
                    <div class="form-input">
                        <label for="" class="labeltitle">Phone</label><br>
                        <input type="text" name="accountPhone" id="input-form">
                    </div>

                    <input type="submit" name="dangky" id="login-button" value="Đăng Kí">
                    <input type="reset" name="" id="login-button" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</div>