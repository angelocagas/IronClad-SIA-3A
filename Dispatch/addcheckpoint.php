<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  


    $equipname = $_POST['equipname'];
    $checkstat = $_POST['checkstat'];
    $checktime = $_POST['checktime'];
    $opname = $_POST['opname'];
    $availstat = $_POST['availstat'];
    $mainstat = $_POST['mainstat'];


    if($equipname == $equipname){
      $query = "INSERT INTO checkpointtb VALUES('','$equipname','$checkstat','$checktime','$opname','$availstat','$mainstat')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=checkpoint.php");


}


else{
  $query = "INSERT INTO checkpointtb VALUES('','$equipname','$checkstat','$checktime','$opname','$availstat','$mainstat')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=checkpoint.php");
}
}

?>