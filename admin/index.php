<?php
include "../modal/pdo.php";
include "../modal/phim.php";
include "../modal/danhmuc.php";
include "../modal/user.php";
$listdanhmuc= loadall_danhmuc();
$listsp = loadall_moive();
$list_user=loadall_user();


include "header.php";
include "nav_bar.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'listphim':
            if(isset($_GET['iddm'])){
                $id_category = $_GET['iddm'];
                $list_movie=load_all_movie_one_category($id_category);
            }else{
                $list_movie = loadall_moive();
            }

            include "phim/list.php";
            break;
        case 'add-phim':
            include "phim/add.php";
            break;
        case 'list-category':
            include 'the_loai/list.php';
            break;
        case 'update-category':
            include 'the_loai/add.php';
            break;
        case 'user':
            include 'user/list.php';
            break;
    }
}
else{
    include 'home.php';
}
include 'footer.php';
?>