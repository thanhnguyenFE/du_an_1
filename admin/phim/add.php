<div class="flex-grow-1">
    <div class="">
        <h1>THÊM MỚI PHIM</h1>
    </div>
    <div class="">
        <form action="index.php?act=add-phim" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Thể loại phim</label> <br>
                <select name="iddm" id="" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($listdanhmuc as $item){
                        extract($item);
                        echo "<option value='".$category_id."'>".$category_name."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tên bộ phim</label> <br>
                <input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Hình ảnh</label> <br>
                <input type="file" name="hinh" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả phim</label> <br>
                <textarea type="text" name="mota" placeholder="nhập vào mô tả sản phẩm" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <input class="mr20" type="submit" value="THÊM MỚI" name="submit_add">
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listphim"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>