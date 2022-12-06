<div class="container">
    <div class="row justify-content-around">
        <p class="title text-center fs-3">Cảm ơn quý khách đã đặt hàng!</p>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
            $tttt = get_ttttt($bill['billPttt']);
        }
        ?>
        <div class="col-xl-4">
            <!-- <div class="boxtitle text-center">THÔNG TIN ĐƠN</div>
            <li class="list-group-item">- Mã đơn hàng: DA1-<?= $bill['id']; ?></li>
            <li class="list-group-item">- Ngày đặt hàng: <?= $bill['oderDate']; ?></li>
            <li class="list-group-item">- Tổng đơn hàng: <?= $bill['billTotal']; ?></li>
            <li class="list-group-item">- Phương thức thanh toán: <?= $tttt ?></li> <br><br> -->
            <table class="table">
                <tr class="text-center">
                    <th colspan="2">THÔNG TIN ĐƠN</th>
                </tr>
                <tr>
                    <td>Mã đơn hàng</td>
                    <td>DA1-<?= $bill['id']; ?></td>
                </tr>
                <tr>
                    <td>Ngày đặt hàng</td>
                    <td><?= $bill['oderDate']; ?></td>
                </tr>
                <tr>
                    <td>Tổng đơn hàng</td>
                    <td><?= $bill['billTotal']; ?></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán</td>
                    <td><?= $tttt ?></td>
                </tr>
            </table>
        </div>


        <div class="col-xl-4">
            <div class="row boxcontent billform">
                <!-- <li class="list-group-item">- Người đặt hàng: <?= $bill['billName']; ?></li>
                <li class="list-group-item">- Địa chỉ: <?= $bill['billAddress']; ?></li>
                <li class="list-group-item">- Email: <?= $bill['billEmail']; ?></li>
                <li class="list-group-item">- Điện thoại: <?= $bill['billPhone']; ?></li> <br><br> -->
                <table class="table">
                    <tr class="text-center">
                        <th colspan="2">THÔNG TIN NGƯỜI ĐẶT HÀNG</th>
                    </tr>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?= $bill['billName']; ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?= $bill['billAddress']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $bill['billEmail']; ?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?= $bill['billPhone']; ?></td>
                    </tr>
                </table>

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
</div>