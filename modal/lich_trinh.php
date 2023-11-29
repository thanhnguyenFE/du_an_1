<?php
//Hiển thị tất cả các lịch chiếu

function loadall_schedules(){
    $sql = "SELECT schedule_id, schedule_date, start_time, end_time ,movie.title, rooms.room_name from schedules inner JOIN movie on movie.movie_id = schedules.movie_id INNER JOIN rooms ON rooms.room_id = schedules.room_id  where 1 order by schedules.schedule_id desc";
    $list_schedule = pdo_query($sql);
    return $list_schedule;
}