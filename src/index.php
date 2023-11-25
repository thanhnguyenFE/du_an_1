<?php 
include "../modal/pdo.php";
include '../modal/phim.php';
include '../src/header.html';
$phimnew=loadall_sanpham();
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