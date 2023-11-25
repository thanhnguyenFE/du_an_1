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
                        <th scope="col">GIÁ SẢN PHẨM</th>
                        <th scope="col">HÌNH</th>
                        <th scope="col">THỜI LƯỢNG</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listsp as $item){
                        extract($item);
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
                                       <td>'.$image.'</td>
                                       <td>'.$duration.'</td>
                          
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