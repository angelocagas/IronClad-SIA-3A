<?php

include 'connect.php';

session_start();
$admin = $_SESSION['admin'];

if($_SESSION['admin']){
    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "logout"]);

}else{}

session_unset();
session_destroy();
header('location:login.php');
?>