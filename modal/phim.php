<?php
// Hiển thị tất cả sản phẩm

function loadall_moive(){
    $sql = "select * from movie where 1 order by movie_id desc";
    $listphim = pdo_query($sql);
    return $listphim;
};
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
