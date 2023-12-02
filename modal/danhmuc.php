<?php
function loadall_danhmuc(){
    $sql = "select * from category_movie order by category_id desc ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function insert_category($category_name){
    $sql = "INSERT INTO category_movie(category_name) values('$category_name')";
    pdo_execute($sql);

}
function loadone_category($category_id){
    $sql = "SELECT* FROM category_movie where category_id =".$category_id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_category($category_id,$category_name){
    $sql = "UPDATE category_movie SET category_name = '".$category_name."' WHERE category_id = ".$category_id;
    pdo_execute($sql);
}