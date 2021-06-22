<?php
include_once 'config.php';
$posts= mysqli_query($conn,'SELECT * FROM posts');
$posts_data= mysqli_fetch_all($posts,MYSQLI_ASSOC);



$json_posts= json_encode($posts_data);
echo $json_posts;
?>