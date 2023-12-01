<?php
//Hiển thị tất cả các lịch chiếu

function loadall_schedules(){
    $sql = "SELECT schedule_id, schedule_date, start_time, end_time ,movie.title, rooms.room_name from schedules inner JOIN movie on movie.movie_id = schedules.movie_id INNER JOIN rooms ON rooms.room_id = schedules.room_id  where 1 order by schedules.schedule_id desc";
    $list_schedule = pdo_query($sql);
    return $list_schedule;
}

//Hiển thị lịch trình của 1 bộ phim

function loadall_calendar_one_movie($id_movie){
    $sql = "select * from schedules where `movie_id` = $id_movie";
    $result = pdo_query($sql);
    return $result;
};

function loadall_time_one_date($date){
    $sql = "select * from schedules where `schedule_date` = '$date'";
    $result = pdo_query($sql);
    return $result;
}

function getDayAndMonth($dateString) {
    // Chuyển đổi chuỗi ngày tháng sang đối tượng DateTime
    $date = new DateTime($dateString);

    // Lấy ngày trong tháng
    $day = $date->format('d');

    // Lấy tháng
    $month = $date->format('m');

    // Lấy thứ của ngày
    $dayOfWeek = $date->format('l');

    // Chuyển đổi số thứ trong tuần sang tên thứ tiếng Việt
    switch ($dayOfWeek) {
        case 'Monday':
            $dayOfWeek = 'Thứ 2';
            break;
        case 'Tuesday':
            $dayOfWeek = 'Thứ 3';
            break;
        case 'Wednesday':
            $dayOfWeek = 'Thứ 4';
            break;
        case 'Thursday':
            $dayOfWeek = 'Thứ 5';
            break;
        case 'Friday':
            $dayOfWeek = 'Thứ 6';
            break;
        case 'Saturday':
            $dayOfWeek = 'Thứ 7';
            break;
        case 'Sunday':
            $dayOfWeek = 'Chủ Nhật';
            break;
    }

    // Trả về kết quả dưới dạng một mảng chứa ngày và thứ
    return array(
        'day' => $day,
        'month' => $month,
        'dayOfWeek' => $dayOfWeek
    );
};

function convertToHourAndMinute($timeString) {
    // Sử dụng hàm explode để tách giờ, phút và giây từ chuỗi
    $timeArray = explode(':', $timeString);

    // Lấy giờ từ mảng
    $hour = isset($timeArray[0]) ? (int)$timeArray[0] : 0;

    // Lấy phút từ mảng
    $minute = isset($timeArray[1]) ? (int)$timeArray[1] : 0;

    // Trả về kết quả dưới dạng một mảng chứa giờ và phút
    return array(
        'hour' => $hour,
        'minute' => $minute
    );
}

function convertDateFormat($inputDate) {
    // Chuyển đổi định dạng ngày
    $formattedDate = date("d/m/Y", strtotime($inputDate));
    return $formattedDate;
}

function load_infor_ticket($id_schedule){
    $sql = "select * from schedules where `schedule_id` = $id_schedule";
    $result = pdo_query_one($sql);
    return $result;
}
