<?php
	require_once("conn.php");

	$datanum = $_GET["id_data"];


    $sql = 'SELECT  id FROM tblsupplies WHERE id='.$datanum.'';
    $retval = mysqli_query($conn, $sql);

    if($retval->num_rows>0){
        while($row = $retval->fetch_assoc()){
          
            echo " <input class='form-control' type='hidden'  id='id'  value='{$row['id']}'>";
          
          
        
        } 
    }
?>