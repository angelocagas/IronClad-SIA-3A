<?php

session_start();
include('connect.php');
if(isset($_POST['id'])){
$_SESSION['update']=$_POST['id'];
}
$id= $_SESSION['update'];
$pdosearch=("SELECT * FROM operatortb WHERE id = ? "); 
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute(array($id));
$pdoresult = $pdoresponse ->fetch(PDO::FETCH_ASSOC);
if ($pdoresponse -> rowCount()>0){
    $name = $pdoresult['name'];
    $phone = $pdoresult['number'];
    $email = $pdoresult['email'];
    $cert = $pdoresult['certification'];
}



if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $cert = $_POST['certification'];

    $pdosearch="UPDATE operatortb set name='$name',number='$phone',email='$email',certification='$cert' where id=$id";
    $pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
    
    if($pdoresult){
        //echo "Updated Successfully";
       header('location:ManageOperator.php'); 
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
    <title>Update Driver Records</title>
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
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-pencil-square-o" style="font-size:35px">&nbsp; Update Account </i></h3>    


     
<button style="font-family: bold; font-size:18px; width:7%" class="btn btn-dark my-3 "><a href="javascript:history.back()" class="text-light">Back</a></button> 
    
    <div class="row">
        <center>
        <div class="col-md-12 mt-4">
</center>

</div>

<div class="card-body">
    <form method="post">
  <div class="form-group" style="display:block; margin: 0 auto; width: 97%">
    <label style="font-family: bold; color:black; font-size:18px;">Name</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value= <?php echo $name?> >
    </div>
    <br>
    <div class="form-group" style="display:block; margin: 0 auto; width: 97%">
    <label style="font-family: bold; color:black; font-size:18px;">Phone Number</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control" placeholder="Enter Your License Number" name="number" autocomplete="off" value= <?php echo $phone?> >
    </div>
    <br>
    <div class="form-group" style="display:block; margin: 0 auto; width: 97%">
    <label style="font-family: bold; color:black; font-size:18px;">Email</label>
    <input style="font-family: bold; background-color:#CFD4D8" type="text" class="form-control" placeholder="Enter Your License Number" name="email" autocomplete="off" value= <?php echo $email?> >
    </div>
    <br>
    <div class="form-group" style=display:block; margin: 0 auto; width: 25%;>
    <label style="font-family: bold; color:black; font-size:18px;" >Certification Level:</label>
    <select class="form-select form-control" name="certification" style="font-family: bold; background-color:#CFD4D8" value= <?php echo $cert?>>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Novice Operator </option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Intermidiate Operator</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Grade A Operator</option>
  <option style="font-family: bold; background-color:#CFD4D8" type="text" >Grade B Operator</option>
</select>



  <br>
  <button style="display:block; margin: 0 auto; width: 25%; font-family: arial; color:white; font-size:18px;" type="submit" class="btn btn-dark" name="submit">Update</button>
<br>
</form>

    </div>
    </div>
   
  </body>
</html>