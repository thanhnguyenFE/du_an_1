<div class="flex-grow-1">
    <div class="">
        <h1>THÊM DANH MỤC</h1>
    </div>
    <div class="">
        <form action="../index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Tên danh mục</label> <br>
                <input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" class="form-control">
            </div>
            <div class="mb-3">
                <input class="mr20" type="submit" value="THÊM MỚI" name="themmoi">
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="../index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($status) && $status){
                echo "<div style='background-color: royalblue; text-align: center; color: white; height: 30px; line-height: 30px; border-radius: 10px '>".$status."</div>";
            }
            ?>
        </form>
    </div>
</div>