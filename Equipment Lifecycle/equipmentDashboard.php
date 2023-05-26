<?php require("links.php"); ?>
<?php require("dbcon.php"); 

include './components/sidebar.php';
include './components/menuItems.php';
include './components/nav.php';

?>

<?php
// Retrieve equipment status information
$inUseCount = 0;
$availableCount = 0;
$badCount = 0;

try {
    // Retrieve the count of equipment that is in use
    $inUseSql = "SELECT COUNT(*) AS count FROM equipment_listing WHERE availability = 'in use'";
    $inUseStmt = $pdocon->query($inUseSql);
    $inUseRow = $inUseStmt->fetch(PDO::FETCH_ASSOC);
    $inUseCount = $inUseRow['count'];

    // Retrieve the count of equipment that is available to deploy
    $availableSql = "SELECT COUNT(*) AS count FROM equipment_listing WHERE availability = 'available'";
    $availableStmt = $pdocon->query($availableSql);
    $availableRow = $availableStmt->fetch(PDO::FETCH_ASSOC);
    $availableCount = $availableRow['count'];

    // Retrieve the count of equipment that is in bad condition
    $badSql = "SELECT COUNT(*) AS count FROM equipment_listing WHERE status = 'Bad'";
    $badStmt = $pdocon->query($badSql);
    $badRow = $badStmt->fetch(PDO::FETCH_ASSOC);
    $badCount = $badRow['count'];
} catch (PDOException $e) {
    echo 'Error retrieving equipment status: ' . $e->getMessage();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Equipment Dashboard</title>
</head>
<body>

    <div class="container mt-5">
    <h1 class="mb-4">Equipment Dashboard</h1>

    <div class="row gy-4">
        <div class="col-md-4">
            <a href="inUse.php?availability=in use" class="card-link">
                <div class="card" style="background-color: rgba(0, 123, 255, 0.8);">
                    <div class="card-body text-center">
                        <h5 class="card-title text-white">Equipment in Use</h5>
                        <p class="card-text display-4 text-white"><?php echo $inUseCount; ?></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
        <a href="available.php?availability=available" class="card-link">
            <div class="card" style="background-color: rgba(40, 167, 69, 0.8);">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Equipment Available to Deploy</h5>
                    <p class="card-text display-4 text-white"><?php echo $availableCount; ?></p>
                </div>
            </div>
</a>
        </div>

        <div class="col-md-4">
        <a href="badCondition.php?status=bad" class="card-link">
            <div class="card" style="background-color: rgba(220, 53, 69, 0.8);">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Equipment in Bad Condition</h5>
                    <p class="card-text display-4 text-white"><?php echo $badCount; ?></p>
                </div>
            </div>
</a>
        </div>
        
    </div>
</div>


</body>
<?php 
include './components/helpers.php'
?>
</html>
