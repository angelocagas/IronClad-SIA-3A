<?php 
session_start();
require('dbcon.php');
$actquery = "INSERT INTO activitylog_tbl
( user_id, user_fullname, activity, maintenance_id, date, time, role)
 VALUE(?,?,?,?,?,?,?)";
  $actprep = $pdocon -> prepare($actquery);
  $actexe = $actprep ->
  execute(array($_SESSION['id'],$_SESSION['fullname'],'Log out','log out',date('Y-m-d'),time(),$_SESSION['role'] ));

session_destroy();
require("links.php")
?>