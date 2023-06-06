<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_GET['cus_id'])) {
    $result = $conn->prepare('SELECT * FROM `on_site` WHERE cus_id = ?');
    $result->execute([$_GET['cus_id']]);
    $user = $result->fetch(PDO::FETCH_ASSOC);

    $result = $conn->prepare('DELETE FROM `on_site` WHERE cus_id = ?');
    $result->execute([$_GET['cus_id']]);


    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "delete user"]);

    header('location:on-rent-operations.php');

} else {
    header('location: on-rent-operations.php');
}

?>
