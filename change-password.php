<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Change Password<?php echo CONFIG::SYSTEM_NAME; ?></title>
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
				<div class='content-body'> 
					<div class='form-holder'style='color: #010429;font-family: Georgia;border: 2px solid #02012b; box-shadow: 4px 6px 2px ;'> 
						<?php 
							
							if(isset($_POST['o-p'])){
								$oldPassword = $_POST['o-p'];
								$newPassword = $_POST['n-p']; 
								$confirmPassword = $_POST['c-p']; 
								
								if(strlen($newPassword) < 5){
									Messages::error("New password must be 5 characters");
								} else if($oldPassword == "" || $newPassword == ""){
									Messages::error("All fields must be field");
								} else if($newPassword != $confirmPassword){
									Messages::error("Oops! Your password did not match");
								} else {
									User::changePassword($oldPassword, $newPassword);
								}
								
							}
							
							$form = new Form(2, "post"); 
							$form->init();
							$form->textBox("Old Password", "o-p", "password", "", "");
							$form->textBox("New Password", "n-p", "password", "", ""); 
							$form->textBox("Confirm Password", "c-p", "password", "", "");
							$form->close("Change Password"); 
						?> 
					</div> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='https://st.depositphotos.com/1138869/1388/i/950/depositphotos_13881298-stock-photo-portrait-of-young-female-doctor.jpg' class='img-responsive' style="height:100vh"/> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
