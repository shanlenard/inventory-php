<?php

require_once("conn.php");

$data_points = array();
$result = mysqli_query($conn, "SELECT * FROM $supplies");
while($row = mysqli_fetch_array($result))
{
$point = array("indexLabel" => $row['item_name'] , "y" => $row['quantity']);
array_push($data_points, $point);
}
echo json_encode($data_points, JSON_NUMERIC_CHECK);

mysqli_close($conn);
?>