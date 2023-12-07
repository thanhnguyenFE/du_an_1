<?php
session_start();
// Hiển thị tất cả khách hàng đã đăng kí
function loadall_user(){
    $sql = "select * from user where role = 0 order by user_id desc";
    $list_user = pdo_query($sql);
    return $list_user;
};

function insert_user($user, $pass, $email){
    $sql = "INSERT INTO user (user_name,password,email) VALUE('$user','$pass','$email') ";
    pdo_execute($sql);
    return true;
}

function check_user_login($pass, $email){
    $sql = "SELECT * FROM user WHERE password = '" . $pass . "' AND email = '" . $email . "' ";
    $taikhoan = pdo_query_one($sql);
    if($taikhoan){
        extract($taikhoan);
    }
    if($taikhoan != false){
        $_SESSION['user'] = $user_name;
        $_SESSION['role'] = $role;
        $_SESSION['id'] = $user_id;
        $_SESSION['pass'] = $pass;
        $_SESSION['email'] =$email;
        return true;
    }
    else{
        return false;
    }
}

function logout(){
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}