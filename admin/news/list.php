<div class="col-xl-10">
                <hr>
                <h2 class="text-center">
                    Danh sách tin tức
                </h2>
                <table class="table mw-100">
                  <thead>
                      <tr>
                        <th scope="col">Mã tin</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Chi tiết</th>
                        <th scope="col">
                  <a href="index.php?act=addnews"><button type="button"  class="btn btn-primary" >Thêm mới</button></a> 

                        </th>
                      </tr>
                      </thead>
                   
                    <tbody>
                      <?php foreach($listnews as $news){
                        extract($news);
                        $suanews="index.php?act=suanews&id=".$id;
                        $xoanews="index.php?act=xoanews&id=".$id;
                        $hinhpath = "../uploads/".$news_image;
                        if(is_file($hinhpath)){
                            $news_image="<img src='".$hinhpath."' height='80'";
                        }else{
                            $news_image = "no photo";
                        }
                      echo'
                  <tr>
                      <td>'.$id.'</td>
                      <td>'.$news_title.'</td>
                      <td>'.$news_image.'</td>
                      <td>'.$news_desc.'</td>
                      <td>'.$news_detail.'</td>
                      
                      
                      <td><a href="'.$suanews.'"><input type="button" value="Sửa" class="btn btn-primary"></a>
                      <a href="'.$xoanews.'"> <input type="button" value="Xóa" class="btn btn-primary bg-danger"></a>
                      </td>
                    </tr>
                      ';
                      }
                      ?>
                     </tbody>
                  
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>