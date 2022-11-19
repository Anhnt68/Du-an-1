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
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $productName = $_POST['productName'];
                $productImage = $_POST['productImage'];
                $productPrice = $_POST['productPrice'];
                $quantity = 1;
                $sumPrice = $productPrice * $quantity;
                $spadd = [$id, $productName, $productImage, $productPrice, $quantity, $sumPrice];
                array_push($_SESSION['mycart'], $spadd);
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
        default:
            include "site/home.php";
            break;
    }
} else {
    include "site/home.php";
}
include "site/footer.php";
