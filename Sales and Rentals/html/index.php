<?php
require 'dbcon.php';
session_start();
$ongoing_card_count = 0;
$og_query_card = 'SELECT * FROM orders WHERE num = (?)';
$og_prepare_card = $pdocon->prepare($og_query_card);
$og_exe = $og_prepare_card ->execute(array('1'));
foreach($og_prepare_card as $ctr){
  $ongoing_card_count+=1;
}
$rentals_count = 0;
$rentals_query_card = 'SELECT * FROM rentals WHERE num = (?)';
$rentals_query_prepare = $pdocon->prepare($rentals_query_card);
$rentals_exe = $rentals_query_prepare ->execute(array('1'));
foreach($rentals_query_prepare as $ctr){
  $rentals_count+=1;
}


$rentals_count = 0;
$rentals_card = 'SELECT * FROM rentals';
$rentals_prepare_card = $pdocon->prepare($rentals_card);
$rentals_exe = $rentals_prepare_card ->execute();
foreach($rentals_prepare_card as $ctr){
  $rentals_count+=1;
}

?>





<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <title>Dashboard</title>

  <meta name="description" content="">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css">
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
  <link rel="stylesheet" href="assets/css/demo.css">

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

  <!-- Page CSS -->

  <link rel="stylesheet" href="assets/vendor/css/pages/page-icons.css">

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <style type="text/css">
    .layout-menu-fixed .layout-navbar-full .layout-menu,
    .layout-page {
      padding-top: 0px !important;
    }

    .content-wrapper {
      padding-bottom: 0px !important;
    }
  </style>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Code injected by Five-server -->
  <script async="" data-id="five-server" data-file="c:\xampp\htdocs\sm\html\icons-boxicons.html" type="application/javascript" src="/fiveserver.js"></script>
  <style>
    /* Injected by five-server */
    /*[data-highlight="true"] {
        border: 1px rgb(90,170,255) solid !important;
        background-color: rgba(155,215,255,0.5);
        animation: fadeOutHighlight 1s forwards 0.5s;
      }
      img[data-highlight="true"] {
        filter: sepia(100%) hue-rotate(180deg) saturate(200%);
        animation: fadeOutHighlightIMG 0.5s forwards 0.5s;
      }*/
    @keyframes fadeOutHighlight {
      from {
        background-color: rgba(155, 215, 255, 0.5);
      }

      to {
        background-color: rgba(155, 215, 255, 0);
      }
    }

    @keyframes fadeOutHighlightIMG {
      0% {
        filter: sepia(100%) hue-rotate(180deg) saturate(200%);
      }

      33% {
        filter: sepia(66%) hue-rotate(180deg) saturate(100%);
      }

      50% {
        filter: sepia(50%) hue-rotate(90deg) saturate(50%);
      }

      66% {
        filter: sepia(33%) hue-rotate(0deg) saturate(100%);
      }

      100% {
        filter: sepia(0%) hue-rotate(0deg) saturate(100%);
      }
    }

    @keyframes fiveserverInfoPopup {
      0% {
        top: -40px;
      }

      15% {
        top: 4px;
      }

      85% {
        top: 4px;
      }

      100% {
        top: -40px;
      }
    }

    /*smaller*/
    @media (max-width: 640px) {
      #fiveserver-info-wrapper {
        max-width: 98%;
      }

      #fiveserver-info {
        border-radius: 0px;
      }
    }
  </style>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
         
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Rental And Sale</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow" style="display: none;"></div>

        <ul class="menu-inner py-1 overflow-auto">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="rental.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Rental</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="orders.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Order</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="sale.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Sale</div>
            </a>
          </li>
          <li class="menu-item"  >
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Equipment</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                <a href="equipment.php" class="menu-link">
                  <div data-i18n="Without menu">Add Equipment</div>
                </a>

                <a href="inventory.php" class="menu-link">
                  <div data-i18n="Without menu">Inventory</div>
                </a>
                
               
              
              </li>

              
              

              
             
            </ul>
          </li>
          <ul class="menu-inner py-1 overflow-auto">
           <li class="menu-item "  >
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Model</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                <a href="model.php" class="menu-link">
                  <div data-i18n="Without menu">Add Model</div>
                </a>


             
                
               
              
              </li>
              
              
              

              
             
            </ul>
          </li>
          <!-- Layouts -->

        

        </ul>
        
      </aside>


      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm">cc</i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <span></span>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <div class="content-wrapper">
          <!-- Content -->




          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Bootstrap Table -->
            <!-- card -->
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total Rentals Approved</h5>
                    <h3 class="card-text"><?php 
				    include('dbconnect_mysqlie.php');
 
				 
				  $product = $con->query("SELECT sum(num) as total FROM `rentals` where status= '1'")->fetch_assoc()['total'];
				  echo number_format($product);
				
			   
				

                ?></h3>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total Rentals Pending </h5>
                    <h3 class="card-text"><?php 
				    include('dbconnect_mysqlie.php');
 
				 
				  $product = $con->query("SELECT sum(num) as total FROM `rentals` where status= '0'")->fetch_assoc()['total'];
				  echo number_format($product);
				
			   
				

                ?></h3>
                 
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total of Rentals</h5>
                    <h3 class="card-text"><?= $rentals_count; ?></h3>
                    
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total order Approved</h5>
                    <h3 class="card-text"><?php 
				    include('dbconnect_mysqlie.php');
 
				 
				  $product = $con->query("SELECT sum(num) as total FROM `orders` where status= '1'")->fetch_assoc()['total'];
				  echo number_format($product);
				
			   
				

                ?></h3>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total Order Pending</h5>
                    <h3 class="card-text"><?php 
				     include('dbconnect_mysqlie.php');
 
				 
             $product = $con->query("SELECT sum(num) as total FROM `orders` where status= '0'")->fetch_assoc()['total'];
             echo number_format($product);
           
            
				
			   
				

                ?></h3>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                  <h5 class="card-title">Total of Order</h5>
                    <h3 class="card-text"><?= $ongoing_card_count; ?></h3>
                  </div>
                </div>
              </div>
            
               
			   
				

             

              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Total Sale</h5>
                    <h3 class="card-text"><?php 
				    include('dbconnect_mysqlie.php');
 
				 
				  $product = $con->query("SELECT sum(num) as total FROM `sale`")->fetch_assoc()['total'];
       
				  echo number_format( $product);
				
			   
				

                ?></h3>
                  </div>
                </div>
              </div>
             
              
            <!-- end card -->
            

            
            <!--/ Basic Bootstrap Table -->

          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->





      <script src="assets/vendor/libs/jquery/jquery.js"></script>
      <script src="assets/vendor/libs/popper/popper.js"></script>
      <script src="assets/vendor/js/bootstrap.js"></script>
      <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="assets/vendor/js/menu.js"></script>\
      
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src="assets/js/main.js"></script>

      <!-- Page JS -->

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>


</body>
<script>
$(document).ready(function(){
$('button').click(function(){
	maintenanceid = $(this).attr('id');
$.ajax({
  url: "function.php",
		method:'post',
		data:{mainpart:maintenanceid},
		success: function(result){
      console.log(maintenanceid);
  }});
});
})


</script>
</html>