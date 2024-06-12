<?php
	require_once("conn.php");
    $id= $_POST["id"];
	$item_name=$_POST["item_name"];
    $item_description=$_POST["item_description"];
    $date_received=$_POST["date_received"];
    $date_updated=$_POST["date_updated"];
    $quantity=$_POST["quantity"];
    $purpose=$_POST["purpose"];


    $sql = "UPDATE tblsupplies SET item_name='$item_name', item_description='$item_description', date_received='$date_received',date_updated='$date_updated', quantity='$quantity', purpose='$purpose' WHERE id='$id'";
   if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>