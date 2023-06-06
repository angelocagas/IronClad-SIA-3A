
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

    $equipname = $_POST['equipname'];
    $equipname = filter_var($equipname);
    
    $checkstat = $_POST['checkstat'];
    $checkstat = filter_var($checkstat);

    $chechktime = $_POST['chechktime'];
    $chechktime = filter_var($chechktime);

    $opname = $_POST['opname'];
    $opname = filter_var($opname);

    $availstat = $_POST['availstat'];
    $availstat = filter_var($availstat);

    $mainstat = $_POST['mainstat'];
    $mainstat = filter_var($mainstat);

    
    $insert = $conn->prepare("INSERT INTO `dispatch` (id, equipname, checkstat, chechktime, opname, availstat, mainstat) VALUES(?,?,?,?,?,?,?)"); 
    $insert->execute([$id, $equipname, $checkstat, $chechktime, $opname, $availstat, $mainstat]);

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$admin]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
    $auditlogin->execute(["admin", $fetch_profile['username'], "invoicing"]);

    header('location: off-rent-plan.php');


}

?>