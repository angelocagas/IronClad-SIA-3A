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

    $cusid = $_POST['cus_id'];
    if (!$cusid) {
        die("ID not found");
    }

    $select = $conn->prepare("SELECT * FROM `on_site` WHERE cus_id = ?");
    $select->execute([$cus_id]);

    $user = $select->fetch(PDO::FETCH_ASSOC);
    if ($pass != $cpass) {
       
    } else {

        $update = $conn->prepare("UPDATE `on_site` SET cus_id=?, cus_nam=?, eq_nam=?, quan=?, date_rent=?, date_retu=?, stat=?, WHERE cus_id=?");
        $update->execute([$cusid, $cusnam, $eqnam, $quan, $daterent, $dateretu, $stat['cus_id']]);

        $select_profile = $conn->prepare("SELECT * FROM `on_site` WHERE cus_id = ?");
        $select_profile->execute([$admin]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

        $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
        $auditlogin->execute(["admin", $fetch_profile['username'], "edit user"]);

        echo "<script>alert('Edit successfully.'); window.location.href = 'on-site-operations.php';</script>";

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
            window.location.href = "on-rent-operations.php";
        }
        </script>
    </body>

</html>
