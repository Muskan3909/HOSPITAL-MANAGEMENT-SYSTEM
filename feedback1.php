<?php 
require_once "importance.php"; 

if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MGH | Contact us</title>
		<link href="fd.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo"style="text-align:center;text-decoration: underline;
">
		<a href="login.php" style="font-size: 90px;"class="animate__animated animate__bounce">Medic Group of Hospital</a> 
				
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>Medic Group of Hospital</p>
						   		<p>Sector 16 A, Faridabad (Delhi - NCR) - 121002. </p>
						   		<p>India</p>
								 <p> Contact No:<a href="tel:0129-4343377" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">0129-4343377</p></a></p>
				   		<p> Ambulance No.<a href="tel:2319449970" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">2319449970</p></a></p>
						   <p> Emergency No.<a href="tel:5321914000" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">5321914000</p></a></p>
						   <p>Email: <span><a href="mailto:medica@gmail.com"?subject = Feedback&body = "Message">medica@gmail.com</a></span></p>
				   	

				   </div>
				</div>				
				
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
	<div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="login.php"class="btn">Home</a></li>
						

					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

