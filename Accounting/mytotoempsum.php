<?php
include 'connect.php';

$admin = $_SESSION['admin'];

if (!isset($admin)) {
  header('location:login.php');
}

if (isset($_POST['show'])) {
?>

  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr class="text-nowrap">
          <th>Employee ID</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Department</th>
          <th>Position</th>
          <th>Annual Salary</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $dept = $_POST['department'];
        $query = $conn->prepare("SELECT * FROM `salary` where `department` = '$dept'");
        $query->execute();
        while ($row = $query->fetch()) { ?>
          <tr>
            <td>
              <?= $row['emp_id'] ?>
            </td>
            <td>
              <?= $row['username'] ?>
            </td>
            <td>
              <?= $row['fullname'] ?>
            </td>
            <td>
              <?= $row['department'] ?>
            </td>
            <td>
              <?= $row['position'] ?>
            </td>
            <td>₱ 
              <?= $row['annual_salary'] ?>
            </td>
          </tr>
        <?php
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
          <th>Employee ID</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Department</th>
          <th>Position</th>
          <th>Annual Salary</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = ("SELECT * FROM `salary`");
        $result = $conn->prepare($sql);
        $result->execute();
        while ($row = $result->fetch()) { ?>
          <tr>
            <td>
              <?= $row['emp_id'] ?>
            </td>
            <td>
              <?= $row['username'] ?>
            </td>
            <td>
              <?= $row['fullname'] ?>
            </td>
            <td>
              <?= $row['department'] ?>
            </td>
            <td>
              <?= $row['position'] ?>
            </td>
            <td>
              <?= $row['annual_salary'] ?>
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