<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $reqid = $_POST['req_id'];
    $reqid = filter_var($reqid);
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

    
    $insert = $conn->prepare("INSERT INTO `requests` (req_id, date, account, amount, type, encoder, status, description) VALUES(?,?,?,?,?,?,?,?)");
    $insert->execute([$reqid, $date, $account, $amount, $type, $encoder, $status, $description]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "add new fund request"]);

    header('location: accountingreq.php');


}

?>
