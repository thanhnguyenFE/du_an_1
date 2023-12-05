<?php
if (is_array($dm)){
    extract ($dm);
}
?>
<div class="flex-grow-1">
    <div class="">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="">
        <form action="index.php?act=update-category" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Tên danh mục</label> <br>
                <input type="text" name="tensp" value="<?= $category_name?>" placeholder="nhập vào tên sản phẩm" class="form-control">
                <input type="hidden" name="category_id" value="<?= $category_id?>">
            </div>
            <div class="mb-3">
                <input class="mr20" type="submit" value="CẬP NHẬT" name="capnhat">
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=list-category"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($status) && $status){
                echo "<div style='background-color: royalblue; text-align: center; color: white; height: 30px; line-height: 30px; border-radius: 10px '>".$status."</div>";
            }
            ?>
        </form>
    </div>
</div>