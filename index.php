<?php
session_start();
include "dao/pdo.php";
include "dao/product_dao.php";
include "dao/category_dao.php";
include "dao/cart.php";
include "site/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$dsdm = loadAll_dm();
$spnew = loadall_product_home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "site/gioithieu.php";
            break;
        case 'lienhe':
            include "site/lienhe.php";
            break;
        case 'signIn':
            include "site/signIn.php";
            break;
        case 'sanphamct':
            if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
                $id = $_GET["idsp"];
                $pro_one = loadone_product($id);
                $dm_one = loadOne_dm($id);
                extract($pro_one);
                // extract($dm_one);
                $categoryid = $pro_one["categoryId"];
                $sp_cung_loai = load_product_cungloai($id, $categoryid);
                extract($sp_cung_loai);
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
                    $spadd = [$id, $productName, $productImage, $productPrice, $quantity, $sumPrice];
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
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) {
                    $accountId = $_SESSION['user']['id'];
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
                foreach ($_SESSION['mycart'] as $billdetail) {
                    insert_billdetail($idbill);
                }
                // // xoá session cart
                // $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_billdeatil($idbill);
            include "site/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadAll_bill($_SESSION['user']['id'], 0);
            include "site/cart/mybill.php";
            break;
        default:
            include "site/home.php";
            break;
    }
} else {
    include "site/home.php";
}
include "site/footer.php";
