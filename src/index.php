<?php 
include "../modal/pdo.php";
if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case 'movie-detail':{
            include "../src/movie-detail.html";
            break;
        }
    }
}else{
    include "../src/home.html";
}
?>