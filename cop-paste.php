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
					Dashboard <small>View your dashboard</small>
				</div>
				<?php require_once "inc/alerts.inc.php";  ?> 
				<div class='content-body'style='color: #010429;font-family: Georgia;'> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://st.depositphotos.com/1138869/1388/i/950/depositphotos_13881298-stock-photo-portrait-of-young-female-doctor.jpg' class='img-responsive' style="height:100vh" /> 
		
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
