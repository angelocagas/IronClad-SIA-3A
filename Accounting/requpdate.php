<?php
include 'connect.php';

session_start();

$admin= $_SESSION['admin'];

if(!isset($admin)){
   header('location:login.php');
};

if(isset($_POST['update'])){

   $date = $_POST['date'];
   $date = filter_var($date);
   $account = $_POST['account'];
   $account = filter_var($account);
   $amount = $_POST['amount'];
   $amount = filter_var($amount);
   $type = $_POST['type'];
   $type = filter_var($type);
   $encoder = $_POST['encoder'];
   $encoder = filter_var($encoder);
   $status = $_POST['status'];
   $status = filter_var($status);
   $description = $_POST['description'];
   $description = filter_var($description);
   
   $update_req = $conn->prepare("UPDATE `requests` SET `status` = `approved` WHERE id =" . $_GET['id']);
   $update_req->execute([$status]);

   header('location: accountingreq.php');
   

}

?>