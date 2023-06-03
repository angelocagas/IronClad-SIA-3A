<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_GET['req_id'])) {
    $req_id = $_GET['req_id'];

    // Update the status from 'pending' to 'deny' in the database
    $updateQuery = $conn->prepare("UPDATE `requests` SET `status` = 'denied' WHERE `req_id` = ?");
    $updateQuery->execute([$req_id]);

    // Redirect back to the original page after updating the status
    header("Location: dispatchreq.php");
    exit();
}
