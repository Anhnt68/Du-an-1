<?php
include "../dao/pdo.php";
include "../dao/category_dao.php";
include "../dao/product_dao.php";
include "../dao/accounts.php";
include "../dao/cart.php";
include "../dao/statistical_dao.php";
include "../dao/news_dao.php";
include "header.php";
include "../dao/comment.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào add danh mục k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $anhloai = $_FILES['anhloai']['name'];
                $target_dir = "../uploads";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                $errors = [];
                if ($tenloai == "") {
                    $errors['tenloai'] = "Tên loại không được để trống";
                }
                if ($anhloai == "") {
                    $errors['anhloai'] = "Ảnh không được để trống";
                }

                if (!$errors) {
                    insert_dm($tenloai, $anhloai);
                    $thongbao = "them thành công";
                }
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
                $target_dir = "../uploads";
                $target_file = $target_dir . basename($_FILES["anhloai"]["name"]);
                update_dm($id, $tenloai, $anhloai);
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
                $quatity = $_POST['quatity'];
                $productImage = $_FILES['productImage']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
                if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                } else {
                }
                $errors = [];
                if ($productName == "") {
                    $errors['productName'] = "Tên sản phẩm không được để trống";
                }
                if ($productPrice == "") {
                    $errors['productPrice'] = "Giá không được để trống";
                }
                if ($productPrice < 0) {
                    $errors['productPrice'] = "Giá phải lớn hơn 0";
                }
                if ($productImage == "") {
                    $errors['productImage'] = "Ảnh không được để trống";
                }
                if ($productDesc == "") {
                    $errors['productDesc'] = "Mô tả không được để trống";
                }
                if ($quatity == "") {
                    $errors['quatity'] = "Số lượng không được để trống";
                }
                if ($quatity < 0) {
                    $errors['quatity'] = "Số lượng phải lớn hơn 0";
                }

                if (!$errors) {
                    insert_product($productName, $productPrice, $productImage, $productDesc, $quatity, $categoryid);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdm = loadAll_dm();
            include "product/addpro.php";
            break;

        case 'listpro':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $categoryid = $_POST['categoryid'];
            } else {
                $kyw = '';
                $categoryid = 0;
            }
            $listdm = loadAll_dm();
            $listproduct = loadall_product($kyw, $categoryid);
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
                $productImage = $_FILES['productImage']['name'];
                $quatity = $_POST['quatity'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
                if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_product($id, $categoryid, $productName, $productPrice, $productImage, $productDesc, $quatity);
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
                $billPttt = $_POST['billPttt'];
                $listbill = update_bill($id, $billStatus, $billPttt);
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

        case 'dsbl':
            $listbinhluan = loadall_comment(0);
            include "binhluan/list_binhluan.php";
            break;

        case 'xoabl';
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                delete_binhluan($_GET['idsp']);
            }

            $listbinhluan = loadall_comment(0);
            include "binhluan/list_binhluan.php";
            break;


        case 'suaAccount':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $tk = loadone_Account($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "accounts/updateRole.php";
            break;
        case 'updateAccount':
            if (isset($_POST['capnhattaikhoan']) && ($_POST['capnhattaikhoan'])) {
                $id = $_POST['id'];
                $accountRole = $_POST['accountRole'];
                $listAccount = update_account($id, $accountRole);
            }
            $listtaikhoan = loadall_taikhoan();
            include "accounts/list.php";

            break;
            // phần quản lý tin tứcccc
            case 'addnews':
                
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $news_title = $_POST['news_title'];
                    $news_desc = $_POST['news_desc'];
                    $news_detail = $_POST['news_detail'];
                    $news_image = $_FILES['news_image']['name'];
                    $target_dir = "../uploads";
                    $target_file = $target_dir . basename($_FILES["news_image"]["name"]);
                    $errors = [];
                    if ($news_title == "") {
                        $errors['news_title'] = "Tiêu đề không được để trống";
                    }
                    if ($news_image == "") {
                        $errors['news_image'] = "Ảnh không được để trống";
                    } if ($news_desc == "") {
                        $errors['news_desc'] = "Mô tả không được để trống";
                    } if ($news_detail == "") {
                        $errors['news_detail'] = "Chi tiết không được để trống";
                    }  
                    if (!$errors) {
                        insert_news($news_title,$news_desc,$news_detail,$news_image);
                        $thongbao = "them thành công";
                    }
                }
                include "news/add.php";
                break;
                case 'listnews':
                    $listnews = loadAll_news();
                    include "news/list.php";
                    break;
                    case 'xoanews':
                        if ($_GET['id'] && $_GET['id'] > 0) {
                            delete_news($_GET['id']);
                        }
                        $listnews = loadAll_news();
                        include "news/list.php";
                        break;
                        case 'suanews':
                            if ($_GET['id'] && $_GET['id'] > 0) {
                                $news = loadOne_news($_GET['id']);
                            }
                            $listnews = loadAll_news();
                            include "news/update.php";
                            break;
                            case 'updatenews':
                                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                    $id = $_POST['id'];
                                    $news_title = $_POST['news_title'];
                                    $news_desc = $_POST['news_desc'];
                                    $news_detail = $_POST['news_detail'];
                                    $news_image = $_FILES['news_image']['name'];
                                    $target_dir = "../uploads";
                                    $target_file = $target_dir . basename($_FILES["news_image"]["name"]);
                                    if (move_uploaded_file($_FILES["news_image"]["name"], $target_file)) {
                                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                    } else {
                                        //echo "Sorry, there was an error uploading your file.";
                                    }
                                    update_news($id,$news_title,$news_desc,$news_detail,$news_image);
                                    $thongbao = "Cập nhật thành công";
                                }
                                $listnews = loadAll_news();

                               
                                include "news/list.php";
                                break;
        default:
            include "home.php";
            break;
    }
}
include "home.php";
include "footer.php";
