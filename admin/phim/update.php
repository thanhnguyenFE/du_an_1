<?php
if(is_array($movie)) {
    extract($movie);
    echo $category_id, $title, $description, $hinh;
    $hinhpath = "../upload/" . $image;
    if (is_file($hinhpath)) {
        $hinhpath = "<img src='" . $hinhpath . "' width='100px' height = '100px'>";
    } else {
        $hinhpath = "NO IMAGE";
    }
    if (isset($_POST['update']) && $_POST['update']) {
        $category_id = $_POST['iddm'];
        $title = $_POST['tensp'];
        $description = $_POST['mota'];
        if ($_FILES['hinh']['name'] == '') {
            $hinh = $image;
        } else {
            $hinh = $_FILES['hinh']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES['hinh']['name']);
            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
        }
        echo $category_id, $title, $description, $hinh;
//    update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm);
//    header('location: index.php?act=listsp');
    }
}
?>
<div class="flex-grow-1">
    <div class="">
        <h1>CẬP NHẬT LOẠI BỘ PHIM</h1>
    </div>
    <div class="">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Thể loại phim</label> <br>
                <select name="iddm" id="" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($listdanhmuc as $item){
                        extract($item);
                        if($iddm = $category_id){
                            echo "<option value='".$category_id."' selected>".$category_name."</option>";
                        }else{
                            echo "<option value='".$category_id."'>".$category_name."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tên bộ phim</label> <br>
                <input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" class="form-control" VALUE="<?=$title?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Hình ảnh</label> <br>
                <input type="file" name="hinh" class="form-control">
                <?php echo $hinhpath?>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả phim</label> <br>
                <input type="text" name="mota" placeholder="nhập vào mô tả sản phẩm" class="form-control" value="<?=$description?>" style='word-wrap:break-word; display: block'/>
            </div>
            <div class="mb-3">
                <input class="mr20" type="submit" value="UPDATE" name="update">
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listphim"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>