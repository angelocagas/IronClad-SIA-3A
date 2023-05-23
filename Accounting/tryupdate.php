<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

?>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Edit Users - Accounting Department</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

        <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../assets/js/config.js"></script>
    </head>

    <body>
        <?php

if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Retrieve user data from the database
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE username = :username");
    $select_user->bindParam(':username', $username);
    if ($select_user->execute()) {
        $user = $select_user->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            // User data found, proceed with displaying the edit form
            ?>

        <div class="modal-dialog">
            <div class="modal-content">
                <form action="updateuser.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Edit User</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user['fullname']; ?>"required>
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username"
                                    placeholder="Please double check the username, it will show an error if the username does not match."
                                    name="username" value="<?php echo $user['username']; ?>" required readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pass" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="pass" placeholder="****" name="pass"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cpass" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="cpass" placeholder="****" name="cpass"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select id="role" class="form-select" name="role" required>
                                    <option disabled selected hidden value=""><?php echo $user['role']; ?></option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone"
                                    placeholder=""
                                    name="phone" value="<?php echo $user['phone']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="address" rows="5" name="address" value="" required><?php echo $user['address']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="userlist.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="submit">Edit User</button>
                    </div>
                </form>
                <?php
} else {
            echo "User not found.";
        }
    } else {
        echo "Error occurred while fetching user data.";
    }
} else {
    echo "Invalid username.";
}

?>

            </div>
        </div>

        <!-- Core JS -->
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
    </body>

</html>