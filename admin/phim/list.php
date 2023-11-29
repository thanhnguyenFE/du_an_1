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
                        <th scope="col">TÊN LOẠI</th>
                        <th scope="col">MÔ TẢ</th>
                        <th scope="col">HÌNH</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($list_movie as $item){
                        extract($item);
                        $update="index.php?act=update&id-movie=".$movie_id;
                        $soft_delete="index.php?act=soft_delete&id-movie=".$movie_id;
                        $hinhpath="../upload/".$image;
                        if(is_file($hinhpath)){
                            $hinhpath = "<img src='".$hinhpath."' width='100px' height='100px'>";
                        }
                        else{
                            $hinhpath = "Not file img!";
                        }
                        echo '<tr>
                                       <th scope="row">'.$movie_id.'</th>
                                       <td>'.$title.'</td>
                                       <td>'.$description.'</td>
                                       <td>'.$hinhpath.'</td>
                                       <td>
                                         <a href="'.$soft_delete.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có muốn ẩn xóa sản phẩm này chứ?\')"></a>
                                       <a href="'.$update.'"><input type="button" value="Sửa"></a>
                                       </td>
                                </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="row mb10 ">
                <a href="index.php?act=add-phim"> <input  type="button" value="NHẬP THÊM"></a>
            </div>
    </div>
</div>
</div>