<?php
	$del_id = $_POST["del_id"];
	
	session_start();
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	
	$polaczenie->query("DELETE FROM samochody WHERE id=$del_id;");
	
	$polaczenie->close();
	header("Location: admin-work.php");
?>