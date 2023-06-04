<?php
//echo '<a href="javascript:history.back()" style="color:white">Back</a>';
session_start();
require 'connect.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST['submit'])){
  
    $name=$_POST['name'];
    $dlnum=$_POST['dlnum'];
    $dlenum=$_POST['dlenum'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $acarrier=$_POST['acarrier'];


    if($name == $name){
      $query = "INSERT INTO drivertb VALUES('','$name','$dlnum','$dlenum','$phone','$email','$acarrier')";
      $register = $pdo_conn-> prepare($query);
      $registerexe = $register ->execute();
      header("Refresh: 1; url=driver.php");


}


else{
  $query = "INSERT INTO drivertb VALUES('','$name','$dlnum','$dlenum','$phone','$email','$acarrier')";
  $register = $pdo_conn-> prepare($query);
  $registerexe = $register ->execute();
  header("Refresh: 1; url=driver.php");
}
}

?>
