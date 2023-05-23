<?php 
require "dbcon.php";
session_start();

$_SESSION['maintenancepart'] = $_POST['mainpart'];

if(isset($_POST['waitingpart'])){

     $results = $pdocon->prepare("SELECT * FROM maintenance_tbl WHERE maintenance_id = ?");
     $results->execute(array($_POST['waitingpart']));
     $row = $results->fetch(PDO::FETCH_ASSOC);
   
     $add_maintenance_query = "INSERT INTO history_tbl 
     (maintenance_id, equipment_id, equipment_type, date, technician_id, technician_name, status)
      VALUE(?,?,?,?,?,?,?)";
       $add_maintenance_prepare = $pdocon -> prepare($add_maintenance_query);
       $add_maintenance_exe = $add_maintenance_prepare ->
       execute(array($_POST['waitingpart'],$row['equipment_id'], $row['equipment_type'],date('Y-m-d'),$_SESSION['id'],$_SESSION['fullname'],'Approved'));
    
     $approve_part = "UPDATE maintenance_tbl SET status = 'Ongoing' WHERE maintenance_id = (?)";
     $approve_prepare = $pdocon -> prepare($approve_part);
     $approve_exe = $approve_prepare->execute(array($_POST['waitingpart']));
  

     $approve_part = "UPDATE parts_tbl SET status = 'Approved' WHERE maintenance_id = (?)";
     $approve_prepare = $pdocon -> prepare($approve_part);
     $approve_exe = $approve_prepare->execute(array($_POST['waitingpart']));


     $equipquery = "UPDATE equipment_tbl SET status = 'Ongoing Maintenance' , maintenance_quality = '5' WHERE equipment_id = (?)";
     $equip_prep = $pdocon -> prepare($equipquery);
     $equipexe = $equip_prep->execute(array($row['equipment_id'],));

     $actquery = "INSERT INTO activitylog_tbl
     ( user_id, user_fullname, activity,maintenance_id, date, time, role)
      VALUE(?,?,?,?,?,?,?)";
       $actprep = $pdocon -> prepare($actquery);
       $actexe = $actprep ->
       execute(array($_SESSION['id'],$_SESSION['fullname'],'Approving parts',$_POST['waitingpart'], date('Y-m-d'),time(),$_SESSION['role'] ));
    
    

}


if(isset($_POST['ongoingpart'])){
     $results = $pdocon->prepare("SELECT * FROM maintenance_tbl WHERE maintenance_id = ?");
     $results->execute(array($_POST['ongoingpart']));
     $row = $results->fetch(PDO::FETCH_ASSOC);

     $add_maintenance_query = "INSERT INTO history_tbl 
     (maintenance_id, equipment_id, equipment_type, date, technician_id, technician_name, status)
      VALUE(?,?,?,?,?,?,?)";
       $add_maintenance_prepare = $pdocon -> prepare($add_maintenance_query);
       $add_maintenance_exe = $add_maintenance_prepare ->
       execute(array($_POST['ongoingpart'],$row['equipment_id'], $row['equipment_type'],date('Y-m-d'),$_SESSION['id'],$_SESSION['fullname'],'Finish'));
    
       $approve_part = "UPDATE maintenance_tbl SET status = 'Ready' WHERE maintenance_id = (?)";
     $approve_prepare = $pdocon -> prepare($approve_part);
     $approve_exe = $approve_prepare->execute(array($_POST['ongoingpart']));

     

     $equipquery = "UPDATE equipment_tbl SET status = 'Available' , maintenance_quality = '5' WHERE equipment_id = (?)";
     $equip_prep = $pdocon -> prepare($equipquery);
     $equipexe = $equip_prep->execute(array($_POST['ongoingeqid']));
     
     $actquery = "INSERT INTO activitylog_tbl
     ( user_id, user_fullname, activity, maintenance_id, date, time, role)
      VALUE(?,?,?,?,?,?,?)";
       $actprep = $pdocon -> prepare($actquery);
       $actexe = $actprep ->
       execute(array($_SESSION['id'],$_SESSION['fullname'],'Finishing maintenance',$_POST['ongoingpart'],date('Y-m-d'),time(),$_SESSION['role'] ));
    

    

}
?>