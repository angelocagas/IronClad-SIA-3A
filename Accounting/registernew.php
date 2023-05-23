<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $empid = $_POST['empid'];
    $empid = filter_var($empid);
    $fullname = $_POST['fullname'];
    $fullname = filter_var($fullname);
    $username = $_POST['username'];
    $username = filter_var($username);
    $pass = ($_POST['pass']);
    $pass = filter_var($pass);
    $cpass = ($_POST['cpass']);
    $cpass = filter_var($cpass);
    $role = $_POST['role'];
    $role = filter_var($role);
    $department = $_POST['department'];
    $department = filter_var($department);
    $email = ($_POST['email']);
    $email = filter_var($email);
    $phone = ($_POST['phone']);
    $phone = filter_var($phone);
    $address = $_POST['address'];
    $address = filter_var($address);

    $select = $conn->prepare("SELECT * FROM `users` WHERE username = ?");
    $select->execute([$username]);
    

    if ($select->rowCount() > 0) {
        $message[] = 'user already exist!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            $insert = $conn->prepare("INSERT INTO `users`(emp_id, fullname, username, password, role, email, department, phone, address) VALUES(?,?,?,?,?,?,?,?,?)");
            $insert->execute([$empid, $fullname, $username, $cpass, $role, $email, $department, $phone, $address]);

            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$admin]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

            $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
            $auditlogin->execute(["admin", $fetch_profile['username'], "add user"]);

            header('location: userlist.php');


        }
    }
}

?>
