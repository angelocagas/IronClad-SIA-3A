<?php
include 'connect.php';

$user = $_SESSION['username'];

if (!isset($user)) {
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
        
        $query = $pdo_conn->prepare("SELECT * FROM `mytoto` where `username` = '$username' and `date` = '$ondate' order by `date` ASC ");
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