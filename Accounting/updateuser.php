<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
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
    $phone = ($_POST['phone']);
    $phone = filter_var($phone);
    $address = $_POST['address'];
    $address = filter_var($address);

    $id = $_POST['id'];
    if (!$id) {
        die("ID not found");
    }

    $select = $conn->prepare("SELECT * FROM `users` WHERE username = ?");
    $select->execute([$username]);

    $user = $select->fetch(PDO::FETCH_ASSOC);
    if ($pass != $cpass) {
        echo "<script> alert('Password does not match. Please try again.'); window.location.href = 'tryupdate.php?username=" . urlencode($username) . "'; </script>";
    } else {

        $update = $conn->prepare("UPDATE `users` SET fullname=?, password=?, role=?, phone=?, address=? WHERE id=?");
        $update->execute([$fullname, $cpass, $role, $phone, $address, $user['id']]);

        $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
        $select_profile->execute([$admin]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

        $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
        $auditlogin->execute(["admin", $fetch_profile['username'], "edit user"]);

        echo "<script>alert('Edit successfully.'); window.location.href = 'userlist.php';</script>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <script>
        function myFunction() {
            window.location.href = "userlist.php";
        }
        </script>
    </body>

</html>
