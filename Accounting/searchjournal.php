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
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $start = 0;
        $rps = 20;
        $keyword = $_POST['keyword'];

        $countsql = $conn->prepare("SELECT COUNT(*) from `journal` WHERE `date` LIKE '%$keyword%' or `account` LIKE '%$keyword%' or `amount` LIKE '%$keyword%' or type LIKE '%$keyword%' or encoder LIKE '%$keyword%' or description LIKE '%$keyword%'");
        $countsql->execute();
        $norows = $countsql->fetch();
        $numrecords = $norows[0];

        $pages = ceil($numrecords / $rps);

        if (isset($_GET['page-nr1'])) {
          $page = $_GET['page-nr1'] + 1;
          $start = $page * $rps;
        }

        $query = $conn->prepare("SELECT * FROM `journal` WHERE `date` LIKE '%$keyword%' or `account` LIKE '%$keyword%' or `amount` LIKE '%$keyword%' or type LIKE '%$keyword%' or encoder LIKE '%$keyword%' or description LIKE '%$keyword%'");
        $query->execute();
        while ($row = $query->fetch()) { ?>
          <tr>
            <td><?= $row['journal_id'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['account'] ?></td>
            <td>₱ <?= $row['amount'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['encoder'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="tryEditJournal.php?journal_id=<?=$row['journal_id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                </div>
              </div>
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
          <th>Entry ID</th>
          <th>Date</th>
          <th>Account</th>
          <th>Amount</th>
          <th>Type</th>
          <th>Encoder</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $start = 0;
        $rps = 10;

        $countsql = $conn->prepare("SELECT COUNT(`journal_id`) from `journal`");
        $countsql->execute();
        $norows = $countsql->fetch();
        $numrecords = $norows[0];

        $pages = ceil($numrecords / $rps);

        if (isset($_GET['page-nr'])) {
          $page = $_GET['page-nr'] - 1;
          $start = $page * $rps;
        }

        $sql = "SELECT * FROM `journal` LIMIT $start, $rps";
        $result = $conn->prepare($sql);
        $result->execute();
        while ($row = $result->fetch()) { ?>
          <tr>
            <td><?= $row['journal_id'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['account'] ?></td>
            <td>₱ <?= $row['amount'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['encoder'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="tryEditJournal.php?journal_id=<?=$row['journal_id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                </div>
              </div>
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