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
        case 'add-category':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $category_name = $_POST['tensp'];
                $sql = "INSERT INTO category_movie(category_name) values('$category_name')";
    pdo_execute($sql);
            }
            include 'the_loai/add.php';
           break;
        case 'edit-category':
            if(isset($_GET['category_id'])&&($_GET['category_id'] >0)){
                $dm=loadone_category($_GET['category_id']);   
            }        
            include 'the_loai/update.php';
            break;
            case 'update-category':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'] )){
                    $category_name = $_POST['tensp'];   
                    $category_id = $_POST['category_id']; 
                    update_category($category_id,$category_name);
                }       $listdanhmuc = loadall_danhmuc();   
                include 'the_loai/list.php';
                break;
        case 'user':
            include 'user/list.php';
            break;
        // case 'lich-chieu':
        //     $list_schedule = loadall_schedules();
        //     if(isset($_GET['add']) && $_GET['add'] = true){
        //         include 'lich_trinh/add.php';
        //     }else{
        //         include 'lich_trinh/list.php';
        //     }
        //     break;
        case 'add-lichtrinh':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
               
                $schedule_date = $_POST['ngaychieu'];
                $start_time = $_POST['giobd'];
                $end_time = $_POST['giokt'];
              $movie_id = $_POST['id_movie'];
              $room_id = $_POST['id_room'];
              add_schedule($room_id, $movie_id,$schedule_date, $start_time, $end_time);
            }
            include "lich_trinh/add.php";
            break;
            case 'ds-lichtrinh':
                $list_schedule=loadall_schedules();
                
                include "lich_trinh/list.php";
                break;
            case 'edit-lichtrinh':
                    if(isset($_GET['schedule_id'])&&($_GET['schedule_id']>0)){
                        $dm_lichtrinh=loadall_calendar_one_movie($_GET['schedule_id']); 
                        $data = load_infor_ticket($_GET['schedule_id']);
                        
                        extract($data);
                          
                    }  
                    $list_schedule=loadall_schedules();   
                    $list_room = load_all_room();  
                    $listsp = loadall_movie(); 
                   
                    include 'lich_trinh/update.php';
                    break;
            case 'update-lichtrinh':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $schedule_id=$_POST['schedule_id'];
                    $schedule_date = $_POST['ngaychieu'];
                    $start_time = $_POST['giobd'];
                    $end_time = $_POST['giokt'];
                  $iddm = $_POST['id_movie'];
                  $room_id = $_POST['id_room'];
                 update_schedule($room_id, $iddm,$schedule_date, $start_time, $end_time,$schedule_id);
                 var_dump($room_id, $iddm,$schedule_date, $start_time, $end_time,$schedule_id);
                    
                }
            
             $list_room=load_all_room();
             $listsp=loadall_movie();
                include "lich_trinh/list.php";
                break;
            
        case 'comment':
            $list_comment = loadall_comment();
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