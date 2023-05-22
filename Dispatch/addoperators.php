<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  

    $name=$_POST['operator_name'];
    $phone=$_POST['phone_number'];
    $email=$_POST['email'];
    $cert=$_POST['certification'];


    if($name == $name){
      $query = "INSERT INTO operatortb VALUES('','$name','$phone','$email','$cert')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=ManageOperator.php");


}


else{
  $query = "INSERT INTO operatortb VALUES('','$name','$phone','$email','$certlevel')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=ManageOperator.php");
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
    <title>Add Operator</title>
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
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-user-plus" style="font-size:35px">&nbsp; Add Operator </i></h3>    


     
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
    placeholder="Enter Your Name" name="operator_name" required autocomplete="off">
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Phone Number:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control"
    placeholder="Enter Your Phone Number" name="phone_number" required autocomplete="off">
    </div>
    <div class="form-group">
    <label style="font-family: bold; color:black; font-size:18px;">Email Address:</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="email" class="form-control"
    placeholder="Enter Your Email Address" name="email" required autocomplete="off">
    </div>
    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Certification Level:</label>
    <select class="form-select form-control" name="certification" style="font-family: bold; background-color:#CFD4D8" value= <?php echo $cert?>>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Novice Operator </option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Intermidiate Operator</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Grade A Operator</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Grade B Operator</option>
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