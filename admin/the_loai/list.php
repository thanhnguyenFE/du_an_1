<div class="flex-grow-1">
    <div class="">
        <h1>THỂ LOẠI PHIM</h1>
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
                    $update="index.php?act=edit-category&category_id=".$category_id;
                    echo '<tr>
                                       <th scope="row">'.$category_id.'</th>
                                       <td>'.$category_name.'</td>
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
            <a href="index.php?act=add-category"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>
</div>