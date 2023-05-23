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

        <title>Edit Journal - Accounting Department</title>

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

if (isset($_GET['journal_id'])) {
    $journal_id = $_GET['journal_id'];

    // Retrieve user data from the database
    $select_journal_id = $conn->prepare("SELECT * FROM `journal` WHERE journal_id = :journal_id");
    $select_journal_id->bindParam(':journal_id', $journal_id);
    if ($select_journal_id->execute()) {
        $journal_id = $select_journal_id->fetch(PDO::FETCH_ASSOC);
        if ($journal_id) {
            // User data found, proceed with displaying the edit form
            ?>

        <div class="modal-dialog">
            <div class="modal-content">
                <form action="updateJournal.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Edit Journal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="mb-3">
                                    <label for="html5-date-input" class="form-label">Date</label>
                                    <div class="col-md-12">
                                        <input class="form-control" type="date"
                                            value="<?php echo $journal_id['date']; ?>" id="html5-date-input" name="date"
                                            readonly required />
                                        <input type="hidden" name="journal_id"
                                            value="<?php echo $_GET['journal_id']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Account</label>
                                    <select id="defaultSelect" class="form-select" name="account" required>
                                        <option selected hidden value=""><?php echo $journal_id['account']; ?></option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Dispatch">Dispatch</option>
                                        <option value="Equipment Lifecycle">Equipment Lifecycle</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Rental and Sales">Rental and Sales</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="number" value="<?php echo $journal_id['amount']; ?>" placeholder="Amount in PHP"
                                        id="amount" name="amount" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select id="type" class="form-select" name="type" required>
                                        <option selected hidden value=""><?php echo $journal_id['type']; ?></option>
                                        <option value="Credit">Credit</option>
                                        <option value="Debit">Debit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="encoder" class="form-label">Encoder</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text"
                                        value="<?php echo $journal_id['encoder']; ?>" id="encoder" name="encoder"
                                        readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div>
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="5" type="text" 
                                        name="description"><?php echo $journal_id['description']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div>
                                <div class="modal-footer">
                                    <a href="journals.php" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" name="submit">Edit Journal</button>
                                </div>
        </div>
        </div>
        </div>
                </form>
                <?php
} else {
            echo "Journal not found.";
        }
    } else {
        echo "Error occurred while fetching user data.";
    }
} else {
    echo "Invalid date.";
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