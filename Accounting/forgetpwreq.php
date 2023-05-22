<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $username = filter_var($username);
    $request = $_POST['req'];
    $request = filter_var($request);

    $insert = $conn->prepare("INSERT INTO `reset` (username, request) VALUES(?,?)");
    $insert->execute([$username, "forgot password"]);

    header('location: login.php');
} else {
    header('location: login.php');
}

?>
