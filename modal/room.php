<?php
//HIểm thị all phòng chiếu
function load_all_room(){
    $sql = "select * from rooms where 1 order by room_id desc";
    $list_room = pdo_query($sql);
    return $list_room;
};

function get_name_room($id_room){
    $sql = "select * from rooms where `room_id` = $id_room";
    $result = pdo_query_one($sql);
    return $result;
}