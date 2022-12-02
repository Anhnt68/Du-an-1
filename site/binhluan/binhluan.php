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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <!-- binh luan -->
    <?php
    $link = './uploads/';
    $img = $_SESSION['account']['accountImage'];
    $imageLink = $link . $img;
    ?>
   
    <?php
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '
        <div class="d-flex row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle"
                            src="'.$imageLink.'" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span
                                class="d-block font-weight-bold name">'.$accountName.'</span><span
                                class="date text-black-50">'.$commentDate.'</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">'.$content.'</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
        
        
        ';
    }
    ?>
     <form action="binhluan.php" method="post" class="d-flex">

       
<div class=""><img class="rounded-circle" src="<?=$imageLink?>" width="40">


</div>
<input type="image" src="<?= $imageLink ?>" alt="">
<textarea class="form-control ml-1 shadow-none textarea" name="content" required ></textarea>
<!-- <input type="text" name="content" required class="noidung"> -->
<input type="hidden" name="productId" value="<?= $_GET['idsp'] ?>">
<input type="hidden" name="accountId" id="" value="<?= $accountId ?>">
<input type="hidden" name="accountName" id="" value="<?= $accountName ?>">
<input type="hidden" name="commentDate" value="<?= $commentDate ?>">
<input type="submit" name="guibl" class="guibinhluan btn btn-danger" value="Gui">
</form>
    <!-- end bl -->
    <!-- <div class="boxcontent2 binhluan">
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
    </div> -->

    

</body>

</html>
<?php } else {
    $link = 'http://localhost/du-an-1/index.php?act=dangnhap';
    echo "<a href='$link' target='_parent'>Vui long dang nhap</a>";
} ?>
<?php $dsbl = loadall_comment($_GET["idsp"]); ?>