<div class="col-xl-10">
    <hr>
    <h2 class="text-center">
        Danh sách đơn hàng
    </h2>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">

        <input type="submit" name="listok" value="go">
    </form>

    <table class="table mw-100">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số lượng loại hàng</th>
                <th scope="col">Số lượng hàng đặt</th>
                <th scope="col">Tổng giá trị đơn hàng</th>
                <th scope="col">Tình trạng đơn</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Tình trạng thanh toán</th>
                <th scope="col">Thao tác</th>
                <th scope="col">Show đơn hàng</th>

            </tr>
        </thead>

        <tbody>
            <?php foreach ($listbill as $bill) {
                extract($bill);
                $kh = $bill['billName'] . "
                   <br />" . $bill['billEmail'] . "
            <br />" . $bill['billAddress'] . "
            <br />" . $bill['billPhone'];

                $suadh = "index.php?act=suadh&id=" . $id;
                $xoadh = "index.php?act=xoadh&id=" . $id;
               $ttdh = get_ttdh($bill['billStatus']);
               $tttt = get_tttt($bill['billPttt']);
               $countsp = loadall_cart_count($bill['id']);
               $showdh="index.php?act=show&id=".$id;
                  
                echo '
                  <tr>
                      <td scope="row"><input type="checkbox" name="" id=""></td>
                      <td>DAM-' . $bill['id'] . '</td>
            <td>' . $kh . '</td>
            <td>' . $countsp . '</td>
            <td>' . $bill['quatity']. '</td>
            <td>' . $bill['billTotal'] . '</td>
            <td>' . $ttdh. '</td>
            <td>' . $bill['oderDate'] . '</td>
            <td>' . $tttt . '</td>
            <td><a href="'.$showdh.'"><input type="button" value="Show đơn hàng" class="btn btn-primary"></a></td>

                      <td><a href="' . $suadh . '"><input type="button" value="Sửa" class="btn btn-primary"></a>
                      <a href="' . $xoadh . '"> <input type="button" value="Xóa" class="btn btn-primary bg-danger"></a>
                      </td>
                    </tr>
                      ';
            }
            ?>
        </tbody>

    </table>
    <button type="submit" class="btn btn-primary">Chọn tất cả</button>
    <button type="reset" class="btn btn-primary">Bỏ chọn tất cả</button>
    <button type="reset" class="btn btn-primary">Xóa các mục đã chọn</button>
    <a href="index.php?act=adddm"><button type="button" class="btn btn-primary">Thêm mới</button></a>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>