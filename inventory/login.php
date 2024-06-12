<!DOCTYPE html>
<html>
<head><title>Login | Inventory</title>
	<link rel="icon" type="image/png" href="img/inventorybox.png">
 	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

<style>
.btn1{
	width:100%;
	height:45px;
	background-color:#34495E;
	border-radius:7px;
	color:#fff;
	font-family: 'Raleway';
	font-size: 15px;
	text-shadow: 1px 1px 2px #000000;
    border: none;
    outline:none;
}
.form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}
</style>
</head>


<body>
<?php
	session_start();


	
	

	if (isset($_SESSION["login"]))
	{
		header('Location: home.php');

	}
	else
	{
		
	}
?>


		
			
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
				<table  style="border-spacing: 10px;border-collapse: separate;">
				<tr>
				<td colspan="2"><center><label style="font-size: 35px;font-family: 'Raleway';text-shadow: 1px 1px 2px #000000;">Login</label></center></td>
				</tr>
				<tr>
				<td><label style="font-size: 20px;font-family: 'Raleway';text-shadow: 1px 1px 2px #000000;">Username:</label></td>
				<td><input class="form-control" id="username" placeholder="Username..." style="font-family: 'Raleway';width: 250px;height: 45px;" type="text"></td>
				</tr>
				<tr>
				<td><label style="font-size: 20px;font-family: 'Raleway';text-shadow: 1px 1px 2px #000000;">Password:</label></td>
				<td><input class="form-control" id="password" placeholder="Password..." style="font-family: 'Raleway';width: 250px;height: 45px;" type="password"></td>
				</tr>
				<tr>
				<td colspan="2"><center><button class="btn1"><strong>Login!</strong></button></center></td>
				</tr>
				</table>
				</center>
			</div>
		</div>
	</div>

			
			
			
<script type="text/javascript">
		       $(document).ready(function(){
		        			$('.btn1').on('click', function() {
		   var data_username = document.getElementById("username").value;
		   var data_password = document.getElementById("password").value;


		   						 $.ajax({
	                                    url: "log.php",
	                                    type: "POST",
	                                    data: {'username_data': data_username,
	                                    	   'password_data': data_password
	                                					},
	                                    success: function(data) {
	                                    	$('#data1').html(data);
	                                    	if(data == 1){

        								window.location.href = 'session1.php';

	                                    	}
	                                    	else{
	                                    		alert("Wrong username or password!")
	                                    	}
	                                   	} 
                        			 });

	});	
});			
</script>
</body>
</html>

