<?php
function loadalll_comment(){
    $sql='select movie.movie_id, movie.title, movie.image, count(comment.comment_id) as total 
            from movie join comment on movie.movie_id = comment.movie_id 
            where 1
            group by movie.movie_id
            order by movie.movie_id desc';
    $result = pdo_query($sql);
    return $result;
}