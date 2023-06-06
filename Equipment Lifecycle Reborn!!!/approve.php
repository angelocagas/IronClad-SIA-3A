<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
$select_profile->execute([$admin]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

if (isset($_GET['cus_id'])) {
    $cus_id = $_GET['cus_id'];

    // Fetch the approved request
    $select_request = $conn->prepare("SELECT * FROM `on_site` WHERE `cus_id` = ?");
    $select_request->execute([$cus_id]);
    $row = $select_request->fetch(PDO::FETCH_ASSOC);

    if ($row) {
       

        // Insert the approved request into the journals
       
        $cus_nam = $row['cus_nam'];
        $eq_nam = $row['eq_nam'];
        $quan = $row['quan'];
        $date_retu = $row['date_retu'];
     
        // Insert the data into the journals table
        $insert = $conn->prepare("INSERT INTO `off_rent_pick` (cus_nam, eq_nam, quan, date_retu) VALUES(?,?,?,?)");
        $insert->execute([$cus_nam, $eq_nam, $quan, $date_retu]);

        // Redirect back to the original page
        header("Location: on-rent-operations.php");
        exit();
    }
}
