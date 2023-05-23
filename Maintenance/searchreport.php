

<?php
include('dbcon.php');


if(isset($_POST["query"]) && isset($_POST["query2"])  )     
{

$q = $_POST["query"];
$q2 = $_POST["query2"];
$results = $pdocon->prepare("SELECT * FROM maintenance_tbl WHERE date BETWEEN ? AND ?
");
$results->execute(array($q,$q2));

}
else
{
 
 $results = $pdocon->prepare("SELECT * FROM `maintenance_tbl` ORDER BY `date` DESC");
 $results->execute();
}


while($row = $results->fetch(PDO::FETCH_ASSOC))
{
  $ordinace = $row["equipment_id"];
	 echo '<tr onclick="javascript:showRow(this);">' . 
     
    '<td>' . $row['equipment_id'] . '</td>' . 
    '<td>' . $row['equipment_type'] . '</td>' .
    '<td>' . $row['technician_id'] . '</td>' . 
    '<td>' . $row['technician_name'] . '</td>' .
    '<td>' . $row['repair'] . '</td>' . 
    '<td>' . $row['status'] . '</td>' .
    '<td>' . $row['date'] . '</td>' .
    '<td>'?> 
	<?php echo'</tr>';
} 

?>

