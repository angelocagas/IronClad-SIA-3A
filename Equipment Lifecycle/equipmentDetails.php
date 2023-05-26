<?php require("links.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Equipment Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include './dbcon.php';

if (isset($_GET['equipment_id'])) {
  $equipmentID = $_GET['equipment_id'];

  // Fetch the equipment details from the database based on the equipment ID
  $sql = "SELECT * FROM equipment_listing WHERE equipment_id = :equipment_id";
  $stmt = $pdocon->prepare($sql);
  $stmt->bindParam(':equipment_id', $equipmentID);
  if ($stmt->execute()) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      // Retrieve the relevant equipment details from the row
      $equipmentName = $row['equipment_name'];
      $equipmentType = $row['equipment_type'];
      $lastMaintenance = $row['maintenance_date'];
      $availability = $row['availability'];
      $status = $row['status'];
      $need_repair = $row['need_repair'];
      $last_update = $row['last_update'];
      $warranty_expiration_date = $row['warranty_expiration_date'];
      $purchase_date = $row['purchase_date'];

      $statusColor = ($status === "bad" OR $status === "Bad") ? "danger" : "success";
      $availabilityColor = ($availability = "Not Available") ? "warning" : "primary";

    }
  }

}
?>
      <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <button onclick="window.location.href = 'equipmentListing.php'" type="button" class="btn btn-default btn-lg ms-1 mb-3 rounded-3">
                <span class="glyphicon glyphicon-arrow-left"></span>
              </button>
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./equipmentDashboard.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="./equipmentListing.php">Listing</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Equipment Details</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="./assets/img/elements/12.jpg" alt="avatar" class="rounded-3 img-fluid" style="width: 200px;">
                  <h5 class="my-3">Equipment ID : <?= $equipmentID ?></h5>
                  <div class="d-flex justify-content-center mb-2">
                  </div>
                </div>
              </div>
              <div class="card mb-4 pt-3 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                      <p class="mb-0">Last Maintenance: </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                      <p class="mb-0"><?= $lastMaintenance ?></p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                      <p class="mb-0"></p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                      <p class="mb-0"></p>
                    </li>
                    <li class="list-group-item d-flex justify-content-center align-items-center p-3">
  <i class="fas fa-globe fa-lg text-warning"></i>
  <?php if ($availability = "Not Available"): ?>
    <p class="mb-0">
      <button type="button" class="btn btn-outline-info border border-info" disabled style="display: none;">READY FOR DEPLOYMENT</button>
    </p>
    <p class="mb-0">
      <button type="button" class="btn btn-outline-danger border border-danger">SEND REPAIR TICKET</button>
    </p>
  <?php elseif ($availability = "available"): ?>
    <p class="mb-0">
      <button type="button" class="btn btn-outline-info border border-info">READY FOR DEPLOYMENT</button>
    </p>
    <p class="mb-0">
      <button type="button" class="btn btn-outline-danger border border-danger" disabled style="display: none;">SEND REPAIR TICKET</button>
    </p>
  <?php elseif ($availability = "in use"): ?>
    <p class="mb-0" style="display: none;">
      <button type="button" class="btn btn-outline-info border border-info" disabled>READY FOR DEPLOYMENT</button>
      <button type="button" class="btn btn-outline-danger border border-danger" disabled>SEND REPAIR TICKET</button>
    </p>
  <?php endif; ?>
</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Equipment</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $equipmentName ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Equipment type</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $equipmentType ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Purchase Date</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $purchase_date ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Warranty Expiration</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $warranty_expiration_date ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Last Update By Admin</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">jozu</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4 mb-md-0">
                    <div class="card-body badge bg-label-<?= $availabilityColor ?> border border-<?= $availabilityColor ?>">
                      <h1 class="mb-1 pb-5 pt-4" style="font-size: 1.2rem; "><?= $availability ?></h1>
                      <!-- Add more equipment details here -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4 mb-md-0">
                    <div class="card-body badge bg-label-<?= $statusColor ?> border border-<?= $statusColor ?>">
                      <h1 class="mb-1 pb-5 pt-4" style="font-size: 1.2rem; "><?= $status ?></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</body>
<?php
include './components/helpers.php';
?>


</html>
