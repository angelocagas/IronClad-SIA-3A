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

if (isset($_GET['req_id'])) {
    $req_id = $_GET['req_id'];

    // Fetch the approved request
    $select_request = $conn->prepare("SELECT * FROM `requests` WHERE `req_id` = ? AND `status` = 'pending'");
    $select_request->execute([$req_id]);
    $row = $select_request->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Update the request status to "approved"
        $update_status = $conn->prepare("UPDATE `requests` SET `status` = 'approved' WHERE `req_id` = ?");
        $update_status->execute([$req_id]);

        // Insert the approved request into the journals
        $date = date("Y-m-d");
        $account = $row['account'];
        $amount = $row['amount'];
        $type = $row['type'];
        $encoder = $fetch_profile['username'];
        $description = $row['description'];

        // Insert the data into the journals table
        $insert = $conn->prepare("INSERT INTO `journal` (account, date, amount, type, encoder, description) VALUES(?,?,?,?,?,?)");
        $insert->execute([$account, $date, $amount, $type, $encoder, $description]);

        // Redirect back to the original page
        header("Location: accountingreq.php");
        exit();
    }
}
