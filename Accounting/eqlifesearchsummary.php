<?php
include 'connect.php';

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['search'])) {
  ?>

  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr class="text-nowrap">
          <th>Entry ID</th>
          <th>Date</th>
          <th>Account</th>
          <th>Amount</th>
          <th>Type</th>
          <th>Encoder</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $fromdate = $_POST['fromdate'];
        $todate = $_POST['todate'];
        $query = $conn->prepare("SELECT * FROM `journal` where `account` like 'equipment lifecycle' and `date` between '$fromdate' and '$todate' ORDER BY `date` ASC");
        $row_count = 1;
        $query->execute();
        while ($row = $query->fetch()) { ?>
          <tr>
            <td>
              <?php echo $row_count ?>
            </td>
            <td>
              <?= $row['date'] ?>
            </td>
            <td>
              <?= $row['account'] ?>
            </td>
            <td>₱
              <?= $row['amount'] ?>
            </td>
            <td>
              <?= $row['type'] ?>
            </td>
            <td>
              <?= $row['encoder'] ?>
            </td>
            <td>
              <?= $row['description'] ?>
            </td>
          </tr>
          <?php
          $row_count++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <?php
} else {
  ?>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr class="text-nowrap">
          <th>Entry ID</th>
          <th>Date</th>
          <th>Account</th>
          <th>Amount</th>
          <th>Type</th>
          <th>Encoder</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = "SELECT * FROM `journal` WHERE `account` LIKE 'equipment lifecycle' ORDER BY `date` ASC";
        $result = $conn->prepare($sql);
        $result->execute();
        $row_count = 1;
        while ($row = $result->fetch()) { ?>
          <tr>
            <td>
              <?php echo $row_count ?>
            </td>
            <td>
              <?= $row['date'] ?>
            </td>
            <td>
              <?= $row['account'] ?>
            </td>
            <td>₱
              <?= $row['amount'] ?>
            </td>
            <td>
              <?= $row['type'] ?>
            </td>
            <td>
              <?= $row['encoder'] ?>
            </td>
            <td>
              <?= $row['description'] ?>
            </td>
          </tr>
          <?php
          $row_count++;
        }
        ?>
      </tbody>
    </table>
  </div>
  <?php
}
?>