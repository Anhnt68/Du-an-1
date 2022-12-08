<?php
session_start();
include "dao/pdo.php";
include "dao/product_dao.php";
include "dao/category_dao.php";
include "dao/cart.php";
include "dao/accounts.php";
include "site/header.php";
include "dao/comment.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$dsdm = loadAll_dm();
$spnew = loadall_product_home();
$proview = loadall_pro_view();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "site/gioithieu.php";
            break;
        case 'lienhe':
            include "site/lienhe.php";
            break;
            case 'tintuc':
                include "site/tintuc.php";
                break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $accountEmail = $_POST['accountEmail'];
                $accountPass = $_POST['accountPass'];
                if (is_array(checkUser($accountEmail, $accountPass))) {
                    $_SESSION['account'] = checkUser($accountEmail, $accountPass);
                    header('location: index.php');
                } else {
                    $error = [];
                    $error['Email'] = "Email không hợp lệ";
                    $error['Password'] = "Mật khẩu không hợp lệ";
                }
            }
            include "site/accounts/signIn.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $accountName = $_POST['accountName'];
                $accountPass = $_POST['accountPass'];
                $accountPhone = $_POST['accountPhone'];
                $accountEmail = $_POST['accountEmail'];
                $accountPass1 = $_POST['accountPass1'];
                $accountAddress = $_POST['accountAddress'];
                $email_exit2 = customer_check_email($accountEmail);

                $accountImage = $_FILES['accountImage']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["accountImage"]["name"]);
                if (move_uploaded_file($_FILES["accountImage"]["tmp_name"], $target_file)) {
                } else {
                }
                $errors = [];
                if (!filter_var($accountEmail, FILTER_VALIDATE_EMAIL)) {
                    $errors['accountEmail'] = "Email không hợp lệ";
                }
                if ($email_exit2) {
                    $errors['accountEmail'] = "Email đã được sử dụng";
                }
                if ($accountName == "") {
                    $errors['accountName'] = "Họ tên không được để trống";
                }
                if (strlen($accountPhone) != 10) {
                    $errors['accountPhone'] = "Số điện thoại phải đủ 10 kí tự";
                }
                if ($accountPhone == "") {
                    $errors['accountPhone'] = "Số điện thoại không hợp lệ";
                }
                if ($accountAddress == "") {
                    $errors['accountAddress'] = "Địa chỉ không được để trống";
                }
                if (strlen($accountPass) < 8) {
                    $errors['accountPass'] = "Mật khẩu không được dưới 8 kí tự";
                }
                if ($accountPass1 != $accountPass) {
                    $errors['accountPass1'] = "Mật khẩu không đúng";
                }
                if (!$errors) {
                    insert_account($accountName, $accountPass, $accountPhone, $accountEmail, $accountAddress, $accountImage);
                    header('location:index.php?act=dangnhap');
                }
            }

            include "site/accounts/signUp.php";
            break;
        case 'updateAccount':
            if (isset($_POST['update']) && $_POST['update']) {
                $id = $_POST['id'];
                $accountName = $_POST['accountName'];
                $accountPass = $_POST['accountPass'];
                $accountPhone = $_POST['accountPhone'];
                $accountEmail = $_POST['accountEmail'];
                $accountAddress = $_POST['accountAddress'];
                $accountImage = $_FILES['accountImage']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["accountImage"]["name"]);
                if (move_uploaded_file($_FILES["accountImage"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                updateAccount($id, $accountName, $accountPass, $accountPhone, $accountEmail, $accountAddress, $accountImage);
                $_SESSION['account'] = checkUser($accountEmail, $accountPass);
                header('location: index.php');
            }
            include "site/accounts/update.php";
            break;
        case 'quenmk':
            if (isset($_POST['forgetpass']) && ($_POST['forgetpass'])) {
                $accountEmail = $_POST['accountEmail'];
                $email_exit2 = customer_check_email($accountEmail);

                if (is_array($email_exit2)) {
                    $thongbao = 'Mật khẩu là: ' . $email_exit2['accountPass'] . '<a href="index.php?act=dangnhap">Đăng nhập</a>';
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "site/accounts/forgetPass.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');

            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['categoryid']) && ($_GET['categoryid'] > 0)) {
                $categoryId = $_GET['categoryid'];
            } else {
                $categoryId = 0;
            }
            $list_pro_cate = loadall_product($kyw, $categoryId);
            $ten = load_ten_category($categoryId);
            include "site/sanpham.php";
            break;


            // case 'sanphamct':
            //     if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
            //         $id = $_GET["idsp"];
            //         $pro_one = loadone_product($id);
            //         $dm_one = loadOne_dm($id);
            //         extract($pro_one);
            //         // extract($dm_one);
            //         $categoryid = $pro_one["categoryId"];
            //         $sp_cung_loai = load_product_cungloai($id, $categoryid);
            //         $ten = load_ten_category($categoryid);
            //         extract($sp_cung_loai);
            //     }


            //     include "site/chitietsanpham.php";
            //     break;
        case 'sanphamct':

            if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
                $id = $_GET["idsp"];
                $pro_one = loadone_product($id);
                $dm_one = loadOne_dm($id);
                extract($pro_one);
                $categoryid = $pro_one["categoryId"];
                $dsbl = loadall_comment($id);
                $all_comment_theoIdsp = load_bl_theo_idsp($id);
                extract($dsbl);
                $sp_cung_loai = load_product_cungloai($categoryid);
                $ten = load_ten_category($categoryid);
            }
            include "site/chitietsanpham.php";

            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $productName = $_POST['productName'];
                $productImage = $_POST['productImage'];
                $productPrice = $_POST['productPrice'];
                $quantity = $_POST['productQuantity'];
                $sumPrice = $productPrice * $quantity;
                // kiem tra san pham co trong gio hang hay khong
                $check = 0;
                for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {
                    if ($_SESSION['mycart'][$i][1] == $productName) {
                        $check = 1;
                        $quantitynew = $quantity + $_SESSION['mycart'][$i][4];
                        $_SESSION['mycart'][$i][4] = $quantitynew;
                        break;
                    }
                }
                if ($check == 0) {
                    $spadd = [$id, $productName, $productImage, $productPrice, $quantity, $sumPrice,];
                    $_SESSION['mycart'][] = $spadd;
                    // var_dump($_SESSION['mycart']);
                }
            }
            include "site/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "site/cart/viewcart.php";
            break;
        case 'bill':
            include "site/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang'])) {
                if ($_POST['dongydathang']) {
                    if (isset($_SESSION['account'])) {
                        $accountId = $_SESSION['account']['id'];
                    } else $id = 0;
                    $accountName = $_POST['accountName'];
                    $accountAddress = $_POST['accountAddress'];
                    $accountPhone = $_POST['accountPhone'];
                    $accountEmail = $_POST['accountEmail'];
                    $pttt = $_POST['check'];
                    $sodonhang = tinhsoluong();
                    $tongdonhang = tongdonhang();
                    $orderDate = date('d/m/Y');


                    $idbill = insert_bill($accountId, $accountName, $accountAddress, $accountPhone, $accountEmail, $pttt, $tongdonhang, $orderDate, $sodonhang);

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_billdetail($cart[0], $idbill, $cart[4]);
                    }
                    // // xoá session cart
                    // $_SESSION['cart'] = [];
                }

                $bill = loadone_bill($idbill);
                $billct = loadall_billdeatil($idbill);
                include "site/cart/billconfirm.php";
                break;
            }
            if (isset($_POST['thanhtoanmomo'])) {
                if ($_POST['thanhtoanmomo']) {
                    if (isset($_SESSION['account'])) {
                        $accountId = $_SESSION['account']['id'];
                    } else $id = 0;
                    $accountName = $_POST['accountName'];
                    $accountAddress = $_POST['accountAddress'];
                    $accountPhone = $_POST['accountPhone'];
                    $accountEmail = $_POST['accountEmail'];
                    $pttt = $_POST['check'];
                    $sodonhang = tinhsoluong();
                    $tongdonhang = tongdonhang();
                    $orderDate = date('d/m/Y');


                    $idbill = insert_bill($accountId, $accountName, $accountAddress, $accountPhone, $accountEmail, $pttt, $tongdonhang, $orderDate, $sodonhang);

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_billdetail($cart[0], $idbill, $cart[4]);
                    }
                    // // xoá session cart
                    // $_SESSION['cart'] = [];
                }

                $bill = loadone_bill($idbill);
                $billct = loadall_billdeatil($idbill);
                include "site/cart/xulythanhtoanmomo_atm.php";
                break;
            }
            break;

        case 'mybill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadAll_bill($kyw, $_SESSION['account']['id']);
            include "site/cart/mybill.php";
            break;
        case 'show':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $showdh = Show_dh($_GET['id']);
            }

            include "site/cart/chitietbill.php";
            break;
    }
} else {
    include "site/home.php";
}
include "site/footer.php";
