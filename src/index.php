<?php 
include "../modal/pdo.php";
include '../modal/phim.php';
include '../modal/danhmuc.php';
// include '../src/header.html';
include '../src/view/header.php';
// include '../src/view/chitietphim.php';
$listdanhmuc = loadall_danhmuc();
// print_r ($phimnew);

if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case "listphim":
            $listphim = loadall_moive();
            include "view/home.php";
            break;
        case "chitietphim":
            if(isset($_GET['id_movie']) && $_GET['id_movie'] >0){
                $sp = loadone_movie($_GET['id_movie']);
                $sp_category = load_all_category_one_movie($_GET['id_movie']);
               
            }
            $listphim = loadall_moive();
              include "view/chitietphim.php";
                break;
        case 'movie-detail':{
           
        } include "../src/movie-detail.html";
            break;
    }
}else{
   // include "../src/view/home.php";
  
}
?>