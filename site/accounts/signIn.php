<div class="container">
    <?php
    if (isset($_SESSION['accountEmail'])) {
        extract($_SESSION['accountEmail']);
    ?>
    <?php
    } else {
    ?>


        <form action="index.php?act=dangnhap" method="post">

            <div class="row mb10">
                <label for="">Email</label> <br>
                <input type="text" name="accountEmail" id="" placeholder="Tên đăng nhập">
            </div>
            <div class="row mb10">
                <label for="">Mật khẩu</label> <br>
                <input type="password" name="accountPass" id="" placeholder="Mật khẩu">
            </div>

            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
            <h2 class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </form>

    <?php } ?>


</div>