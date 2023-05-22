<?php

session_start();
include('connect.php');
if(isset($_POST['id'])){
$_SESSION['update']=$_POST['id'];
}
$id= $_SESSION['update'];
$pdosearch=("SELECT * FROM checkpointtb WHERE id = ? "); 
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute(array($id));
$pdoresult = $pdoresponse ->fetch(PDO::FETCH_ASSOC);
if ($pdoresponse -> rowCount()>0){
    $equipname = $pdoresult['equipname'];
    $checkstat = $pdoresult['checkstat'];
    $checktime = $pdoresult['checktime'];
    $opname = $pdoresult['opname'];
    $availstat = $pdoresult['availstat'];
    $mainstat = $pdoresult['mainstat'];
}



if(isset($_POST['submit'])){


    $equipname = $_POST['equipname'];
    $checkstat = $_POST['checkstat'];
    $checktime = $_POST['checktime'];
    $opname = $_POST['opname'];
    $availstat = $_POST['availstat'];
    $mainstat = $_POST['mainstat'];

    $pdosearch="UPDATE checkpointtb set equipname='$equipname',checkstat='$checkstat',checktime='$checktime',opname='$opname',availstat='$availstat',mainstat='$mainstat' where id=$id";
    $pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
    
    if($pdoresult){
        //echo "Updated Successfully";
       header('location:managecheckpoint.php'); 
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
    <title>Update Checkpoint Records</title>
  </head>
  <body>
    <div class="container my-5">

    <body style="background-color:#eeeee4;">
  <style>
.card {
  border: 1px outset black;
  background-color: #E2F7F0;
  border-radius:10px;
} 
</style>
  <div class="card">
     
     <div class="card-header">
     <br>
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-pencil-square-o" style="font-size:35px">&nbsp; Update Checkpoint Recod </i></h3>    


     
<button style="font-family: bold; font-size:18px; width:7%" class="btn btn-dark my-3 "><a href="javascript:history.back()" class="text-light">Back</a></button> 
    
    <div class="row">
        <center>
        <div class="col-md-12 mt-4">
</center>

</div>

<div class="card-body">
    <div class="container">
    <form method="post">

    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Equipment Name:</label>
    <select class="form-select form-control" name="equipname" style="font-family: bold; background-color:#CFD4D8">
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Excavator</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Backhoe</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Compactor</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Bulldozer</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Skid-steer loader</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Dump Truck</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Forklift</option>
</select>
    </div>
    
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Checkpoint Status:</label>
    <div class="form-check form-check-inline">
    &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="checkstat" id="inlineRadio1" value="Excellent">
  <label class="form-check-label" for="inlineRadio1">Excellent</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="checkstat" id="inlineRadio1" value="Good">
  <label class="form-check-label" for="inlineRadio1">Good</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="checkstat" id="inlineRadio1" value="Neutral">
  <label class="form-check-label" for="inlineRadio1">Neutral</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="checkstat" id="inlineRadio1" value="Poor">
  <label class="form-check-label" for="inlineRadio1">Poor</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
</div>

<div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Checkpoint Time:</label>
    <select class="form-select form-control" name="checktime" style="font-family: bold; background-color:#CFD4D8">
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >10:30 AM </option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >11:00 AM</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >12:30 PM</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >01:00 PM</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >02:30 PM</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >03:00 PM</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >04:30 PM</option>
</select>
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Operator Name:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Operation Name" name="opname" required autocomplete="off">
    </div> 
    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Availability Status:</label>
    <select class="form-select form-control" name="availstat" style="font-family: bold; background-color:#CFD4D8">
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Available </option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Not Available</option>
</select>
    </div>

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Maintenance Status:</label>
    <div class="form-check form-check-inline">
    &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="mainstat" id="inlineRadio1" value="Excellent">
  <label class="form-check-label" for="inlineRadio1">Excellent</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="mainstat" id="inlineRadio1" value="Good">
  <label class="form-check-label" for="inlineRadio1">Good</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="mainstat" id="inlineRadio1" value="Neutral">
  <label class="form-check-label" for="inlineRadio1">Neutral</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
  <input class="form-check-input" type="radio" name="mainstat" id="inlineRadio1" value="Poor">
  <label class="form-check-label" for="inlineRadio1">Poor</label>
  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
</div>
    </div>


  <br>
  <button style="display:block; margin: 0 auto; width: 25%; font-family: arial; color:white; font-size:18px;" type="submit" class="btn btn-dark" name="submit">Update</button>
<br>
</form>

    </div>
    </div>
   
  </body>
</html>