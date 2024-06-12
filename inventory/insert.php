<?php
	require_once("conn.php");

	$itemname = $_POST["item_name"];
	$itemdescription = $_POST["item_description"];
	$date_received = $_POST["date_received"];
	$quantity = $_POST["quantity"];
	$purpose = $_POST["purpose"];

	$sql = "INSERT INTO $supplies (item_name, item_description, date_received, quantity, purpose) VALUES ('$itemname', '$itemdescription',  '$date_received', '$quantity', '$purpose')";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>