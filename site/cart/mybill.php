<div class="col-xl-10 m-auto">
    <hr>
    <h2 class="text-center">
        Đơn hàng của bạn
    </h2>
    <table class="table mw-100">
        <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Số lượng mặt hàng được đặt</th>
                <th scope="col">Số lượng hàng đặt</th>
                <th scope="col">Tổng giá trị đơn hàng</th>
                <th scope="col">Tình trạng đơn hàng</th>
                <th scope="col">Tình trạng thanh toán đơn hàng</th>
                <th scope="col"></th>


            </tr>
        </thead>

        <tbody>
            <?php
            if (is_array($listbill)) {


                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill['billName'] . "
                    <br />" . $bill['billEmail'] . "
                    <br />" . $bill['billAddress'] . "
                    <br />0" . $bill['billPhone'];
                    $show = "index.php?act=show&id=" . $id;

                    $soluong = tinhsoluong($bill['quatity']);
                    $countsp = loadall_cart_count($bill['id']);
                    $ttdh = get_ttdh($bill['billStatus']);
                    $tttt = get_tttt($bill['billPttt']);
                    echo '
            <tr>
            <td>DA1-' . $bill['id'] . '</td>
            <td>' . $kh . '</td>
            <td>' . $bill['oderDate'] . '</td>
            <td>' . $countsp . '</td>
            <td>' . $bill["quatity"] . '</td>
            <td>' . number_format($bill['billTotal'], 0, '', ',')  . '</td>
            <td>' . $ttdh . '</td>
            <td>' . $tttt . '</td>
            <td><a  href="' . $show . '"><input type="submit" value="Show đơn hàng" class="btn btn-primary"> </a></td>

       
    </tr>
            ';
                }
            }
            ?>
        </tbody>

    </table>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>