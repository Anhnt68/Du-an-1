<?php
include "../dao/pdo.php";
include "../dao/category_dao.php";
include "../dao/product_dao.php";
include "../dao/accounts.php";
include "../dao/cart.php";
include "../dao/statistical_dao.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào add danh mục k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $motaloai = $_POST['motaloai'];
                $anhloai = $_FILES['anhloai']['name'];
                $target_dir = "../uploads";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                insert_dm($tenloai, $motaloai, $anhloai);
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
                $motaloai = $_POST['motaloai'];
                $anhloai = $_FILES['anhloai']['name'];
                $target_dir = "../uploads";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                update_dm($id, $tenloai, $motaloai, $anhloai);
                $thongbao = "cập nhật thành công";
            }
            $listdm = loadAll_dm();

            include "category/list.php";

            break;
        case 'addpro':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $categoryid = $_POST['categoryid'];
                $productName = $_POST['productName'];
                $productPrice = $_POST['productPrice'];
                $productDesc = $_POST['productDesc'];

                $productCapacity = $_POST['productCapacity'];
                $quatity = $_POST['quatity'];
                $productImage = $_FILES['productImage']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
                if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_product($productName, $productPrice, $productImage, $productDesc, $productCapacity, $quatity, $categoryid);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadAll_dm();
            include "product/addpro.php";
            break;

        case 'listpro':
            // if (isset($_POST['listok']) && ($_POST['listok'])) {
            //     $kyw = $_POST['kyw'];
            //     $categoryid = $_POST['categoryid'];
            // } else {
            //     $kyw = '';
            //     $categoryid = 0;
            // }
            $listdm = loadAll_dm();
            $listproduct = loadall_product();
            include "product/list.php";
            break;
        case 'xoapro':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_product($_GET['id']);
            }
            $listproduct = loadall_product("", 0);
            include "product/list.php";
            break;

        case 'suapro':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $product = loadone_product($_GET['id']);
            }
            $listdm = loadAll_dm();
            include "product/update.php";
            break;
        case 'updatepro':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $categoryid = $_POST['categoryid'];
                $productName = $_POST['productName'];
                $productPrice = $_POST['productPrice'];
                $productDesc = $_POST['productDesc'];

                $productCapacity = $_POST['productCapacity'];
                $productImage = $_FILES['productImage']['name'];
                $quatity = $_POST['quatity'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
                if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_product($id, $categoryid, $productName, $productPrice, $productImage, $productDesc,  $productCapacity, $quatity);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadAll_dm();
            $listproduct = loadall_product("", 0);
            include "product/list.php";
            break;
            // phần admn đơn hàng
        case "listbill":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadAll_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'xoadh':
            if ($_GET['id'] && $_GET['id'] > 0) {
                delete_donhang($_GET['id']);
            }
            $listbill = loadall_bill2();
            include "bill/listbill.php";
            break;
        case 'suadh':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $dh = loadone_bill($_GET['id']);
            }
            $listbill = loadall_bill2();
            include "bill/update_bill.php";
            break;
        case 'updatebill':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $billStatus = $_POST['billStatus'];
                $listbill = update_bill($id, $billStatus);
            }
            $listbill = loadall_bill2();


            include "bill/listbill.php";

            break;
            // phần thống kê
        case 'listtk':
            $listthongke = loadAll_thongke();
            include 'statistical/list.php';
            break;
        case 'bieudo':
            $listthongke = loadAll_thongke();
            include 'statistical/bieudo.php';
            break;
        case 'listtkk':
            $listthongkee = loadAll_thongkedt();
            include 'statistical/listdt.php';
            break;
        case 'bieudodt':
            $listthongkee = loadAll_thongkedt();
            include 'statistical/bieudodt.php';
            break;
        case 'show':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $showdh = Show_dh($_GET['id']);
            }

            include "bill/chitietbill_admin.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "accounts/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan("", 0);
            include "accounts/list.php";
            break;
        default:
            include "home.php";
            break;
    }
}
include "home.php";
include "footer.php";
