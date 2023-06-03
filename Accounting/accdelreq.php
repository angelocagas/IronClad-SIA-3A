<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_GET['req_id'])) {
    $result = $conn->prepare('SELECT * FROM `requests` WHERE req_id = ?');
    $result->execute([$_GET['req_id']]);
    $user = $result->fetch(PDO::FETCH_ASSOC);

    $result = $conn->prepare('DELETE FROM `requests` WHERE req_id = ?');
    $result->execute([$_GET['req_id']]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "delete request"]);

    header('location: accountingreq.php');

} else {
    header('location: accoutingreq.php');
}

?>
