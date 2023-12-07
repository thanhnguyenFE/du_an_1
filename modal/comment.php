<?php
function loadall_comment(){
    $sql='select movie.movie_id, movie.title, movie.image, count(comment.comment_id) as total 
            from movie join comment on movie.movie_id = comment.movie_id 
            where 1
            group by movie.movie_id
            order by movie.movie_id desc';
    $result = pdo_query($sql);
    return $result;
}

function load_list_comment(){
    $sql = 'select * from comment join user on user.user_id = comment.user_id';
    $result = pdo_query($sql);
    return $result;
}

function load_list_comment_of_movie($id_movie){
    $sql = 'select * from comment join user on user.user_id = comment.user_id where comment.movie_id='.$id_movie.'';
    $result = pdo_query($sql);
    return $result;
}

function insert_binhluan($user_id, $movie_id, $comment){
    $date = date('Y-m-d');
    $sql = "INSERT INTO `comment`(`comment`, `user_id`, `movie_id`, `comment_date`) 
            VALUES ('$comment','$user_id','$movie_id','$date')";
    pdo_execute($sql);
}