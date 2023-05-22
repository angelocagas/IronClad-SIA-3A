<?php

session_start();
require('connect.php');
$pdosearch="SELECT * FROM requests";
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
$pdoresult = $pdoresponse ->fetchAll();
if(isset($_POST['delete'])){
     header('location:viewrequests.php');  
}
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Requests</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Yung sa ilalim -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script>
$(document).ready(function(){
  $('button').click(function(){
	di = $(this).attr('id')
	$.ajax({url: "delete.php",
		method:'post',
		data:{id:di},
		success: function(result){
    $(".modal-body").html(result);

    

    
  }});

  });
  
});



$(document).ready(function(){
  $('input').click(function(){
	lol = $(this).attr('id')
	$.ajax({url:'update.php',
		method:'POST',
		data:{id:lol},
		success: function(result)
          {
    $(".modal-body").html(result);
   

    
  }});

  });
  
});
</script>
  </head>

  <body style="background-color:#eeeee4;">
  <style>
.btn{
  width: 45%;
 
  margin: 5px 5px;
  padding-left: 3 px;
  padding-right: 3 px;

}
.tb1{
  width: 50%;
}
.bt{
  width: 15%;
}

.card {
  background-color: #8448D4;

} 
.container{
     border-radius:10px;
}
.table{
    text-align: center;
}

</style>
<br>

<div class="container" style="background-color:white";>
<br>
<div class="card">
     
<div class="card-header">
     <br>
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-address-book" style="font-size:35px">  Request Record </i></h3>  

     
<button style="font-family: bold; font-size:18px; width:10%" class="btn btn-dark my-3 "><a href="dashboard.php" class="text-light">Back</a></button> 

    <div class="row">

</div>
</div>
</div>

<div class="card-body">
                    <table class="table table-bordered table-striped">
                    <tr>
                         <th style="font-family: Arial"class="table-dark">Request ID</th>
                         <th style="font-family: Arial"class="table-dark">Date</th>
                         <th style="font-family: Arial"class="table-dark">Account</th>
                         <th style="font-family: Arial"class="table-dark">Amount</th>
                         <th style="font-family: Arial"class="table-dark">Type</th>
                         <th style="font-family: Arial"class="table-dark">Encoder</th>
                         <th style="font-family: Arial"class="table-dark">Status</th>
                         <th style="font-family: Arial"class="tb1 table-dark">Description</th>
                    </tr>
</div>
               <tbody>
               
                    <form method ="post">
                    <?php
                    foreach ($pdoresult as $result) {
                      
                      $req_id = $result['req_id'];
                      $date = $result['date'];
                      $account = $result['account'];
                      $amount = $result['amount'];
                      $type = $result['type'];
                      $encoder = $result['encoder'];
                      $status = $result['status']; 
                      $description = $result['description']; 
                          
                    ?>
                    
                              <tr>
                                   <td style="font-family: arial; color:#21130d">Disp-<?php echo $req_id; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $date; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $account; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $amount; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $type; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $encoder; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $status; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $description; ?></td>
                                   
                              </tr>

                    <?php
                         }
                    
                    ?>
                    
                    </form>
               </tbody>
          </table>
          </div>



</div>
</div>
</div>
<br>



  </body>
</html>
