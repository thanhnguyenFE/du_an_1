<?php
include "../modal/pdo.php";
include "../modal/phim.php";
include "../modal/danhmuc.php";
include "../modal/lich_trinh.php";
include "../modal/room.php";
include "../modal/user.php";
include "../modal/comment.php";
$listdanhmuc= loadall_danhmuc();
$listsp = loadall_movie();
$list_user=loadall_user();
$list_room = load_all_room();


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
                $list_movie = loadall_movie();
            }
            include "phim/list.php";
            break;
        case 'add-phim':
            if(isset($_POST['submit_add']) && $_POST['submit_add']){
                $category_id = $_POST['iddm'];
                $title = $_POST['tensp'];
                $description = $_POST['mota'];
                $image = $_FILES['hinh']['name'];
                $target_dir= "../upload/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    insert_movie($title, $description, $image, $category_id);
                    $status = "Thêm mới sản phẩm thành công!";
                    header("location: index.php?act=listphim");
                }
                else{
                    echo "Thêm mới sản phẩm thất bại!";
                }
            }
            include "phim/add.php";
            break;
        case 'list-category':
            $listdanhmuc = loadall_danhmuc();
            include 'the_loai/list.php';
            break;
        case 'update-category':
            include 'the_loai/add.php';
            break;
        case 'user':
            include 'user/list.php';
            break;
        case 'lich-chieu':
            $list_schedule = loadall_schedules();
            if(isset($_GET['add']) && $_GET['add'] = true){
                include 'lich_trinh/add.php';
            }else{
                include 'lich_trinh/list.php';
            }
            break;
        case 'comment':
            $list_comment = loadalll_comment();
            if(isset($_GET['thongke']) && $_GET['thongke'] = true){
                include 'comment/thong_ke.php';
            }else{
                include 'comment/list.php';
            }
            break;
        case 'update':
            if(isset($_GET['id-movie']) && ($_GET['id-movie'] > 0)){
                $id_movie = $_GET['id-movie'];
                $movie = load_one_movie($id_movie);
                var_dump($movie);
                include 'phim/update.php';
            }
            break;
        case 'soft_delete':
            if(isset($_GET['id-movie'])  && ($_GET['id-movie'] > 0)){
                soft_delete($_GET['id-movie']);
            }
            $list_movie = loadall_movie();
            include "phim/list.php";
            break;
    }
}
else{
    include 'home.php';
}
include 'footer.php';
?>