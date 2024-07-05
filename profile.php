<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title><?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'style='color: #010429;font-family: Georgia;'> 
					<?php echo "$userFirstName $userSecondName" ; ?> <small><?php echo $userRole; ?></small>
				</div>
				<div class='content-body'style='color: #010429;font-family: Georgia;border: 2px solid #02012b; box-shadow: 4px 6px 2px ;'> 
					
					<?php $token = $_GET['token']; User::profile($token);  ?>
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://www.pngjoy.com/pngl/47/1081445_nurses-revieta-medical-thermometer-accurate-results-in-8.png' class='img-responsive'style="height:100vh"/> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
