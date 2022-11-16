<?php
include "../dao/pdo.php";
include "../dao/category_dao.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào add danh mục k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $anhloai = $_FILES['anhloai']['name'];
                $target_dir = "../upload";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                insert_dm($tenloai, $anhloai);
                $thongbao = "them thành công";
            }
            include "category/add.php";
            break;
        case 'listdm':
            $listdm = loadAll_dm();
            include "category/list.php";
            break;
        case 'xoadm':
            if ($_GET['id'] && $_GET['id'] > 0) {
                delete_dm($_GET['id']);
            }
            $listdm = loadAll_dm();
            include "category/list.php";
            break;
        case 'suadm':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $dm = loadOne_dm($_GET['id']);
            }
            $listdm = loadAll_dm();
            include "category/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                $anhloai = $_FILES['anhloai']['name'];
                $target_dir = "../upload";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                update_dm($id, $tenloai, $anhloai);
                $thongbao = "cập nhật thành công";
            }
            $listdm = loadAll_dm();

            include "category/list.php";

            break;
        default:
            include "home.php";
            break;
    }
}
include "home.php";
include "footer.php";
