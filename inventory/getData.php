<?php
	require_once("conn.php");

	$datanum = $_GET["id_data"];


    $sql = 'SELECT  id, item_name, item_description, date_received, date_updated, quantity, purpose FROM tblsupplies WHERE id='.$datanum.'';
    $retval = mysqli_query($conn, $sql);

    if($retval->num_rows>0){
        while($row = $retval->fetch_assoc()){
            echo " <table style='border-spacing: 10px;border-collapse: separate;'>";
        
            echo " <tr>";
            echo " <input class='form-control' type='hidden'  id='id'  value='{$row['id']}'>";
            echo " <input class='form-control' type='hidden'  id='date_updated'  value='{$row['date_updated']}'>";
            echo " <td style='color: #fff;'>Item name: </td><td><input class='form-control' type='text'  id='itemname'  value='{$row['item_name']}'></td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td style='color: #fff;'>Item description: </td><td><input class='form-control' type='text' id='itemdescription' value='{$row['item_description']}'></td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td style='color: #fff;'>Date received: </td><td><input class='form-control'  style='width: 300px;' type='text' id='date_received' value='{$row['date_received']}'></td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td style='color: #fff;'>Quantity: </td><td><input class='form-control' type='text' id='quantity' value='{$row['quantity']}'></td>";
            echo " </tr>";
            echo " <tr>";
            echo " <td style='color: #fff;'>Purpose: </td><td><input class='form-control' type='text' id='purpose' value='{$row['purpose']}'></td>";
            echo " </tr>";
            echo " </table>";
        
        } 
    }
?>