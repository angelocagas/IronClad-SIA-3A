<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_GET['username'])) {
    $result = $conn->prepare('SELECT * FROM `users` WHERE username = ?');
    $result->execute([$_GET['username']]);
    $user = $result->fetch(PDO::FETCH_ASSOC);

    $result = $conn->prepare('DELETE FROM `users` WHERE username = ?');
    $result->execute([$_GET['username']]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "delete user"]);

    header('location: userlist.php');

} else {
    header('location: userlist.php');
}

?>
