<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  



    $dispatchdate = $_POST['dispatchdate'];
    $dispatchloc = $_POST['dispatchloc'];
    $driverID = $_POST['driverID'];
    $operatorID = $_POST['operatorID'];
    $estimatedtime = $_POST['estimatedtime'];
    $opstatus = $_POST['opstatus'];


    if($dispatchdate == $dispatchdate){
      $query = "INSERT INTO fleetoperationtb VALUES('','$dispatchdate','$dispatchloc','$driverID','$operatorID','$estimatedtime','$opstatus')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=viewfleetoperation.php");


}


else{
  $query = "INSERT INTO fleetoperationtb VALUES('','$dispatchdate','$dispatchloc','$driverID','$operatorID','$estimatedtime','$opstatus')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=viewfleetoperation.php");
}
}

?>