<?php
// check if admin
session_start();
if(!$_SESSION['id']){
    //if not you admin 
    // go to page sigin
    header("location: index.php");
  
}
include_once '../php/config.php';
$posts= mysqli_query($conn,'SELECT * FROM posts');
$posts_data= mysqli_fetch_all($posts,MYSQLI_ASSOC);



// delete post
$id =$_POST['iddelete'];
if(isset($_POST['iddelete'])){
    $delete =mysqli_query($conn,"DELETE FROM posts WHERE id='{$id}'");
    echo "<meta http-equiv='refresh' content='0'>";

}

 

//echo $json_posts;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <!---icon-->
    <link rel="shortcut icon"
        href="https://avatars.githubusercontent.com/u/75854041?s=400&u=90b20128e869c2beecfae59da0fdd56d959b5893&v=4"
        type="image/x-icon" />
    <title>Document</title>
</head>

<body>
    <!--container-->
    <div class="container">
        <!----posts loading-->
        <!--New Post-->
        <div class="form-floating mb-3 mt-3 p-3 mb-2 bg-primary text-white shadow">
            <h1 class="text-center">Posts</h1>
        </div>
        <!--END New Post-->
        <?php
        foreach($posts_data as $post):
        
echo '<!---posts test-->
        <form action='.$_SERVER['PHP_SELF'].' method="POST" class="card mt-4">
            <div class="card-body">
                '.$post['title'].'
            </div>

            <div class="btn-group" role="group" aria-label="Basic example">
                <!--editer icon-->
                <button type="submit" class="btn btn-primary" name="id-editer" value='.$post['id'].'> <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                        </path>
                    </svg></button>
                <!-- end editer icon--->
                <!--delete icon-->
                <button type="submit" class="btn btn-danger" name="iddelete" value='.$post['id'].'><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg></button>
                <!--end delete icon-->

            </div>

        </form>
        <!---end posts-->';

        endforeach;
        ?>


    </div>
    <script src="../js/bootstrap.js">
    </script>
    <!--end container-->
</body>

</html>