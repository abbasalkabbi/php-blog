<?php
// check if admin
session_start();
if(!$_SESSION['id']){
    //if not you admin 
    // go to page sigin
    header("location: index.php");
  
}
include_once '../php/config.php';
if(isset($_POST['newpost'])){
  $title= $_POST['title'];
  $content= $_POST['content'];
  if(!empty($title) && !empty($content)){
    $time = time();
    $data=(date("Y-m-d",$time));

    $sql = mysqli_query($conn,"INSERT INTO posts (title,content,time) VALUE ('{$title}','{$content}','{$data}')");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!---icon-->
    <link rel="shortcut icon"
        href="https://avatars.githubusercontent.com/u/75854041?s=400&u=90b20128e869c2beecfae59da0fdd56d959b5893&v=4"
        type="image/x-icon" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!--- new post -->
        <!-- header (New Post)-->
        <div class="form-floating mb-3 mt-3 p-3 mb-2 bg-primary text-white shadow">
            <h1 class="text-center">New Post</h1>
        </div>
        <!--END header (New Post)-->
        <form action="" method="POST">
            <div class="mb-3">
                <!---title-->
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" />
            </div>
            <div class="mb-3">
                <!---context-->
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="newpost">
                New Post
            </button>
        </form>
    </div>
    <script src="../js/bootstrap.js">
    </script>
</body>

</html>