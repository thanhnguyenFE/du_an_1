<?php 
include "../modal/pdo.php";
include '../modal/phim.php';
include '../modal/danhmuc.php';
// include '../src/header.html';
include '../src/view/header.php';
$listdanhmuc = loadall_danhmuc();
// print_r ($phimnew);

if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case 'movie-detail':{
            include "../src/movie-detail.html";
            break;
        }
    }
}else{
    include "../src/view/home.php";
}
?>