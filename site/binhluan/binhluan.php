<?php
session_start();
include "../../dao/pdo.php";
include "../../dao/comment.php";


if (isset($_SESSION['account']['id']) && $_SESSION['account']['id'] > 0) {

    // print_r($_SESSION);
    if ($_SESSION['account']['accountName'] && $_SESSION['account']['accountName'] != '') {
        $accountName = $_SESSION['account']['accountName'];
    } else {
        $accountName = "";
    }
    // if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
    //     $id = $_GET["idsp"];


    // }

    // echo $id;

    if (isset($_POST['guibl']) && ($_POST['guibl'])) {
        $accountId = $_SESSION['account']['id'];
        $accountName = $_SESSION['account']['accountName'];
        $commentDate = date('G:i:s A d/m/Y');
     
        
        $productId = $_POST['productId'];
        if(empty($content)){
           $content = $_POST['content']; 
        }
        insert_comments($content, $productId, $accountId, $accountName, $commentDate);
        header("location:" . $_SERVER['HTTP_REFERER']);
    }

    $dsbl = loadall_comment($_GET["idsp"]);

?>
    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="boxcontent2 binhluan">
        <table border="1">
            <tr>
                <th>Ten khach hang</th>
                <th>Noi dung</th>
                <th>Ngày bình luận</th>

            </tr>
            <?php
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '<tr><td>' . $accountName . '</td>';
        echo '<td>' . $content . '</td>';
        echo '<td>' . $commentDate . '</td></tr>';
    }
            ?>
        </table>
    </div>
    <form action="binhluan.php" method="post">

        <input type="text" name="content" required class="noidung">
        <input type="hidden" name="productId" value="<?= $_GET['idsp'] ?>">
        <input type="hidden" name="accountId" id="" value="<?= $accountId ?>">
        <input type="hidden" name="accountName" id="" value="<?= $accountName ?>">
        <input type="hidden" name="commentDate" value="<?= $commentDate ?>">
        <input type="submit" name="guibl" class="guibinhluan" value="Gui">
    </form>

    </body>

    </html>
<?php } else {
    $link = 'http://localhost/du-an-1/index.php?act=dangnhap';
    echo "<a href='$link' target='_parent'>Vui long dang nhap</a>";
} ?>
<?php $dsbl = loadall_comment($_GET["idsp"]); ?>