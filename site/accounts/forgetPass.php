<div class="container">

    <form action="index.php?act=quenmk" method="post" style="width: 400px;" class="m-auto">
        <p class="title text-center fs-5">Quên mật khẩu</p>
        <div class="mb10 position-relative w-100 mb-5" style="height: 40px;">
            <i class="bi bi-person-fill fs-3 position-adsolute"><input type="text" name="accountEmail" class="border-0 w-100 h-100 position-absolute fs-5 ms-3 ps-2" id="" placeholder="Email"></i><br>

            <span class="mx-5" style="color: red;">
                <?php
                if (isset($error['Email']) && ($error['Email'] != "")) {
                    echo $error['Email'];
                }
                ?>
            </span><br>
        </div>

        <?php
        if (isset($thongbao) && $thongbao != "") {
            echo $thongbao;
        }
        ?>
        <div class="mb10 position-relative w-100 mb-5" style="height: 40px;">


            <div class="row mb10">
                <input type="submit" class="btn btn-danger w-90 my-3" value="Gửi" name="forgetpass">
            </div>

    </form>





</div>