<?php

session_start();
include('connect.php');
if(isset($_POST['id'])){
$_SESSION['update']=$_POST['id'];
}
$id= $_SESSION['update'];
$pdosearch=("SELECT * FROM fleetoperationtb WHERE id = ? "); 
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute(array($id));
$pdoresult = $pdoresponse ->fetch(PDO::FETCH_ASSOC);
if ($pdoresponse -> rowCount()>0){
    
    $dispatchdate = $pdoresult['dispatchdate'];
    $dispatchloc = $pdoresult['dispatchloc'];
    $estimatedtime = $pdoresult['estimatedtime'];
    $opstatus = $pdoresult['opstatus'];
}



if(isset($_POST['submit'])){


    $dispatchdate = $_POST['dispatchdate'];
    $dispatchloc = $_POST['dispatchloc'];
    $estimatedtime = $_POST['estimatedtime'];
    $opstatus = $_POST['opstatus'];

    $pdosearch="UPDATE fleetoperationtb set dispatchdate='$dispatchdate',dispatchloc='$dispatchloc',estimatedtime='$estimatedtime',opstatus='$opstatus' where id=$id";
    $pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
    
    if($pdoresult){
        //echo "Updated Successfully";
       header('location:managefleet.php'); 
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
    <title>Update Fleet Operation</title>
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
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-pencil-square-o" style="font-size:35px">&nbsp; Update Fleet Operation </i></h3>    


     
<button style="font-family: bold; font-size:18px; width:7%" class="btn btn-dark my-3 "><a href="javascript:history.back()" class="text-light">Back</a></button> 
    
    <div class="row">
        <center>
        <div class="col-md-12 mt-4">
</center>

</div>

<div class="card-body">
    <div class="container">
    <form method="post">

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Dispatch Date:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Dispatch Date" name="dispatchdate" required autocomplete="off" value= <?php echo $dispatchdate?>>
    </div> 
    
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Dispatch Location:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Dispatch Location" name="dispatchloc" required autocomplete="off" value= <?php echo $dispatchloc?>>
    </div> 

    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Estimated Time:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Estimated Time" name="estimatedtime" required autocomplete="off" value= <?php echo $estimatedtime?>>
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

    


  <br>
  <button style="display:block; margin: 0 auto; width: 25%; font-family: arial; color:white; font-size:18px;" type="submit" class="btn btn-dark" name="submit">Update</button>
<br>
</form>

    </div>
    </div>
   
  </body>
</html>