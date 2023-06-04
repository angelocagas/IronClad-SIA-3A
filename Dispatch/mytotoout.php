<?php

include 'connect.php';

session_start();
$admin = $_SESSION['admin'];

if($_SESSION['admin']){
    $select_profile = $pdo_conn->prepare("SELECT * FROM `admintb` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $pdo_conn->prepare("INSERT INTO `audittb`(username, activity, actdate, acttime) VALUES(?,?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "mytoto logout"]);

}else{}
header('location:dashboard.php');
?>