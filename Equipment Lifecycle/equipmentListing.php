<?php require("links.php");
?>




<?php
include './components/sidebar.php';
include './components/menuItems.php';
include './components/nav.php';
 ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->




          <!-- Total Revenue -->
          <div class="divider">
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->

              <div class="card">
                <h5 class="card-header">LISTING OF EQUIPMENTS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead class="table-primary">
                      <tr class="text-center">
                        <th>Equipment ID</th>
                        <th>Equipment</th>
                        <th>Equipment Type</th>
                        <th >Last Maintenance Date</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>





                    
                    <?php

                    
    $sql = "SELECT * FROM equipment_listing";
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
        $availabilityColor = ($availability == "Not Available") ? "badge bg-label-warning" : "badge bg-label-primary";
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
              <!--/ Basic Bootstrap Table -->

            </div>
          </div>
          <!--/ Total Revenue -->

        </div>

      </div>
      <!-- / Content -->



      <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
  </div>
  <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <script>
  function confirmDelete(equipmentID) {
    if (confirm('Are you sure you want to delete this row?')) {
      window.location.href = './components/delete.php?deleteID=' + equipmentID;
    }
    event.stopPropagation();
  }
</script>
</body>
<?php
include  './components/helpers.php'
?>


</html>