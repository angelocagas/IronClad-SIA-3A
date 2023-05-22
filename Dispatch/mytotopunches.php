<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
  
}

if (isset($_POST['submit'])) {

    $activity = $_POST['activity'];
    $activity = filter_var($activity);
    $username = ($_POST['username']);
    $username = filter_var($username);
    
    $insert = $pdo_conn->prepare("INSERT INTO `mytoto` (activity, username) VALUES(?,?)");
    $insert->execute([$activity, $username]);

    header('location: mytotoa.php');


}

?>
