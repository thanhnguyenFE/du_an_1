<div class="w-full h-[250px] md:h-[300px] xl:h-[473px] relative wrapper">
    <div class="absolute inset-0 w-full h-full">
        <img src="../img/img.webp" alt="" class="object-cover w-full h-full">
    </div>
    <div class="absolute bg-primary/60 inset-0 w-full h-full z-10"></div>
    <div class="hidden xl:block absolute w-full inset-0 m-auto z-20">
        <div class="w-full max-w-4xl m-auto h-[473px] py-7 pt-24 flex gap-10">
            <div class="relative h-[333px] min-w-[238px] shadow-lg ">
                <img src="../img/img.webp" alt="" class="object-cover w-full h-full">
            </div>
            <div class="text-sm flex flex-col">
                <div class="flex items-center gap-2 mt-2 text-white">
                    <h3 class="font-bold text-2xl"><?= $title ?></h3>
                    <div class="rounded-xl p-2 border border-white font-bold">2D</div>
                </div>
                <div class="flex items-center mt-2 gap-5 text-sm text-white">
                    <p>
                        <?php
                        foreach ($list_category as $item){
                            extract($item);
                            echo $category_name.', ';
                        }
                        ?></p>
                    <p>Viet Nam</p>
                    <p>120 phút</p>
                </div>
                <p class="text-white">Đạo diễn: Trấn Thành</p>
                <p class="text-white">Diễn viên: Trấn Thành, Lê Giang, NSND Ngọc Giàu, Uyển Ân, Khả Như, NSND Việt Anh, NSUT Công Ninh, Ngân Quỳnh, Song Luân, Lê Dương Bảo Lâm, Lý Hạo Mạnh Quỳnh, Phương Lan, Hoàng Mèo,.</p>
                <p class="mt-5 line-clamp-4 text-white"><?= $description ?></p>
                <div class="text-red-500 mt-5 ">Khuyến cáo: T16: Phim được phổ biến đến khán giả từ đủ 16 tuổi trở lên;</div>
                <div class="mt-2 flex items-center gap-4 flex-1">
                    <button type="button" class="text-sm underline text-white">Chi tiết nội dung</button>
                    <button class="border border-yellow-500 rounded-full py-2 px-10 text-yellow-500 hover:scale-105" type="button">Xem trailer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full">
    <div class="flex h-[91px] justify-center bg-[#1A1D23]">
        <?php
        foreach ($schedule_of_movie as $item){
            extract($item);
            $result = getDayAndMonth($schedule_date);
            echo "
            <button class='focus:border-none focus:outline-none'>
            <a href='index.php?act=movie-detail&id-movie=$id_movie&date=$schedule_date' class='p-0'>
            <div class='w-[72px] h-full flex flex-col items-center justify-center text-xs transition-colors bg-red-600'>
                <p>Th.".$result['month']."</p>
                <p class='text-xl font-bold'>".$result['day']."</p>
                <p>".$result['dayOfWeek']."</p>
            </div>
            </a>
            </button>
            ";
        }
        ?>

    </div>
    <div class="text-sm text-center mb-4 md:px-6 lg:mx-auto mt-4 text-orange-500">
        <b>Lưu ý:</b>
        Khán giả dưới 13 tuổi chỉ chọn suất chiếu kết thúc trước 22h và Khán giả dưới 16 tuổi chỉ chọn suất chiếu kết thúc trước 23h.
    </div>
</div>
<?php
if(isset($_GET['date'])){
    foreach ($list_time as $item){
        extract($item);
        $result = convertToHourAndMinute($start_time);
        echo "<div class='bg-[#1A1D23]'>
                         <div class='mx-auto w-full max-w-4xl py-6 space-y-6 relative '>
                           <div class='grid grid-cols-5 gap-2 xl:gap-4 px-4 xl:px-0'>
                           <button class='flex items-center justify-center rounded-full text-sm font-medium border border-white hover:text-gray-300 hover:bg-orange-500 h-10 px-8 py-2'>
                             <a href='index.php?act=movie-detail&id-movie=$id_movie&date=$schedule_date&time=$start_time' class='font-bold text-sm text-orange-500' style='display: contents'>
                             <p>".$result['hour'].":".$result['minute']."</p>
                             </a>
                           </button>
                           </div>
                         </div>
                </div>";
    }
}
if(isset($_GET['time'])){
    $room = get_name_room($room_id);
    $list_seated = loadall_seated_room($schedule_id);
    $list_seated_numbers = array_column($list_seated, 'seat_number');
    extract($room);
    ?>
    <div class="mb-4 mt-4 text-center font-bold text-lg text-white">
        Phòng chiếu <?= $room_name?>
    </div>
    <div class="my-0 mx-auto h-full mb-4" style="width: 50%">
        <div class="grid grid-cols-5 grid-rows-5 justify-center gap-3">
            <?php
            $check = false;
            for ($i=1; $i<=25 ; $i++){
                if(in_array($i, $list_seated_numbers)){
                    echo '<div class=" text-white sm:rounded-sm flex items-center justify-center
                                h-10 cursor-pointer" style="background-color: #9ca3af; border-radius: 12px">
                                     <p class="lg:block text-sm lg:text-base">'.$i.'</p>
                                     </div> ';
                }else{
                    echo '
                                 <a href="index.php?act=payment&seat='.$i.'&id-movie='.$id_movie.'&date='.$schedule_date.'&time='.$start_time.'&id-room='.$room_id.'&id-schedule='.$schedule_id.'" class="p-0">
                                     <div class=" text-white sm:rounded-sm flex items-center justify-center
                                                 h-10 cursor-pointer" style="background-color: blue; border-radius: 12px">
                                         <p class="lg:block text-sm lg:text-base">'.$i.'</p>
                                     </div> 
                                 </a>
                                ';
                }
            }
            ?>
        </div>
    </div>
    <?php
}
?>
<div class="mx-auto max-w-7xl p-4 md:p-6 space-y-6 bg-[#1A1D23] mt-5 rounded-2xl text-sm md:text-base text-white">
    <h4 class="font-bold">ĐÁNH GIÁ SẢN PHẨM</h4>
    <div>
        <div class="mt-4 ring-1 ring-gray-700 sm:mx-0 rounded-xl">
            <table class="min-w-full divide-y divide-gray-600">
                <thead>
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Người bình luận</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Nội dung</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Thời gian</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_comment_of_movie as $item){
                    extract($item);
                    ?>
                    <tr>
                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                            <div class="font-medium text-white">
                                <?php echo $user_name?>
                            </div>
                        </td>
                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                            <div class="font-medium text-white">
                                <?php echo $comment?>
                            </div>
                        </td>
                        <td class="px-3 py-3.5 text-sm"><?php echo date("d/m/Y", strtotime($comment_date))?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
            <?php
            if(isset($_SESSION['user']) && $_SESSION['user']){
                echo '<div class="box_search">
                <form action="index.php?act=sanphamct&idsp='.$id.'" method="POST">
                    <input type="hidden" name="idpro" value="'.$id.'">
                    <input type="text" name="noidung" >
                    <input type="submit" name="guibinhluan" value="Gửi bình luận" placeholder="Hãy nhập gì đó .....">
                </form>
            </div>';
            }
            ?>
        </div>
    </div>
</div>
<!--<div class="bg-[#1A1D23] w-full max-w-4xl m-auto text-white p-4 rounded-xl">-->
<!--    <div class="text-orange-500">ĐÁNH GIÁ SẢN PHẨM</div>-->
<!--    <div class="w-full">-->
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr class="text-orange-500">-->
<!--                <th scope="col">Người bình luận</th>-->
<!--                <th scope="col">Nội dung</th>-->
<!--                <th scope="col">Thời gian</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php
//            foreach ($list_comment_of_movie as $item){
//                extract($item);
//                ?>
<!--                <tr class="text-white">-->
<!--                    <td class="scope='row'">--><?php //echo $user_name?><!--</td>-->
<!--                    <td>--><?php //echo $comment?><!--</td>-->
<!--                    <td>--><?php //echo date("d/m/Y", strtotime($comment_date))?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //}
//            ?>
<!--            </tbody>-->
<!--        </table>-->
<!--        --><?php
//        if(isset($_SESSION['user']) && $_SESSION['user']){
//            echo '<div class="box_search">
//                <form action="index.php?act=sanphamct&idsp='.$id.'" method="POST">
//                    <input type="hidden" name="idpro" value="'.$id.'">
//                    <input type="text" name="noidung" >
//                    <input type="submit" name="guibinhluan" value="Gửi bình luận" placeholder="Hãy nhập gì đó .....">
//                </form>
//            </div>';
//        }
//        ?>
<!--    </div>-->
<!--</div>-->






