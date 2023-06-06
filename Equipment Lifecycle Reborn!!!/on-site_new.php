<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $cusid = $_POST['cus_id'];
    $cusid = filter_var($cusid);
    $cusnam = $_POST['cusnam'];
    $cusnam = filter_var($cusnam);
    $eqnam = $_POST['eqnam'];
    $eqnam = filter_var($eqnam);
    $quan = $_POST['quan'];
    $quan = filter_var($quan);
    $daterent = $_POST['daterent'];
    $daterent = filter_var($daterent);
    $dateretu = $_POST['dateretu'];
    $dateretu = filter_var($dateretu);
    $stat = $_POST['stat'];
    $stat = filter_var($stat);

    
    $insert = $conn->prepare("INSERT INTO `on_site` (cus_id, cus_nam, eq_nam, quan,	date_rent, date_retu, stat) VALUES(?,?,?,?,?,?,?)");
    $insert->execute([$cusid, $cusnam, $eqnam, $quan, $daterent, $dateretu, $stat]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "invoicing"]);

    header('location: on-rent-operations.php');


}

?>
