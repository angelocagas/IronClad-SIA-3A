<?php require("links.php"); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="content">
        <!-- Total Revenue -->
        <div class="divider">
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">HISTORY REPORT</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead class="table-primary">
                                <tr class="text-center">
                                    <th>Equipment ID</th>
                                    <th>Equipment Name</th>
                                    <th>Equipment Type</th>
                                    <th>Date</th>
                                    <th>Admin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT `equipment_id`, `equipment_name`, `history_date`, `name_of_admin`,`equipment_type`, `action_done` FROM `history_tbl`";
                            $stmt = $pdocon->prepare($sql);
                            $stmt->execute();
                            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($rows as $row) {
                                $equipmentID = $row['equipment_id'];
                                $equipmentName = $row['equipment_name'];
                                $equipmentType = $row['equipment_type'];
                                $historyDate = $row['history_date'];
                                $adminName = $row['name_of_admin'];
                                $actionDone = $row['action_done'];

                                echo '
                                    <tr class="text-center">
                                        <td>' . $equipmentID . '</td>
                                        <td>' . $equipmentName . '</td>
                                        <td>' . $equipmentType . '</td>
                                        <td>' . $historyDate . '</td>
                                        <td>' . $adminName . '</td>
                                        <td ';
                                        
                                if ($actionDone == 'Delete') {
                                    echo 'style="color: reD;"';
                                } elseif ($actionDone == 'update') {
                                    echo 'style="color: blue;"';
                                }
                                elseif ($actionDone == 'ADD') {
                                  echo 'style="color: lightGreen;"';
                              }
                                
                                echo '>' . strtoupper($actionDone) . '</td>
                                    </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->

                <!-- Print Button -->
                <button onclick="window.print()" class="btn btn-primary mt-5">Print</button>
            </div>
        </div>
        <!--/ Total Revenue -->
    </div>
</div>
<!-- / Content -->
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

</body>