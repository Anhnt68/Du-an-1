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

        case 'sanphamct':
            if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
                $id = $_GET["idsp"];
                $pro_one = loadone_product($id);
                extract($pro_one);
                $categoryid =$pro_one["categoryId"];
                $sp_cung_loai = load_product_cungloai($id, $categoryid);
                extract($sp_cung_loai);
            }

            include "site/chitietsanpham.php";
            break;

        default:
            include "site/home.php";
            break;
    }
} else {
    include "site/home.php";
}
include "site/footer.php";
