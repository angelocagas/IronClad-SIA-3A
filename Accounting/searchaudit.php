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
          <th>Audit ID</th>
          <th>Role</th>
          <th>Username</th>
          <th>Action</th>
          <th>Timestamp</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $start = 0;
        $rps = 13;
        $keyword = $_POST['keyword'];

        $countsql = $conn->prepare("SELECT COUNT(*) from `audit` WHERE `username` LIKE '%$keyword%' or `action` LIKE '%$keyword%' or `role` LIKE '%$keyword%' or `timestamp` LIKE '%$keyword%'");
        $countsql->execute();
        $norows = $countsql->fetch();
        $numrecords = $norows[0];

        $pages = ceil($numrecords / $rps);

        if (isset($_GET['page-nr1'])) {
          $page = $_GET['page-nr1'] - 1;
          $start = $page * $rps;
        }

        $query = $conn->prepare("SELECT * FROM `audit` WHERE `username` LIKE '%$keyword%' or `action` LIKE '%$keyword%' or `role` LIKE '%$keyword%' or `timestamp` LIKE '%$keyword%' ORDER BY `audit_id` DESC LIMIT $start, $rps");
        $query->execute();
        while ($row = $query->fetch()) { ?>
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

<?php
} else {
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
        
        $start = 0;
        $rps = 13;

        $countsql = $conn->prepare("SELECT COUNT(`audit_id`) from `audit`");
        $countsql->execute();
        $norows = $countsql->fetch();
        $numrecords = $norows[0];

        $pages = ceil($numrecords / $rps);

        if (isset($_GET['page-nr'])) {
          $page = $_GET['page-nr'] - 1;
          $start = $page * $rps;
        }
        $sql = "SELECT * FROM `audit` ORDER BY `audit_id` DESC LIMIT $start, $rps";
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
<?php
}
?>