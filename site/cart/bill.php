<div class="container">
    <form action="index.php?act=billconfirm" method="post">
        <div class="row">
            <div class="col-xl-8 billform boxcontent m-auto">
                <p class="title text-center fs-3">Thông tin đặt hàng</p>

                <table class="table ">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $accountName = $_SESSION['user']['accountName'];
                        $accountPhone = $_SESSION['user']['accountPhone'];
                        $accountEmail = $_SESSION['user']['accountEmail'];
                        $accountAddress = $_SESSION['user']['accountAddress'];
                    } else {
                        $accountName = "";
                        $accountPhone = "";
                        $accountEmail = "";
                        $accountAddress = "";
                    }
                    ?>
                    <tr>
                        <td class="fs-5 pl-1">Họ tên</td>
                        <td><input type="text" class="w-100 rounded" name="accountName" value="<?= $accountName ?>"></td>
                    </tr>

                    <tr>
                        <td class="fs-5 pl-1">Địa chỉ</td>
                        <td><input type="text" class="w-100 rounded" name="accountAddress" value="<?= $accountAddress ?>"></td>
                    </tr>
                    <tr>
                        <td class="fs-5 pl-1">Số điện thoại</td>
                        <td><input type="text" class="w-100 rounded" name="accountPhone" value="<?= $accountPhone ?>"></td>
                    </tr>
                    <tr>
                        <td class="fs-5 pl-1">Email</td>
                        <td><input type="text" class="w-100 rounded" name="accountEmail" value="<?= $accountEmail ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-8 billform boxcontent m-auto">
                <p class="title text-center fs-3">Phương thức thanh toán</p>
                <div class="row flex-column justify-content-between">
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" value="1" name="check" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Thanh toán Online
                        </label>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" name="check" value="2" id="defaultCheck1" checked>
                        <!-- <img src="../src/img/logo-momo-png-1.png" alt="" style="width: 20px;height: 20px;"> -->
                        <label class="form-check-label" for="defaultCheck1">
                            Thanh toán Momo
                        </label>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" name="check" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Thanh toán khi nhận hàng
                        </label>
                    </div>

                </div>

            </div>
            <div class="row m-auto">
                <p class="title text-center fs-3">Thông tin giỏ hàng</p>
                <table class="table text-center">
                    <?php
                    viewcart(0);
                    ?>

                </table>
            </div>
            <div class="row m-auto col-2 mb-4">
                <input type="submit" class="btn btn-primary mx-3" name="dongydathang" value="Đồng ý đặt hàng">

            </div>
        </div>
    </form>

</div>