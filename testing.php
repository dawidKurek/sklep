<?php

$search='Samsung Galaxy s9+';
$search_low_str=strtolower($search);
$search_explode=explode(' ', $search_low_str);

$search_query="SELECT * FROM posters";

foreach($search_explode as $word){

   $like_query_list[]=" title LIKE '%$word%' ";
}

$like_query=implode(' OR ', $like_query_list);

$search_query.=" WHERE $like_query";