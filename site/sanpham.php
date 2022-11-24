<div class="container-fluid">
    <div class="boxtitle">
        Sản Phẩm
    </div>
    <div class="col-12 col-sm-6 col-md-3 p-2 mb-4">
        <?php
            foreach($list_pro_cate as $pro){
                $id = $pro['id'];
                $productName = $pro['productName'];
                $productImage = "../upload" .$pro['productImage'];
                $productPrice = $pro['productPrice'];
                $link = "index.php?act=chitietsanpham&id=".$id;

                if(is_file($productImage)){
                    $productImage = '<img src = "'.$productImage.'">';
                }else {
                    $productImage = "";
                }
                echo '';
            }
        ?>
    </div>
</div>