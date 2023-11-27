<div class="flex-grow-1">
    <div class="">
        <h1>DANH SÁCH PHIM</h1>
    </div>
    <div class="">
        <div class="">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TÊN LOẠI</th>>
                    <th scope="col">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listdanhmuc as $item){
                    extract($item);
                    echo '<tr>
                                       <th scope="row">'.$category_id.'</th>
                                       <td>'.$category_name.'</td>
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
        <div class="row mb10 ">
            <a href="#"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>
</div>