<?php
session_start();
if($_SESSION['id']){
     header('location: admin.php');
}
include_once '../php/config.php';
  $user=$_POST['username'];
  $password=$_POST['password'];
if(isset($_POST['signin'])){

  $signin_check = mysqli_query($conn,"SELECT * FROM admin WHERE adminuser='{$user}' AND adminpass = '{$password}'");
  if(mysqli_num_rows($signin_check) >0){
  while ($obj = mysqli_fetch_object($signin_check)) {
    
    $id= $obj->id_admin;
  }
   $_SESSION['id']= $id;

   header('location: admin.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <!---icon-->
    <link rel="shortcut icon"
        href="https://avatars.githubusercontent.com/u/75854041?s=400&u=90b20128e869c2beecfae59da0fdd56d959b5893&v=4"
        type="image/x-icon" />
    <title>Sign in</title>
</head>

<body class="text-center" data-new-gr-c-s-check-loaded="14.1016.0" data-gr-ext-installed="">
    <!--container -->
    <div class="container flex-column">
        <main class="form-signin">
            <form action="#" method="POST">
                <h1 class="m-5">
                    Admin <span class="badge bg-secondary">sign in</span>
                </h1>
                <!---User Name-->
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" placeholder="User Name"
                        name='username' />
                    <label for="floatingInput">User Name</label>
                </div>
                <!---end User Name-->
                <!---password-->
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name='password' />
                    <label for="floatingPassword">Password</label>
                </div>
                <!---end password-->

                <!--- button submit -->
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="signin">
                    Sign in
                </button>
                <!--- end button submit -->
                <p class="mt-5 mb-3 text-muted">©2021</p>
            </form>
        </main>
    </div>
    <script src="../js/bootstrap.js">
    </script>
    <!--end container -->
</body>

</html>