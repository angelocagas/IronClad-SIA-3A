<?php
include 'connect.php';

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['search'])) {
    ?>


<!-- Hoverable Table rows -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
            <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Request</th>
                    <th>Date and Time of Request</th>
                </tr>
            </thead>
            <tbody>
                <?php
$keyword = $_POST['keyword'];
    $query = $conn->prepare("SELECT * FROM `reset` WHERE `username` LIKE '%$keyword%' or `request` LIKE '%$keyword%' or `timestamp` LIKE '%$keyword%'");
    $query->execute();
    $row_count = 1;
    while ($row = $query->fetch()) {
        ?>
                <tr>
                    <td><?php echo $row_count ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['request'] ?></td>
                    <td><?php echo $row['timestamp'] ?></td>
                    <td><a href="deletepwreq.php?username=<?=$row['username']?>"><i class="btn btn-warning">Reset Password</i></a></td>
                </tr>
                <?php
$row_count++;
    }
    ?>
            </tbody>
        </table>
    </div>
</div>
<?php
} else {
    ?>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Request</th>
                    <th>Date and Time of Request</th>
                </tr>
            </thead>
            <tbody>

                <?php

    $sql = "SELECT * FROM `reset`;";
    $result = $conn->prepare($sql);
    $result->execute();
    $row_count = 1;
    while ($row = $result->fetch()) {
        ?>
                <tr>
                    <td><?php echo $row_count ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['request'] ?></td>
                    <td><?php echo $row['timestamp'] ?></td>
                    <td><a href="deletepwreq.php?username=<?=$row['username']?>" class="btn btn-warning">Reset Password</a></td>
                </tr>
                <?php
$row_count++;
    }
    ?>
            </tbody>
        </table>
    </div>
</div>
<!--/ Hoverable Table rows -->

<?php
}
?>