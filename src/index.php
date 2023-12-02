<?php 
include "../modal/pdo.php";
include '../modal/phim.php';
include '../modal/danhmuc.php';
include '../modal/lich_trinh.php';
include '../modal/room.php';
include '../modal/comment.php';
include '../modal/ticket.php';
include '../src/view/header.php';
$listphim = loadall_movie();
$listdanhmuc = loadall_danhmuc();
$list_comment =load_list_comment();
$list_bill = loadall_booking();
if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case "chitietphim":
            if(isset($_GET['id_movie']) && $_GET['id_movie'] >0){
                $sp = loadone_movie($_GET['id_movie']);
                $sp_category = load_all_category_one_movie($_GET['id_movie']);
            }
            $listphim = loadall_movie();
              include "view/chitietphim.php";
                break;
        case 'movie-detail':{
            if(isset($_GET['id-movie']) && ($_GET['id-movie'] > 0)){
                $id_movie = $_GET['id-movie'];
                $movie = load_movie_data($id_movie);
                $list_category = load_all_category_one_movie($id_movie);
                $schedule_of_movie = loadall_calendar_one_movie($id_movie);
                $list_comment_of_movie = load_list_comment_of_movie($id_movie);
                extract($movie);
            }
            if(isset($_GET['date'])){
                $date = $_GET['date'];
                $list_time = loadall_time_one_date($date);
            }
//            if(isset($_GET['time'])){
//
//            }
            include 'view/movie_detail.php';
            break;
        }
        case 'payment':
            if(isset($_GET['seat'], $_GET['id-movie'], $_GET['date'], $_GET['time'], $_GET['id-room'], $_GET['id-schedule'])){
                $id_movie = $_GET['id-movie'];
                $date =$_GET['date'];
                $id_schedule = (int)$_GET['id-schedule'];
                $convertedDate = convertDateFormat($date);
                $time = $_GET['time'];
                $convertedTime = convertToHourAndMinute($time);
                $id_room = $_GET['id-room'];
                $seat = (int)$_GET['seat'];
                $room = get_name_room($id_room);
                $movie = loadone_movie($id_movie);
                extract($room);
                extract($movie);
                switch ($seat){
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                    case 10:
                    case 21:
                    case 22:
                    case 23:
                    case 24:
                    case 25:{
                        $price = '60.000đ';
                        break;
                    }
                    default:{
                      $price = '80.000đ';
                     }
                }
                include 'view/payment.php';
            }
    }
}else{
   include "../src/view/home.php";

}
include "../src/view/footer.php";
?>