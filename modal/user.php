<?php
// Hiển thị tất cả khách hàng đã đăng kí
function loadall_user(){
    $sql = "select * from user where role = 0 order by user_id desc";
    $list_user = pdo_query($sql);
    return $list_user;
};