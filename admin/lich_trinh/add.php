<div class="flex-grow-1">
    <div class="">
        <h1>THÊM LỊCH TRÌNH</h1>
    </div>
    <div class="">
        <form action="index.php?act=add-lichtrinh" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Chọn phim</label> <br>
                <select name="id_movie" id="" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($listsp as $item){
                        extract($item);
                        echo "<option value='".$movie_id."'>".$title."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Chọn phòng</label> <br>
                <select name="id_room" id="" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($list_room as $item){
                        extract($item);
                        echo "<option value='".$room_id."'>".$room_name."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Ngày chiếu</label> <br>
                <input type="date" name="ngaychieu" placeholder="ngày chiếu phim" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Giờ bắt đầu</label> <br>
                <input type="time" name="giobd" placeholder="Giờ bắt đầu chiếu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Giờ kết thúc</label> <br>
                <input type="time" name="giokt" placeholder="Giờ kết thúc chiếu" class="form-control">
            </div>
            <div class="mb-3">
                <input class="mr-3" type="submit" value="THÊM MỚI" name="themmoi">
                <input  class="mr-3" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=ds-lichtrinh"><input  class="mr-3" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($status) && $status){
                echo "<div style='background-color: royalblue; text-align: center; color: white; height: 30px; line-height: 30px; border-radius: 10px '>".$status."</div>";
            }
            ?>
        </form>
    </div>
</div>