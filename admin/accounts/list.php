<div class="col-xl-10">

    <table border="1" class="table">
        <tr>
            <th>MÃ TÀI KHOẢN</th>
            <th>Họ và Tên</th>
            <th>MẬT KHẨU</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>ĐIỆN THOẠI</th>
            <th>VAI TRÒ</th>
            <th>U/D</th>
        </tr>

        <?php
        foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $xoatk = "index.php?act=xoatk&id=" . $id;

            echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $accountName . '</td>
                        <td>' . $accountPass . '</td>
                        <td>' . $accountEmail . '</td>
                        <td>' . $accountAddress . '</td>
                        <td>' . $accountPhone . '</td>
                        <td>' . $role . '</td>
                        <td>
                        <a href = "' . $xoatk . '"><input type = "button" value = "Xoá"></a>
                        </td>
                        </tr>';
        }

        ?>
    </table>
</div>