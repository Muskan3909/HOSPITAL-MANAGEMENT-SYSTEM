<?php 
require_once "importance.php"; 


?> 

<html>
<head>
	<title><?php echo Patient::get($_GET['patient'], "name")." - ".$_GET['patient']; ?> </title>
	<?php require_once "inc/head.inc.php";  ?> 
	
	<script> 
		$(function(){
			$("body").on("click", ".print-p-data", function(){
				$.print(".print-data"); 
			});
		}); 
	</script>
	
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'style='color: #010429;font-family: Georgia;'> 
					Print <small>Print this patients receipt's for medicine collection</small>
				</div>
				<div class='content-body'style='color: #010429;font-family: Georgia;'> 
					<?php Patient::printP($_GET['patient']); ?> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://www.pngjoy.com/pngl/47/1081445_nurses-revieta-medical-thermometer-accurate-results-in-8.png' class='img-responsive' style="height:100vh"/> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
