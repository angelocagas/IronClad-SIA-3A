<?php
require("links.php");
include('./dbcon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the equipment ID and other form fields are set
    if (isset($_POST['equipment_id'], $_POST['equipment_name'], $_POST['equipment_type'], $_POST['last_maintenance'], $_POST['availability'], $_POST['status'])) {
        $equipmentID = $_POST['equipment_id'];
        $equipmentName = $_POST['equipment_name'];
        $equipmentType = $_POST['equipment_type'];
        $lastMaintenance = $_POST['last_maintenance'];
        $status = $_POST['status'];

        // Check if the status is "bad" and force the availability to "Not Available"
        if ($status === "bad" OR $status === "Bad") {
            $availability = "Not Available";
        } else {
            $availability = $_POST['availability'];
        }

        // Update the equipment details in the database
        $sql = "UPDATE equipment_listing SET equipment_name = :equipment_name, equipment_type = :equipment_type, maintenance_date = :last_maintenance, availability = :availability, status = :status WHERE equipment_id = :equipment_id";

        $stmt = $pdocon->prepare($sql);
        $stmt->bindParam(':equipment_id', $equipmentID);
        $stmt->bindParam(':equipment_name', $equipmentName);
        $stmt->bindParam(':equipment_type', $equipmentType);
        $stmt->bindParam(':last_maintenance', $lastMaintenance);
        $stmt->bindParam(':availability', $availability);
        $stmt->bindParam(':status', $status);

        if ($stmt->execute()) {
            // Fetch the updated equipment details
            $selectSql = "SELECT * FROM equipment_listing WHERE equipment_id = :equipment_id";
            $selectStmt = $pdocon->prepare($selectSql);
            $selectStmt->bindParam(':equipment_id', $equipmentID);
            if ($selectStmt->execute()) {
                $row = $selectStmt->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    // Retrieve the relevant equipment details from the row
                    $equipmentName = $row['equipment_name'];
                    $equipmentType = $row['equipment_type'];
                    $historyDate = date('Y-m-d H:i:s'); // Get the current date and time
                    $nameOfAdmin = $_SESSION['fullname'] ?? 'Unknown Admin'; // Set a default value if $_SESSION['fullname'] is empty
                    $actionDone = 'update';

                    // Insert the updated row values into history_tbl
                    $insertSql = "INSERT INTO history_tbl(equipment_id, equipment_name, equipment_type, history_date, name_of_admin, action_done) VALUES (:equipment_id, :equipment_name, :equipment_type, :history_date, :name_of_admin, :action_done)";
                    $insertStmt = $pdocon->prepare($insertSql);
                    $insertStmt->bindParam(':equipment_id', $equipmentID);
                    $insertStmt->bindParam(':equipment_name', $equipmentName);
                    $insertStmt->bindParam(':equipment_type', $equipmentType);
                    $insertStmt->bindParam(':history_date', $historyDate);
                    $insertStmt->bindParam(':name_of_admin', $nameOfAdmin);
                    $insertStmt->bindParam(':action_done', $actionDone);

                    if ($insertStmt->execute()) {
                        echo 'Equipment details updated successfully.';
                        // Redirect to the equipment listing page or perform any other desired action
                        header("Location: equipmentDashboard.php");
                        exit();
                    } else {
                        echo 'Error updating equipment details.';
                    }
                } else {
                    echo 'Equipment not found.';
                }
            } else {
                echo 'Error fetching equipment details.';
            }
        } else {
            echo 'Error updating equipment details.';
        }
    } else {
        echo 'Incomplete form data.';
    }
} else if (isset($_GET['equipment_id'])) {
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

            // Check if the status is "bad" and force the availability to "Not Available"
            if ($status === "bad" OR $status === "Bad") {
                $availability = "Not Available";
            }

            // Output the HTML form for editing the equipment details
            echo '
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <h3 class="card-header">EQUIPMENT ID - ' . $equipmentID . '</h3>
                    <form action="update_equipment.php" method="POST">
                        <input type="hidden" name="equipment_id" value="' . $equipmentID . '">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="equipment_name">Equipment Name:</label>
                                <input type="text" class="form-control" name="equipment_name" value="' . $equipmentName . '">
                            </div>
                            <div class="form-group">
                                <label for="equipment_type">Equipment Type:</label>
                                <input type="text" class="form-control" name="equipment_type" value="' . $equipmentType . '">
                            </div>
                            <div class="form-group">
                                <label for="last_maintenance">Last Maintenance:</label>
                                <input type="date" class="form-control" name="last_maintenance" value="' . $lastMaintenance . '">
                            </div>
                            <div class="form-group">
                                <label for="availability">Availability:</label>
                                <select class="form-control" name="availability">
                                    <option value="available" ' . ($availability = "available" ? "selected" : "") . '>Available for Rental</option>
                                    <option value="in use" ' . ($availability = "in use" ? "selected" : "") . '>In Use</option>
                                    <option value="Not Available" ' . ($availability = "Not Available" ? "selected" : "") . '>Not Available</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" name="status">
                                    <option value="good" ' . ($status === "good" ? "selected" : "") . '>Good</option>
                                    <option value="bad" ' . ($status == "bad" ? "selected" : "") . '>Bad</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button onclick="window.location.href = \'equipmentListing.php\'" class="btn btn-warning">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            ';
        } else {
            echo 'Equipment not found.';
        }
    } else {
        echo 'Error fetching equipment details.';
    }
} else {
    echo 'Equipment ID not provided.';
}
?>

</body>
<?php include './components/helpers.php'; ?>

</html>
