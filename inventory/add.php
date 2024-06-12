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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/main.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/Lobibox.min.css"/>
    <script src="js/Lobibox.js"></script>
    <script src="js/demo.js"></script>

<style>
.panel-body {
	background-color: #2B2B2B;
	border-radius: 3px;
	width:100%;
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
	$(document).ready(function() {
    $('#table_id').DataTable({
    	
    	 


    });
});

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
            	 	<div class="col-sm-12">
            	 	<center><h1 style="color:#000;font-family: 'Raleway';font-size: 30px;text-shadow: 1px 1px 2px #000000;">Add item</h1></center>
            	
            	 	</div>
            	 </div>
            	 

            	 	
            	 	<div class="row">
                    <div class="col-sm-12">
                    <center>
                    	<table  style="border-spacing: 10px;border-collapse: separate;">
						      <tr>
						      <td>
    							<label style="color:#000;">Item name:</label>
    						  </td>
    						  <td> 
    								<input class="form-control" name="date_received" type="hidden" id="date_received">
    								<input class="form-control" style="width: 300px;" placeholder="Name" name="itemname" type="text" id="itemname">
    				 		  </td>
    				 		  </tr>
    				 		  <tr>
    				 		  <td>
    							<label style="color:#000;">Item description:</label>
    						  </td>
    						  <td>
			    					<input class="form-control" style="width: 350px;" placeholder="Description" name="itemdescription" type="text" id="itemdescription">
			    			  </td>
			    			  </tr>
			    			  <tr>
			    			  <td>
    								<label style="color:#000;">Item quantity:</label>
    						  </td>
    						  <td>
    								<input class="form-control" style="width: 200px;" placeholder="Quantity" name="quantity" type="text" id="quantity">
    						  </td>
    						  </tr>
    						  <tr>
    						  <td>
			    				<label style="color:#000;">Item purpose:</label>
			    			  </td>
			    			  <td>
    								<input class="form-control" style="width: 370px;" placeholder="Purpose" name="purpose" type="text" id="purpose">
    						  </td>
    						  </tr>
    						  <tr>
    						  <td colspan="2">
    							<center><button id="insert" class="btn btn-default" style="width: 100px;">Add</button></center>
    						  </td>
    						  </tr>
    						  </table>
                    	</center>
                    <?php
require_once("conn.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, item_name, item_description, quantity, date_received, purpose FROM tblsupplies";
$result = $conn->query($sql);
		echo "<table id='table_id' class='ui selectable inverted table' cellspacing='0' width='100%'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th style='text-align:center;'>Name</th>";
		echo "<th style='text-align:center;'>Description</th>";
		echo "<th style='text-align:center;'>Quantity</th>";
		echo "<th style='text-align:center;'>Date Received</th>";
		echo "<th style='text-align:center;'>Purpose</th>";
		echo "</tr>";
		echo "</thead>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["item_name"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["item_description"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["quantity"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["date_received"]."</td>";
		echo "<td style='text-align:center; vertical-align:middle;'>".$row["purpose"]."</td>";
		echo "</tr>";
    }
}
	echo "</table>";
?>

                   
                    
                    </div>
                   </div>
          </div>
       </div>
                   

<div id="modal_update" class="modal fade" role="dialog" data-backdrop="static">
	    <div class="modal-dialog">
	    <!-- Modal content-->
	        <div class="modal-content">
			    <div class="modal-header" align="center">
			    	<h2><font color="#000000">Add item</font></h2>
			    </div>
			   
			    <div class="modal-body" align="center">
			    		<script type="text/javascript">
			        		$(document).ready(function(){
			        		
								$('#insert').click(function(){
									var d = new Date();
								    var data_itemname = document.getElementById('itemname').value;
								    var data_itemdescription = document.getElementById('itemdescription').value;
								    var data_received = document.getElementById("date_received").innerHTML = d.toDateString();
								    var data_quantity = document.getElementById('quantity').value;
								    var data_purpose = document.getElementById('purpose').value;
								    
								  	if(data_itemname == ""){
								  		alert("Please enter itemname");
								  		return false;
								  	}
								  	if(data_itemdescription == ""){
								  		alert("Please enter description");
								  		return false;
								  	}
								  	if(data_received == ""){
								  		alert("Please enter date received");
								  		return false;
								  	}
								  	if(data_quantity == ""){
								  		alert("Please enter quantity");
								  		return false;
								  	}
								  	if(data_purpose == ""){
								  		alert("Please enter purpose");
								  		return false;
								  	}
								  	
								    var r = confirm("Are you sure to add this item?");
								    if (r == false) {
								        return false;
								    } 

								    $.ajax({
		                                    url: "insert.php",
		                                    type: "POST",
		                                    data: { 'item_name': data_itemname,
		                                			'item_description': data_itemdescription,
		                                			'date_received': data_received,
		                                			'quantity': data_quantity,
		                                			'purpose': data_purpose},
		                                    success: function(data) {
		                                    	$('#data').html(data);
		                                    	 
		                                    		setTimeout(function(){
													   window.location.reload(1);
													}, 1500);

		                                   	} 

	                        			 });
								   Lobibox.notify('success', {
					                    delay: 1500,
					                    title: 'Success',
					                    msg: 'Data has been added successfully'

					                });

								});

							});
								
	</script>
			    		
			    		
			    		

			    </div>
			    <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 100px;">Close</button>
			    </div>
	        </div>



	    </div>
	</div>

</body>
</html>