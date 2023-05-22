<?php

session_start();
require('connect.php');
$pdosearch="SELECT * FROM drivertb";
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
$pdoresult = $pdoresponse ->fetchAll();
if(isset($_POST['delete'])){
     header('location:Manage-Drivers.php');  
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

    <title>Manage Drivers</title>

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

  <body>
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
.btnorig{
  width: 15%;
  color: white;
  
}
.btnorigs{
  width: 10%;
  color: white;
  
}
.container{
     border-radius:10px;
}
 
 
</style>
<div class="container-xxl flex-grow-1 container-p-y">      
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Driver List</h4>
            <button  class="btn btn-primary btnorig"><a href="dashboard.php" class="text-white">Go Back to Dashboard</a></button> 
            <button  class="btn btn-primary btnorigs"><a href="adddriver.php" class="text-white">New Driver</a></button> 
            <br> <br>
<div class="card">
  
                <h5 class="card-header"></h5>
<div class="table-responsive text-nowrap">
  
                  <table class="table table-hover">
                    <thead>
                      <tr class="text-nowrap">
                         <th>ID</th>
                         <th>Name</th>
                         <th>License Number</th>
                         <th>License Expiry</th>
                         <th>Phone</th>
                         <th>Email</th>
                         <th>Assigned Carrier</th>
                         <th>Operation</th>
                         

                    </tr>
              
               <tbody>
                    
                    <form method ="post">
                    <?php
                     foreach ($pdoresult as $result){
                      
                              $id = $result['id'];
                              $name = $result['name'];
                              $dlnum = $result['dlnum'];
                              $dlenum = $result['dlenum'];
                              $phone = $result['phone'];
                              $email = $result['email'];
                              $acarrier = $result['acarrier'];
                              
                          
                    ?>
                              <tr>
                                   <td><?php echo $id; ?></td>
                                   <td><?php echo $name; ?></td>
                                   <td><?php echo $dlnum; ?></td>
                                   <td><?php echo $dlenum; ?></td>
                                   <td><?php echo $phone; ?></td>
                                   <td><?php echo $email; ?></td>
                                   <td><?php echo $acarrier; ?></td>
                                   <td><button id="<?php echo $id ?>"onclick="window.location.href='delete.php'" name="delete" type="button" action="delete.php"class="btn btn-danger btn1">Delete<span class="las la-arrow-right"></span></button><input value="Update"type="button" id="<?php echo $id ?>"onclick="window.location.href='update.php'" name="Update" type="button" action="update.php"class="btn btn-primary btn1"><span class="las la-arrow-right"></span></input></td>
                                   
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
