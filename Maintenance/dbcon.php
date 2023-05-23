<?php

$pdocon = new PDO( 'mysql:host=localhost;dbname=maintenance_db', $dbuser="root",  $dbpass="" );

// Check connection
if (isset($pdocon)) {
 
}else{ echo "Failed to connect to MySQL: ";
  exit();}
?>