<?php
// check if admin
session_start();
if(!$_SESSION['id']){
    //if not you admin 
    // go to page sigin
    header("location: index.php");
  
}
if(isset($_POST['logout'])){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="shortcut icon"
        href="https://avatars.githubusercontent.com/u/75854041?s=400&u=90b20128e869c2beecfae59da0fdd56d959b5893&v=4"
        type="image/x-icon">
    <title>admin</title>
</head>

<body>
    <div class="container">
        <!--nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- user name here-->
                <a class="navbar-brand" href="../index.html">Admin</a>
                <!--end user name here -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST' class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-3 mt-2 ">
                            <button class="btn btn-outline-primary " aria-current="page" name="posts">Posts</button>
                        </li>
                        <li class="nav-item mt-2">
                            <button class="btn btn-outline-primary" name="newpost">new post</button>
                        </li>


                    </ul>
                    <form class="d-flex ">

                        <button class="btn btn-outline-danger" type="submit" name="logout">Log out</button>
                    </form>
                </form>
            </div>
        </nav>
        <!---end nav-->
        <?php
        if(isset($_POST['posts'])){
             include_once './posts.php';
        }elseif(isset($_POST['newpost'])){
           include_once './newpost.php';
        }else{
          include_once './posts.php';
        }
     
     ?>

    </div>
    <script src="../js/bootstrap.js">
    </script>

</body>

</html>