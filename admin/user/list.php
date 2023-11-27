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
                    <th scope="col">Tên khách hàng</th>>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_user as $item){
                    extract($item);
                    echo '<tr>
                                       <th scope="row">'.$user_id.'</th>
                                       <td>'.$user_name.'</td>
                                       <td>'.$password.'</td>
                                       <td>'.$email.'</td>
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
            <a href="#"> <input  class="mr20" type="button" value="Phân quyền"></a>
        </div>
    </div>
</div>
</div>