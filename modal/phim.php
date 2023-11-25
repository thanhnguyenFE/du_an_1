<?php
// Hiển thị tất cả sản phẩm

function loadall_sanpham($iddm=0){
    $sql = "select * from movie join movie_category_movie on movie_category_movie.movie_id= movie.movie_id join category_movie on category_movie.category_id = movie_category_movie.category_id where 1";
    if($iddm>0){
        $sql.=" and  ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listphim = pdo_query($sql);
    return $listphim;
}