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

function loadall_ticket_of_user($user_id){
    $sql = "select * from booking inner join ticket on booking.ticket_id = ticket.ticket_id 
    inner join schedules on schedules.schedule_id = ticket.schedule_id 
    inner join rooms on schedules.room_id = rooms.room_id
    JOIN movie on movie.movie_id = schedules.movie_id
         where `user_id` = $user_id";
    $result = pdo_query($sql);
    return $result;
}


