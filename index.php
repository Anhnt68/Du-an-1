<?php
include "dao/pdo.php";
include "dao/product_dao.php";
include "dao/category_dao.php";
include "site/header.php";
include "global.php";


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
        default:
            include "site/home.php";
            break;
    }
} else {
    include "site/home.php";
}
include "site/footer.php";
