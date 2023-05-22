<?php
include 'connect.php';

session_start();


if (isset($_POST['submit'])) {

    $account = $_POST['account'];
    $account = filter_var($account);
    $date = $_POST['date'];
    $date = filter_var($date);
    $amount = ($_POST['amount']);
    $amount = filter_var($amount);
    $type = ($_POST['type']);
    $type = filter_var($type);
    $encoder = $_POST['encoder'];
    $encoder = filter_var($encoder);
    $description = $_POST['description'];
    $description = filter_var($description);
    $status = $_POST['status'];
    $status = filter_var($status);

// please change the details to match your current database  

    $insert = $pdo_conn->prepare("INSERT INTO `requests` (date, account, amount, type, encoder, status, description) VALUES(?,?,?,?,?,?,?)");
    $insert->execute([$date, $account, $amount, $type, $encoder, $status, $description]);

// below is for audit trail, you can change it to match your own

//    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
//    $select_profile->execute([$admin]);
//    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

//    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
//    $auditlogin->execute(["admin", $fetch_profile['username'], "add new fund request"]);
// end of audit trail

    header('location: viewrequest.php');

}

?>
