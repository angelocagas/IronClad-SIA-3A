<?php
include('connect.php');
session_start();


$act="Log out";
      $auditsql = "INSERT INTO audittb
      (userId, username, activity, actdate, acttime) VALUE (?,?,?,?,?)";
      $auditprep = $pdo_conn -> prepare($auditsql);
      $auditexe = $auditprep-> execute(array($_SESSION["userId"], $_SESSION["username"], $act, date("d-m-y"), date("h:i:sa")));
      
      session_destroy();
      header("location:Login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $Logout;?>
</body>
</html>