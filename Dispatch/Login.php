<?php 
   include('connect.php');
  ?>

<?php
  session_start();
  if(isset($_POST['Login'] )) 
  
    {
      
    $user = $_POST['username'];
    $userpass = $_POST['password'];
      $userlogin = "SELECT * FROM admintb WHERE username = ? AND password = ? ";
      $pdoquery = $pdo_conn->prepare($userlogin);
      $pdoexe = $pdoquery->execute(array($user, $userpass));
      $fetchtbl = $pdoquery ->fetch(PDO::FETCH_ASSOC);
      if ($pdoquery->rowCount() > 0) {
         $_SESSION['id'] =  $fetchtbl['id'];
         $_SESSION['username'] =  $fetchtbl['username'];
      

      $page = $_SERVER['PHP_SELF'];
      $sec = "5";
      header("Refresh: 1; url=Login.php");
    

      {
    
        
        ;
        header("location:mytotoa.php");
        
      }
    }
    $act="Log In";
          $auditsql = "INSERT INTO audittb
          (userId, username, activity, actdate, acttime) VALUE (?,?,?,?,?)";
          $auditprep = $pdo_conn -> prepare($auditsql);
          $auditexe = $auditprep-> execute(array($_SESSION["userId"], $_SESSION["username"], $act, date("d-m-y"), date("h:i:sa")));
    $pdo_conn= null;
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
    header("Refresh: 1; url=Login.php");
  }
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css\maps/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
   
  </head>
  <body>

    <section class="Form my-4 mx-5">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="images/pexels.jpg" class="img-fluid" alt="">
                <img src=".png" class="logo1 img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">DISPATCH DEPARTMENT</h1>
                    <h4>Sign into your account</h4>
                    <form class="form" action="" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="Email Address" class="form-control my-3 p-3" name="username" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="password" placeholder="Password" class="form-control  my-3 p-3" name="password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <button type="submit" value="Login" name="Login" class="btn1 mt-3 mb-5"  required>Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password?</a>
                        <p>Don't have an account? <a href="#">Register Here!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>