<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  


 
    $equipmentID = $_POST['equipmentID'];
    $dispatchdate = $_POST['dispatchdate'];
    $dispatchloc = $_POST['dispatchloc'];
    $driverID = $_POST['driverID'];
    $operatorID = $_POST['operatorID'];
    $estimatedtime = $_POST['estimatedtime'];
    $opstatus = $_POST['opstatus'];


    if($equipmentID == $equipmentID){
      $query = "INSERT INTO fleetoperationtb VALUES('','$equipmentID','$dispatchdate','$dispatchloc','$driverID','$operatorID','$estimatedtime','$opstatus')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=managefleet.php");


}


else{
  $query = "INSERT INTO fleetoperationtb VALUES('','$equipmentID','$dispatchdate','$dispatchloc','$driverID','$operatorID','$estimatedtime','$opstatus')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=managefleet.php");
}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Fleet Operation</title>
  </head>
  <div class="container my-5">
  <body style="background-color:#eeeee4;">
  <style>
.card {
  border: 1px outset black;
  background-color: #E2F7F0;
  border-radius: 10px;
} 
</style>
  <div class="card">
     
     <div class="card-header">
     <br>
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-user-plus" style="font-size:35px">&nbsp; Fleet Operation </i></h3>    


     
<button style="font-family: bold; font-size:18px; width:7%" class="btn btn-dark my-3 "><a href="javascript:history.back().php" class="text-light">Back</a></button> 
    
    <div class="row">
        <center>
        <div class="col-md-12 mt-4">
</center>

</div>

<div class="card-body">
    <div class="container">
    <form method="post">

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Equipment ID:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Equipment ID" name="equipmentID" required autocomplete="off">
    </div> 
    
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Dispatch Date:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Equipment ID" name="dispatchdate" required autocomplete="off">
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Dispatch Location:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Equipment ID" name="dispatchloc" required autocomplete="off">
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Driver ID:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Equipment ID" name="driverID" required autocomplete="off">
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Operator ID:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Equipment ID" name="operatorID" required autocomplete="off">
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Estimated Time:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Operation Name" name="estimatedtime" required autocomplete="off">
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Operation Status:</label>
    <div class="form-check form-check-inline">
    &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="opstatus" id="inlineRadio1" value="Excellent">
  <label class="form-check-label" for="inlineRadio1">Excellent</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="opstatus" id="inlineRadio1" value="Good">
  <label class="form-check-label" for="inlineRadio1">Good</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="opstatus" id="inlineRadio1" value="Neutral">
  <label class="form-check-label" for="inlineRadio1">Neutral</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="opstatus" id="inlineRadio1" value="Poor">
  <label class="form-check-label" for="inlineRadio1">Poor</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
</div>
    </div>
    

<h2></h2>
<br>
<button style="display:block; margin: 0 auto; width: 25%; font-family: arial; color:white; font-size:18px;" type="submit" class="btn btn-dark" name="submit" >Confirm</button>


</div> 

  
  

</form>
    </div>

   
  </body>
</html>