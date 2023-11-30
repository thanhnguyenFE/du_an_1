<?php
// Hiển thị tất cả sản phẩm

function loadall_movie(){
    $sql = "select * from movie where status = 0 order by movie_id desc";
    $listphim = pdo_query($sql);
    return $listphim;
}
//Hiển thị tất cả thể loại của 1 phim
function load_all_category_one_movie($id_moive){
    $sql = " SELECT * FROM category_movie INNER JOIN movie_category_movie ON movie_category_movie.category_id = category_movie.category_id WHERE movie_category_movie.movie_id = '.$id_moive.'";
    $list_category= pdo_query($sql);
    return $list_category;
}
//Hiển thị tất cả bộ phim của 1 thể loại
function load_all_movie_one_category($id_category){
    $sql = "SELECT * FROM movie INNER JOIN movie_category_movie ON movie.movie_id = movie_category_movie.movie_id WHERE movie_category_movie.category_id = '.$id_category.'";
    $list_movie = pdo_query($sql);
    return $list_movie;
}

function loadone_movie($movie_id){
    $sql = "SELECT * FROM movie where movie_id = $movie_id";
  $result = pdo_query_one($sql);
  return $result;
}

function load_one_movie($id_movie){
    $sql = "select * from movie inner join movie_category_movie ON movie.movie_id = movie_category_movie.movie_id where movie.movie_id = '.$id_movie.'";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_movie($title, $description,$image, $category_id){
    $sql = "insert into `movie` (`title`, `description`, `image`) values
            ('$title', '$description', '$image')";

    $movie_id = get_movie_follow_title($title);
    echo var_dump($movie_id);
    $sql2 = "insert into `movie_category_movie` (`movie_id`, `category_id`) values
            ('$movie_id', '$category_id')";
    pdo_execute($sql);
    pdo_execute($sql2);
}


// LÂSY PHIM THEO TÊN PHIM

function get_movie_follow_title($title)
{
    $sql1 = "SELECT movie_id FROM movie WHERE title ='.$title.'";
    $result = pdo_query_one($sql1);
    if (is_array($result)) {
        return $result['movie_id'];
    }else{
        echo "error";
    }
}

function soft_delete($id){
    $sql = "update `movie` set `status`= 1 where `movie`.`movie_id`=$id";
    pdo_execute($sql);
}

function load_movie_data($id_movie){
    $sql = "select * from movie where `movie_id` = $id_movie";
    $result = pdo_query_one($sql);
    return $result;
}

