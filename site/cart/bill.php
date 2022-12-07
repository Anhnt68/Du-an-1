<div class="container">
    <form action="index.php?act=billconfirm" method="post">
        <div class="row justify-content-between">
            <div class="col-xl-6 billform boxcontent m-auto">
                <p class="title text-center fs-3">Thông tin đặt hàng</p>

                <table class="table ">
                    <?php
                    if (isset($_SESSION['account'])) {
                        $accountName = $_SESSION['account']['accountName'];
                        $accountPhone = $_SESSION['account']['accountPhone'];
                        $accountEmail = $_SESSION['account']['accountEmail'];
                        $accountAddress = $_SESSION['account']['accountAddress'];
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
                        <td><input type="text" class="w-100 rounded" name="accountPhone" value="0<?= $accountPhone ?>"></td>
                    </tr>
                    <tr>
                        <td class="fs-5 pl-1">Email</td>
                        <td><input type="text" class="w-100 rounded" name="accountEmail" value="<?= $accountEmail ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-4 billform boxcontent m-auto">
                <p class="title text-center fs-3">Phương thức thanh toán</p>
                <div class="row flex-column justify-content-between">
                    <div class="form-check mt-3">
                        <input class="form-check-input" id="check1" type="radio" value="1" name="check"/>
                        <label class="form-check-label" >
                            Thanh toán Momo
                        </label>
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input" id="check2" type="radio" value="0" name="check"/>
                        <label class="form-check-label" >
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

            <div class="row m-auto col-2 mb-4" id="dh">
                <input type="submit" class="btn btn-primary" name="dongydathang" value="Đồng ý đặt hàng">
            </div>
            <div class="row m-auto col-3 mb-4" id="momo">
                <input type="submit" class="btn btn-danger" name="thanhtoanmomo" value="Thanh toán MOMO ATM">
            </div>

        </div>
    </form>
    
</div>