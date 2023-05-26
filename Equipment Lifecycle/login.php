<?php require("dbcon.php");
session_start();
if(isset($_SESSION['id'])){
  header("location: equipmentDashboard.php");
}
ob_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/login.css">
  <title>Login</title>
</head>
<body>


<div class="container-login">
  
<form method="post" class="form-container">
  <h1 class="loginbtn">LOGIN</h1>
     <!-- <label for="username">Username:</label> -->
    <input type="text" id="s" name="username"  placeholder="Username"><br><br>
     <!-- <label for="password">Password:</label> -->
    <input type="password" id="s" name="password" placeholder="Password"><br><br>
    <div>
    <input type="submit" value="Login" name="login" class="btn-submit">
    </div>
  </form>
  </div>
</body>
</html>
<?php
 if (isset($_POST['login'])) {

     $email = $_POST['username'];
     $pass = $_POST['password'];

     $userlogin = "SELECT * FROM users WHERE username = ? AND password = ? ";
     $pdoquery = $pdocon->prepare($userlogin);
     $pdoexe = $pdoquery->execute(array($email, $pass));
     $fetchtbl = $pdoquery ->fetch(PDO::FETCH_ASSOC);
     if ($pdoquery->rowCount() > 0) {
        $_SESSION['id'] =  $fetchtbl['id'];
        $_SESSION['fullname'] =  $fetchtbl['fullname'];
        $_SESSION['role'] =  $fetchtbl['role'];
      
        $actquery = "INSERT INTO activitylog_tbl
        ( user_id, user_fullname, activity, maintenance_id, date, time, role)
         VALUE(?,?,?,?,?,?,?)";
          $actprep = $pdocon -> prepare($actquery);
          $actexe = $actprep ->
          execute(array($_SESSION['id'],$_SESSION['fullname'],'Log in','log in',date('Y-m-d'),time(),$_SESSION['role'] ));
          header("location: equipmentDashboard.php");
     }else{
        echo '<script>alert("Wrong Email/Password")</script>';

     }
  }

  ob_start();

?>