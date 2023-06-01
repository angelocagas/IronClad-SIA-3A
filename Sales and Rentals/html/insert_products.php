<?php 
//Databse Connection file
include('dbconnect_mysqlie.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
 
	$equipment_name=$_POST['equipment_name'];
  
    $years=$_POST['years'];
    $price=$_POST['price'];
	$detail=$_POST['detail'];
    $pic=$_FILES["product"]["name"];
// get the image extension
$extension = substr($pic,strlen($pic)-4,strlen($pic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgs=md5($files).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["product"]["tmp_name"],"product/".$imgs);
// Query for data insertion
$query=mysqli_query($con, "insert into equipment(equipment_name,year, price,Detail, file_img) value('$equipment_name','$years', '$price', '$detail' ,'$imgs' )");
$query=mysqli_query($con, "INSERT INTO `history_log`(`equipment_name`, `type`) VALUES ('$equipment_name','[value-4]')");
$query=mysqli_query($con, "INSERT INTO `sar_audit`( `role`, `username`, `action`) VALUES ('admin','ADMINISTRATOR','Successfully to request Equipment')");

if ($query) {
echo "<script>alert('You a successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='sAr-Inventory.php'; </script>";

} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Insert</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: white;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
        <div class="form-group">
			<div class="row">

				<div class="col">
				<input type="text" class="form-control" name="equipment_name" placeholder="equipment_name" required="true">
	</div>
			</div>        	
        </div>

        <div class="form-group">
        	<input type="number" class="form-control" name="price" placeholder="price" required="true">
        </div>
		<div class="form-group">
        	<input type="number" class="form-control" name="years" placeholder="year" required="true">
        </div>
		<div class="form-group">
        	<textarea type="text" class="form-control" name="detail" placeholder="detail" required="true"></textarea>
        </div>

		
		
             <div class="form-group">
        	<input type="file" class="form-control" name="product"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">View Already Inserted Data!!  <a href="equipment.php">View</a></div>
</div>
</body>
</html>