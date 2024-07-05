<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>New Patient <?php echo CONFIG::SYSTEM_NAME; ?></title>
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
					New Patient <small>New patient</small>
				</div>
				<div class='content-body'> 
					<div class='form-holder'style='color: #010429;font-family: Georgia;border: 2px solid #02012b; box-shadow: 4px 6px 2px ;''> <br /> 
						<?php 
							if(isset($_POST['p-number'])){
								$number = $_POST['p-number']; 
								Patient::checkPatient($number); 
							}
							$form = new Form(2, "post");
							$form->init();
							$form->textBox("Patient Number", "p-number", "number",  "", ""); 
							$form->close("Submit Number");
							echo "
								<div class='row'>
									<div class='col-md-2'></div> 
									<div class='col-md-10'> 
										<h4 ><strong><a href='add-patient.php'style='color: #010429;'>New Patient</a></strong></h4>
									</div>
								</div>
								";
						?> 
						
						
					</div> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://www.pngjoy.com/pngl/33/786333_doctor-indian-doctor-and-nurse-hd-png-download.png' class='img-responsive' style="height:100vh"/> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
