<?php
session_start();
require 'connect.php';
    $id=$_POST['id'];
    $pdodelete = "DELETE from operatortb where id=?";
    $pdoresponse = $pdo_conn -> prepare($pdodelete);
    $pdoexe  = $pdoresponse ->execute(array($id));
    $pdoresult= $pdoresponse ->fetch(PDO::FETCH_ASSOC);
        header('location:ManageOperator.php');
?>