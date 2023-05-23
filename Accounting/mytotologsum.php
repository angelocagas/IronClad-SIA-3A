<?php
include 'connect.php';

$admin = $_SESSION['admin'];

if (!isset($admin)) {
  header('location:login.php');
}

if (isset($_POST['goto'])) {
?>

  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr class="text-nowrap">
          <th>Date</th>
          <th>Time</th>
          <th>Activity</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $ondate = $_POST['ondate'];
        $username = $_POST['username'];
        
        $query = $conn->prepare("SELECT * FROM `mytoto` where `username` = '$username' and `date` = '$ondate' order by `date` ASC");
        $query->execute();
        while ($row = $query->fetch()) { ?>
          <tr>
            <td>
              <?= $row['date'] ?>
            </td>
            <td>
              <?= $row['time'] ?>
            </td>
            <td>
              <?= $row['activity'] ?>
            </td>
            <td>
              <?= $row['username'] ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<?php
}
?>