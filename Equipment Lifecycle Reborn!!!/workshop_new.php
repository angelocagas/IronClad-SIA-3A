<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $id = filter_var($id);

    $maintenance_id = $_POST['maintenance_id'];
    $maintenance_id = filter_var($maintenance_id);

    $equipment_id = $_POST['equipment_id'];
    $equipment_id = filter_var($equipment_id);

    $equipment_type = $_POST['equipment_type'];
    $equipment_type = filter_var($equipment_type);

    $repair = $_POST['repair'];
    $repair = filter_var($repair);

    $parts = $_POST['parts'];
    $parts = filter_var($parts);

    $parts_price = $_POST['parts_price'];
    $parts_price = filter_var($parts_price);

    $date = $_POST['date'];
    $date = filter_var($date);

    $technician_name = $_POST['technician_name'];
    $technician_name = filter_var($technician_name);

    $technician_id = $_POST['technician_id'];
    $technician_id = filter_var($technician_id);

    $status = $_POST['status'];
    $status = filter_var($status);

    
    $insert = $conn->prepare("INSERT INTO `maintenance` (id, maintenance_id, equipment_id, equipment_type, repair, parts, parts_price, date, technician_name, technician_id, status) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
     $insert->execute([$id, $maintenance_id, $equipment_id, $equipment_type, $repair, $parts, $parts_price, $date, $technician_name, $technician_id, $status]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "invoicing"]);

    header('location: workshop-periodic.php');


}

?>
