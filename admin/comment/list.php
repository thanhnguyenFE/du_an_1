<div class="flex-grow-1">
    <div class="">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="">
        <div class="">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên phim</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tổng số bình luận</th>
                    <th scope="col">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_comment as $item){
                    extract($item);
                    echo '<tr>
                                       <th scope="row">'.$movie_id.'</th>
                                       <td>'.$title.'</td>
                                       <td>'.$image.'</td>
                                       <td>'.$total.'</td>
                                       <td>
                                       <button disabled>Sửa</button>
                                       <button disabled>Xóa</button>
                                       </td>
                                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>