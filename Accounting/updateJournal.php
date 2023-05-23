<?php
include 'connect.php';

session_start();

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input values
    $journal_id = $_POST['journal_id'];
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $account = filter_input(INPUT_POST, 'account', FILTER_SANITIZE_STRING);
    $amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
    $encoder = filter_input(INPUT_POST, 'encoder', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

    if (empty($journal_id)) {
        die("ID not found");
    }

    $select = $conn->prepare("SELECT * FROM `journal` WHERE journal_id = ?");
    $select->execute([$journal_id]);

    $journal_number = $select->fetch(PDO::FETCH_ASSOC);

    $update = $conn->prepare("UPDATE `journal` SET account=?, amount=?, type=?, encoder=?, description=? WHERE journal_id=?");
    $update->execute([$account, $amount, $type, $encoder, $description, $journal_number['journal_id']]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$_SESSION['admin']]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "edit journal"]);

    echo "<script>alert('Edit successfully.'); window.location.href = 'journals.php';</script>";

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



    </body>

</html>