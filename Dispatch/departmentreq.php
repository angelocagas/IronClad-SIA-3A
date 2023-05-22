<?php

include 'connect.php';

session_start();

require('connect.php');
if(isset($_SESSION['id'])){
 
}else{ header('location:login.php');  }


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

    <title>Department Requests</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="dashboard.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <SPAN STYLE="font-size:8mm"><span class="demo menu-text fw-bolder ms-2">Dispatch</span></SPAN>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
           <!-- Dashboard -->
           <li class="menu-item">
              <a href="dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Drivers</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Manage-Drivers.php" class="menu-link">
                    <div data-i18n="Without menu">Manage Drivers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="viewdrivers.php" class="menu-link">
                    <div data-i18n="Without navbar">View Drivers</div>
                  </a>
                </li>
               
              
             
              </ul>
            </li>

         
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Checkpoint</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="checkpointstatus.php" class="menu-link">
                    <div data-i18n="Account">Checkpoint Status</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="availabilitystatus.php" class="menu-link">
                    <div data-i18n="Notifications">Availabity Status</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="maintenancestatus.php" class="menu-link">
                    <div data-i18n="Connections">Maintenance Status</div>
                  </a>
                  <li class="menu-item">
                  <a href="managecheckpoint.php" class="menu-link">
                    <div data-i18n="Connections">Manage Checkpoint</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="viewfleetoperation.php" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Fleet Operation</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="viewfleetoperation.php" class="menu-link">
                    <div data-i18n="Basic">View Fleet Operation</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="managefleet.php" class="menu-link">
                    <div data-i18n="Basic">Manage Fleet Operation</div>
                  </a>
                </li>
             
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Operators</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="operatorlist.php" class="menu-link">
                    <div data-i18n="Error">Operator List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ManageOperator.php" class="menu-link">
                    <div data-i18n="Under Maintenance">Manage Operator</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Other Functions</span>
            </li>
         

            <li class="menu-item ">
              <a href="audit.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-history"></i>
                <div data-i18n="Analytics">Audit Trail
                </div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="departmentreq.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-git-pull-request"></i>
                <div data-i18n="Analytics">Department Request
                </div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="mytotoa.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-calendar-check"></i>
                <div data-i18n="Analytics">MyToto
                </div>
              </a>
            </li>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <?php
      $select_profile = $pdo_conn->prepare("SELECT * FROM `requests` WHERE id = ?");

      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $fetch_profile['fullname']; ?></span>
                            <small class="text-muted"><?= $fetch_profile['role']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile.php">
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
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Dispatch Pending Requests</h4>

<!-- you can change the name of the page if you want to -->

              <form action="departmentreqnew.php" method="post">
                                  <!-- Vertically Centered Modal -->
                                  <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter4"
                        >
                          Add a Request
                        </button>
                        <?php
      // please change database information to match yours                  
      $select_profile = $pdo_conn->prepare("SELECT * FROM `requests` WHERE id = ?");

      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter4" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add a Request</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                <div class="col mb-3">
                                   <div class="mb-3">
                                  <label for="html5-date-input" class="form-label">Date</label>
                                    <div class="col-md-12">
                                    <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" id="html5-date-input" name="date"/>
                                    </div>
                                 </div>
                                 </div>
                                </div>
                                <div class="row">
                                 <div class="col mb-3">
                                   <div class="mb-3">
                                    <label for="account" class="form-label">Account</label>
                                    <select id="account" class="form-select" name="account">
                                    <option>Select Type</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Dispatch" >Dispatch</option>
                                    <option value="Equipment Lifecycle" >Equipment Lifecycle</option>
                                    <option value="Maintenance" >Maintenance</option>
                                    <option value="Rental and Sales" >Rental and Sales</option>
                                    </select>
                                   </div>
                                  </div>
                                  </div>
                                <div class="row">
                                <div class="mb-3">
                                  <label for="amount" class="form-label">Amount</label>
                                    <div class="col-md-12">
                                    <input class="form-control" type="number" value="" placeholder="Amount in PHP" id="amount" name="amount"/>
                                    </div>
                                 </div>
                                </div>
                                <div class="row">
                                 <div class="col mb-3">
                                   <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select id="type" class="form-select" name="type">
                                    <option>Select Type</option>
                                    <option value="credit">credit</option>
                                    <option value="debit">debit</option>
                                    </select>
                                   </div>
                                  </div>
                                  </div>
                                <div class="row">
                                <div class="mb-3">
                                  <label for="encoder" class="form-label">Encoder</label>
                                    <div class="col-md-12">
                                    <input class="form-control" type="text" value="<?=      $_SESSION['username'] ?>" id="encoder" name="encoder"/>
                                    </div>
                                 </div>
                                </div>
                                <div class="row">
                                 <div class="col mb-3">
                                   <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="type" class="form-select" name="status">
                                    <option>Select Status</option>
                                    <option value="pending">Pending</option>
                                    </select>
                                   </div>
                                  </div>
                                  </div>
                                <div class="row">
                                  <div class="col mb-3">
                                  <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                      </div>
                                  </div>
                                </div>
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit Request</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                    <br></br>
              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header"></h5>
<div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr class="text-nowrap">
                        <th>Request ID</th>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Encoder</th>
                        <th>Status</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
// please change the like condition to match your department
$query = $pdo_conn->prepare("SELECT * FROM `requests` WHERE `account` LIKE '%accounting%' and `status` LIKE '%pending%'");
$row_count= 1;
$query->execute();
                               while($row = $query->fetch()){?>
                                <tr>
                                <td><?php echo $row_count ?></td>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['account'] ?></td>
                                    <td><?= $row['amount'] ?></td>
                                    <td><?= $row['type'] ?></td>
                                    <td><?= $row['encoder'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                </tr>

          <?php
          $row_count++;
				}
			?>
         
                    </tbody>
                  </table>
                </div>

                  <!--/ Hoverable Table -->
            </div>
            <!-- / Content -->


            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>