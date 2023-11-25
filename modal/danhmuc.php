<?php
function loadall_danhmuc(){
    $sql = "select * from category_movie order by category_id desc ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}