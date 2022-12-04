<?php
extract($tk);

?>
<div class="col-xl-10">
    <hr>


    <div class="mb-3">

        <form action="index.php?act=updateAccount" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="">Vai tro</label> <br>
            <select name="accountRole" id="" required>
                <option value="0">0</option>
                <option value="1">1</option>

            </select>
    </div>

    <div class="mb-3">

        <input type="submit" class="btn btn-primary" name="capnhattaikhoan" value="Cập Nhật">

        <a href="index.php?act=dskh"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </div>

    </form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>