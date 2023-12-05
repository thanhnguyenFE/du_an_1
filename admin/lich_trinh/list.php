<div class="flex-grow-1">
    <div class="">
        <h1>Lịch trình chiếu phim</h1>
    </div>
    <div class="">
        <div class="">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TÊN phim</th>
                    <th scope="col">Phòng chiếu</th>
                    <th scope="col">ngày chiếu</th>
                    <th scope="col">giờ bắt đầu</th>
                    <th scope="col">giờ kết thúc</th>
                    <th scope="col">chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_schedule as $item){
                   
                    extract($item);
                    $update="index.php?act=edit-lichtrinh&schedule_id=$schedule_id";
                    echo '<tr>
                                       <th scope="row">'.$schedule_id.'</th>
                                       <td>'.$title.'</td>
                                       <td>'.$room_name.'</td>
                                       <td>'.$schedule_date.'</td>
                                       <td>'.$start_time.'</td>
                                       <td>'.$end_time.'</td>
                                       <td>
                                       <a href="'.$update.'"><input type="button" value="Sửa"></a>
                                       <button disabled>Xóa</button>
                                       </td>
                                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="row mb10 ">
            <a href="index.php?act=add-lichtrinh"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>
</div>