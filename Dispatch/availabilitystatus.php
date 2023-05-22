<?php

session_start();
require('connect.php');
$pdosearch="SELECT * FROM checkpointtb";
$pdoresponse = $pdo_conn -> prepare($pdosearch);
$pdoexe = $pdoresponse ->execute();
$pdoresult = $pdoresponse ->fetchAll();
if(isset($_POST['delete'])){
     header('location:dashboard.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $('button').click(function(){
	di = $(this).attr('id')
	$.ajax({url: "delete.php",
		method:'post',
		data:{id:di},
		success: function(result){
    $(".modal-body").html(result);

    

    
  }});

  });
  
});



$(document).ready(function(){
  $('input').click(function(){
	lol = $(this).attr('id')
	$.ajax({url:'update.php',
		method:'POST',
		data:{id:lol},
		success: function(result)
          {
    $(".modal-body").html(result);
   

    
  }});

  });
  
});
</script>
</head>

<body style="background-color:#eeeee4;">
<style>
.card {

  background-color: #8448D4;
} 
.container{
     border-radius:10px;
}
</style>
 <br>
 

 <div class="container" style="background-color:white";>
 <br>

 <div class="card">
     
 <div class="card-header">
     
     <br>
     
     <h3 class="text-dark" style="font-family:bold">  <i class="fa fa-list" style="font-size:35px">   Availabity Status </i></h3>   
<a href="javascript:history.back()" style="font-family: bold; font-size:18px; width:7%" class="btn btn-dark my-3 text-light" style="text-color:white; width: 13%; font-family:arial">Back</a>
<div class="row">


</div>
</div>
</div>

               <div class="card-body">
                    <table class="table table-bordered table-striped">
                    
                    <tr>
                    <th style="font-family: Arial"class="table-dark">ID</th>
                         <th style="font-family: Arial"class="table-dark">Equipment Name</th>
                         <th style="font-family: Arial"class="table-dark">Checkpoint Status</th>
                         <th style="font-family: Arial"class="table-dark">Checkpoint Time</th>

                         <th style="font-family: Arial"class="table-dark">Availability Status</th>
                     
                    </tr>
              
               <tbody>
                    
                    <form method ="post">
                    <?php
                     foreach ($pdoresult as $result){
                      
                      $id = $result['id'];
                      $equipname = $result['equipname'];
                      $checkstat = $result['checkstat'];
                      $checktime = $result['checktime'];
                      
                      $availstat = $result['availstat'];
                     
                              
                          
                    ?>
                              <tr>
                                   <td style="font-family: arial; color:#21130d"><?php echo $id; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $equipname; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $checkstat; ?></td>
                                   <td style="font-family: arial; color:#21130d"><?php echo $checktime; ?></td>
             
                                   <td style="font-family: arial; color:#21130d"><?php echo $availstat; ?></td>
                                  
                    <?php
                         }
                    
                    ?>
                    </form>
               </tbody>
          </table>
</div>

  </div>
  </div>
</div>




</body>
</html>