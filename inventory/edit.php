<!DOCTYPE html>
<html>
<head><title>Add | Inventory</title>
	<link rel="icon" type="image/png" href="img/inventorybox.png">
 	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//designmodo.github.io/Flat-UI/dist/css/flat-ui.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//daneden.github.io/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css">

  	<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/main.js"></script>


<style>
	
 .modal-body
{
    background-color: #333333;
    border-radius: 3px;
}
 


</style>
</head>

			<?php
                  session_start();
                  if (isset($_SESSION["login"]))
                  {
                    

                  }
                  else
                  {
                    header('Location: login.php');
                  }

                ?>

<body>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>
	<div id="wrapper">
        <div class="overlay"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="home.php">
                       Inventory
                    </a>
                </li>
                <li>
                    <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="add.php"><i class="fa fa-fw fa-plus"></i> Add</a>
                </li>
                <li>
                    <a href="edit.php"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                </li>
                <li>
                    <a href="delete.php"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
               
                
            </ul>
        </nav>

           <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
            <div class="container">
            	 <div class="row">
            	 	
                    <div class="col-lg-12">
                   	<center><h2 style="color:#000;font-family: 'Raleway';font-size: 30px;text-shadow: 1px 1px 2px #000000;">Update Data</h2></center>
                    <table id="table_id" class="ui selectable inverted table" cellspacing="0" width="100%">
                    <?php
require_once("conn.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, item_name, item_description, quantity, date_received, date_updated, purpose FROM tblsupplies";
$result = $conn->query($sql);
		echo "<thead>";
		echo "<tr>";
		echo "<th style='text-align:center;'>ID</th>";
		echo "<th style='text-align:center;'>Name</th>";
		echo "<th style='text-align:center;'>Description</th>";
		echo "<th style='text-align:center;'>Quantity</th>";
		echo "<th style='text-align:center;'>Date Received</th>";
		echo "<th style='text-align:center;'>Date Updated</th>";
		echo "<th style='text-align:center;'>Purpose</th>";
		echo "<th style='text-align:center;'>Action</th>";
		echo "</tr>";
		echo "</thead>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["id"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["item_name"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["item_description"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["quantity"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["date_received"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["date_updated"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["purpose"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'><a href='#' class='selectselect' data-id='".$row['id']."' data-itemname='".$row['item_name']."' data-itemdescription='".$row['item_description']."' data-datereceived='".$row['date_received']."' data-updated='".$row['date_updated']."' data-quantity='".$row['quantity']."' data-purpose='".$row['purpose']."' data-toggle='modal' data-target='#modal_update'><button type='button' class='btn btn-success btn-xs'>Update</button> </a></td>";
		echo "</tr>";
	
    }
}
	
?>
	</table>
                    </div>
                   </div>
            </div>
          </div>
       </div>
                   


<script type="text/javascript">
		        		$(document).ready(function(){
		        			$('.selectselect').on('click', function() {

							    var data_id = $(this).data("id");
							    var data_itemname = $(this).data("itemname");
							    var data_itemdescription = $(this).data("itemdescription");
							    var data_received = $(this).data("date_received");
							    var data_updated = $(this).data("updated");
							    var data_quantity = $(this).data("quantity");
							    var data_purpose = $(this).data("purpose");


							    

							    $.ajax({
	                                    url: "getData.php",
	                                    type: "GET",
	                                    data: {'id_data': data_id},
	                                    success: function(data) {
	                                    	$('#data1').html(data);

	                                   	} 
                        			 });

							});
							$('#insert').click(function(){
								var d = new Date();
							    var data_id = document.getElementById('id').value;
							    var data_itemname = document.getElementById('itemname').value;
							    var data_itemdescription = document.getElementById('itemdescription').value;
							    var data_received = document.getElementById('date_received').value;
							    var data_updated = document.getElementById("date_updated").innerHTML = d.toDateString();
							    var data_quantity = document.getElementById('quantity').value;
							    var data_purpose = document.getElementById('purpose').value;
							     
							    if(data_itemname == ""){
							    	alert("Please input name..");
							    	return false;
							    }
							    if(data_itemdescription == ""){
							    	alert("Please input description..");
							    	return false;
							    }
							    if(data_received == ""){
							    	alert("Please input date received..");
							    	return false;
							    }
							    if(data_quantity == ""){
							    	alert("Please input quantity..");
							    	return false;
							    }
							    if(data_purpose == ""){
							    	alert("Please input purpose..");
							    	return false;
							    }

							    $.ajax({
	                                    url: "updateData.php",
	                                    type: "POST",
	                                    data: { 'id': data_id,
	                                			'item_name': data_itemname,
	                                			'item_description': data_itemdescription,
	                                			'date_received': data_received,
	                                			'date_updated': data_updated,
	                                			'quantity': data_quantity,
	                                			'purpose': data_purpose},
	                                    success: function(data) {
	                                    	$('#data2').html(data);
	                                    	location.reload();
	                                    	
	                                   	} 
                        			 });


							});
						});
							
</script>


<div id="modal_update" class="modal fade" role="dialog" data-backdrop="static">
	    <div class="modal-dialog">
	    <!-- Modal content-->
	        <div class="modal-content">
			    
			   
			    <div class="modal-body" align="center">
			    <br>
			    		<h2>Update Data</h2>
			    		<div id="data1"></div>
			    		<br>
			    		<button id="insert" class="btn btn-success" style='width: 100px;'>Update</button>
			    		<button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px;">Close</button>
			    <br>
			    <br>
			    <br>
			    </div>
			    
	        </div>



	    </div>
	</div>
</body>
</html>