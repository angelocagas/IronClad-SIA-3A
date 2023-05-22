<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  
    $name=$_POST['name'];
    $dlnum=$_POST['dlnum'];
    $dlenum=$_POST['dlenum'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $acarrier=$_POST['acarrier'];


    if($name == $name){
      $query = "INSERT INTO drivertb VALUES('','$name','$dlnum','$dlenum','$phone','$email','$acarrier')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=Manage-Drivers.php");


}


else{
  $query = "INSERT INTO drivertb VALUES('','$name','$dlnum','$dlenum','$phone','$email','$acarrier')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=Manage-Drivers.php");
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
    <title>Add User</title>
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
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-user-plus" style="font-size:35px">&nbsp; Add Account </i></h3>    


     
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
    <label style="font-family: bold; color:black; font-size:18px;">Name:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Name" name="name" required autocomplete="off">
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">License Number:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your License Number" name="dlnum"required autocomplete="off">
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">License Expiry Number:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your License Expiry Number" name="dlenum" required autocomplete="off">
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Phone Number:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Phone Number" name="phone" required autocomplete="off">
    </div> 
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Email Address:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="email" class="form-control"
    placeholder="Enter Your Email Address" name="email" required autocomplete="off">
    </div>

    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Assigned Carrier:</label>
    <select class="form-select form-control" name="acarrier" style="font-family: bold; background-color:#CFD4D8">
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Tilt-deck Trailers</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Flatbed Trailer</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Lowboy Trailer</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Multi-axle Trailer</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Self-propelled Modular Transporter</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Platform Trailer</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Extendable Trailer</option>
</select>
    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    

<h2></h2>
<br>
<button style="display:block; margin: 0 auto; width: 25%; font-family: arial; color:white; font-size:18px;" type="submit" class="btn btn-dark" name="submit" >Confirm</button>


</div> 

  
  

</form>
    </div>

   
  </body>
</html>