<?php
function loadall_sanpham($iddm=0){
    $sql = "select * from movie join movie_category_movie on movie_category_movie.movie_id= movie.movie_id join category_movie on category_movie.category_id = movie_category_movie.category_id ";
    if($iddm>0){
        $sql.=" where category_movie.category_id='".$iddm."'";
    }
    $sql.="where 1 order by movie.movie_id desc";
    $listphim = pdo_query($sql);
    return $listphim;
}