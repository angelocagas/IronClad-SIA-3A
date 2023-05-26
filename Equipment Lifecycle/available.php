<?php require("links.php"); ?>
<?php require("dbcon.php"); 

include './components/sidebar.php';
include './components/menuItems.php';
include './components/nav.php';

?>


  <!DOCTYPE html>
<html>
<head>
    <title>Need Repair</title>
</head>
<body>
<div class="divider">
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mt-5">
        <h1 class="card-header mb-4">Ready to Rent</h1>
        <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr class="text-center">
                       <th>Equipment ID</th>
                        <th>Equipment</th>
                        <th>Equipment Type</th>
                        <th>Last Maintenance Date</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th>Actions</th>
                </tr>
            </thead>


            <?php

                    
$sql = "SELECT * FROM equipment_listing WHERE availability = 'available'";
$stmt = $pdocon->prepare($sql);
if ($stmt->execute()) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $equipmentID = $row['equipment_id'];
    $equipmentName = $row['equipment_name'];
    $equipmentType = $row['equipment_type'];
    $lastMaintenance = $row['maintenance_date'];
    $availability = $row['availability'];
    $status = $row['status'];
    $editURL = "update_equipment.php?equipment_id=" . $equipmentID;
    $detailsURL = "equipmentDetails.php?equipment_id=" . $equipmentID;
  
    
    $statusColor = ($status === "bad" OR $status === "Bad") ? "badge bg-label-danger" : "badge bg-label-success";
    $availabilityColor = ($availability === "Not Available") ? "badge bg-label-warning" : "badge bg-label-primary";
    echo '

 <tr class="text-center" onclick="window.location.href=\''.$detailsURL.'\'" style="cursor: pointer;">
      <td >'.$equipmentID.'</td>
      <td>'.$equipmentName.'</td>
      <td>'.$equipmentType.'</td>
      <td>'.$lastMaintenance.'</td>
      <td><span class="badge me-1 '.$availabilityColor.'">'.$availability.'</span></td>
      <td><span class="badge me-1 '.$statusColor.'">'.$status.'</span></td>
      <td class="actions">
      <a href="'.$editURL.'" class="btn btn-outline-primary">EDIT</a>
      <button onclick="confirmDelete('.$equipmentID.' )" type="button" class="btn btn-outline-primary">DELETE</button>
    </td>
  </tr>
 ';
}
}

?>
        </table>


                </div>
    </div>
                </div>
                </div>
</body>
</html>
