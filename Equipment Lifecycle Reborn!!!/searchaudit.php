<?php
include 'connect.php';

$admin = $_SESSION['admin'];

?>



  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr class="text-nowrap">
          <th>Audit ID</th>
          <th>Role</th>
          <th>Username</th>
          <th>Action</th>
          <th>Timestamp</th>
        </tr>
      </thead>
      <tbody>
      
        <?php

        $sql = "SELECT * FROM `audit` ORDER BY `audit_id` DESC ";
        $result = $conn->prepare($sql);
        $result->execute();
        while ($row = $result->fetch()) { ?>
          <tr>
            <td><?= $row['audit_id'] ?></td>
            <td><?= $row['role'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['action'] ?></td>
            <td><?= $row['timestamp'] ?></td>
          </tr>
      <?php
        }
        ?>
      </tbody>
    </table>
  </div>
