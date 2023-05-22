<?php
try {

	$pdo_conn = new PDO ( "mysql:host=localhost;dbname=dispatchdb;charset=utf8", "root", "" );
	$pdo_conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $exe) {
	echo $exe -> getMessage();
	exit();
}
?>