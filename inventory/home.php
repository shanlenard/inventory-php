<!DOCTYPE html>
<html>
<head><title>Chart | Inventory</title>
	<link rel="icon" type="image/png" href="img/inventorybox.png">

 	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//daneden.github.io/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	

  	<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/main.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<style>

.canvasjs-chart-credit {
   display: none;
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
            	 	<div class="col-12-sm">
            	 	<script type="text/javascript">
				$(document).ready(function () {
				$.getJSON("chart.php", function (result) {
				var chart = new CanvasJS.Chart("chartContainer", {
					theme: "theme1",
					title:{
							text: "Inventory"              
						},
					animationEnabled: true,
				    height: 500,
				   
				data: [ {
					indexLabelFontSize: 15,
				 dataPoints: result } ]
					});
				chart.render();
				});
			});
				</script>
            	 	</div>
            	 </div>
            	 

            	 	
            	 <div id="chartContainer" style="height: 300px; width: 100%;"></div>	
          </div>
       	  </div>
                   



</body>
</html>