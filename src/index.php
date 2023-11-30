<?php 
include "../modal/pdo.php";
include '../modal/phim.php';
include '../modal/danhmuc.php';
include '../modal/lich_trinh.php';
include '../src/view/header.php';
$listdanhmuc = loadall_danhmuc();

if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case 'movie-detail':{
            if(isset($_GET['date'])){
                $date = $_GET['date'];
                $list_time = loadall_time_one_date($date);
            }
            if(isset($_GET['id-movie']) && ($_GET['id-movie'] > 0)){
                $id_movie = $_GET['id-movie'];
                $movie = load_movie_data($id_movie);
                $list_category = load_all_category_one_movie($id_movie);
                $schedule_of_movie = loadall_calendar_one_movie($id_movie);
                extract($movie);
                include 'view/movie_detail.php';
            }
        }
    }
}else{
    include "../src/view/home.php";
}
?>