<div class="container">
    <div class="row">
    <p class="title text-center fs-3">Cảm ơn quý khách đã đặt hàng!</p>

    </div>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
        $tttt = get_tttt($bill['billPttt']);

    }
    ?>
    <div class="row text-center">
        <div class="boxtitle">THÔNG TIN ĐƠN</div>
        <li class="list-group-item">- Mã đơn hàng:   DA1-<?= $bill['id']; ?></li>
        <li class="list-group-item">- Ngày đặt hàng:   <?= $bill['oderDate']; ?></li>
        <li class="list-group-item">- Tổng đơn hàng:   <?= $bill['billTotal']; ?></li>
        <li class="list-group-item">- Phương thức thanh toán:   <?= $tttt?></li> <br><br>
    </div>


    <div class="row text-center">
        <div class="boxtitle">THÔNG TIN NGƯỜI ĐẶT HÀNG</div>
        <div class="row boxcontent billform">
        <li class="list-group-item">- Người đặt hàng:   <?= $bill['billName']; ?></li>
        <li class="list-group-item">- Địa chỉ:   <?= $bill['billAddress']; ?></li>
        <li class="list-group-item">- Email:   <?= $bill['billEmail']; ?></li>
        <li class="list-group-item">- Điện thoại:   <?= $bill['billPhone']; ?></li> <br><br>

           
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