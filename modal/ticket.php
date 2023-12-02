<?php
function insert_ticket($schedule_id, $seat, $price){
    $sql = "INSERT INTO `ticket`(`schedule_id`, `seat_number`, `price`) VALUES ('$schedule_id','$seat','$price')";
    pdo_execute($sql);
}

function load_ticket_where($schedule_id, $seat){
    $sql = "select * from ticket where `schedule_id` = $schedule_id and `seat_number` = $seat";
    $result = pdo_query_one($sql);
    return $result;
}

function post_table_booking($user_id, $ticket_id, $booking_time, $booking_date){
    $sql = "INSERT INTO `booking`(`user_id`, `ticket_id`, `booking_time`, `booking_date`) VALUES ('$user_id','$ticket_id','$booking_time','$booking_date')";
    pdo_execute($sql);
}

function loadall_booking(){
    $sql = 'select * from booking where 1';
    $result = pdo_query($sql);
    return $result;
}

function loadall_seated_room($schedule_id){
    $sql = "select * from ticket where `schedule_id` = $schedule_id";
    $result= pdo_query($sql);
    return $result;
}


