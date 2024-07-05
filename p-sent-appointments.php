<?php 
require_once "importance.php"; 

if(!Patient::isPatientIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Setnt Appointments<?php echo CONFIG::SYSTEM_NAME; ?></title>
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
					Sent Appointments <small>View your sent appointments</small>
				</div>
				<div class='content-body'style='color: #010429;font-family: Georgia;'> 
					<?php Appointment::loadPatientSentAppointments();  ?>
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://www.pngjoy.com/pngl/266/5107306_medical-doctor-doctor-with-clipboard-png-png-download.png' class='img-responsive' style="height:100vh"/> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
