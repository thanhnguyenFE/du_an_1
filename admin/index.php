<?php
include "../modal/pdo.php";
include "../modal/phim.php";
include "../modal/danhmuc.php";
include "header.php";
include "nav_bar.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'listphim':
            $listdanhmuc= loadall_danhmuc();
            $listsp = loadall_sanpham();
            include "phim/list.php";
        break;
    }
}
else{
    include 'home.php';
}
include 'footer.php';
?>