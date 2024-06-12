<?php 
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$database = "inventory";
	$invent_admin = "tbl_admin";
	$supplies = "tblsupplies";
	$conn = new mysqli($servername, $username, $password, $database);

	if($conn->connect_error){
		die("FAILED TO CONNECT : " . $conn->connect_error);
	}
	
 ?>