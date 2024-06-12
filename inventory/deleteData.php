<?php
	require_once("conn.php");
    $id= $_POST["id"];


   $sql = "DELETE FROM $supplies WHERE id=$id";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>