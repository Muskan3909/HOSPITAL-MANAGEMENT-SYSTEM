<?php 
require_once "importance.php"; 

if(User::loggedIn()){
	Config::redir("index.php"); 
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation</title>
    <link rel="stylesheet" type="text/css" href="index.css">

  </head>

<body>

    <div class="hello">
		<div class="menu">
			
			<div class="leftmenu">
                <img src="data:image/webp;base64,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" alt="medica.com">
				
			</div>

			<div class="rightmenu">
				<ul>
					<li id="fisrtlist"> HOME </li>
					<li> <a href="#sectiontwo">About us </a></li>
					<li> <a href="#section-third"> Mission and Vision </a> </li>
					
					<li> <a href="feedback1.php">Contact</a></li>
				</ul>
			</div>

		</div>
        <div class="text">
			<h1>A Destination for<br>Advanced Care </h1>
     
            <h3>Get a Second Opinion From The World’s Best Doctors</h3>
            <div class="content-body"style='border: 2px solid #02012b; box-shadow: 4px 6px 2px ;
				'>
            <?php 
							if(isset($_GET['attempt'])){
								// STARTING THE LOGIN AREA 

								$status = $_GET['attempt'];

								if($status == 1){
									$header = "LOGIN AS ADMIN"; 
								} else {
									$header = "LOGIN AS DOCTOR"; 
								}

								echo "<center><div class='badge-header'style='border: 2px solid #02012b; box-shadow: 4px 6px 2px ;
                '>$header</div></center>"; 

								// we created a method for creating forms

								if(isset($_POST['login-email'])){
									$email = $_POST['login-email']; 
									$password = $_POST['login-password'];

									if($email == "" || $password == ""){
										Messages::error("You must fill in all the fields");
									} else {
										User::login($email, $password, $status);
									}

								}

							?> 
						<div class='row'>
								<div class='col-md-3'></div>
								<div class='col-md-6'>
									<div class='form-holder'>

            <?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login" ); ?> 
									</div>
								</div> 
								<div class='col-md-3' ></div>
							</div> 
							<?php 
								// ENDNG TGHE LOGIN AREA
							} else {

						?>
            <button id="buttonone" ><a href="login.php?attempt=1">LOGIN AS ADMIN</a></button>      
            <button id="buttontwo"><a href="login-patient.php">LOGIN AS PATIENTS</a></button>
            <button id="buttonthird"><a href="login.php?attempt=2" >LOGIN AS DOCTOR</a></button>
		</div>

    <?php } ?> 
	</div>
<section id="sectiontwo" class="sectiontwo">
<h1>ABOUT US</h1>

<p>
    With a vision to provide the utmost level of healthcare to the common man, at the most affordable cost, Dr. 
    Purshotam Lal (Padma Vibhushan, Padma Bhushan and Dr. B.C. Roy National Awardee), a pioneer ofInterventional
     Cardiology in India, founded Medica Group of Hospitals.
</p>
<p>India’s large and diverse population warrants an efficient health care infrastructure that should be accessible
     to all strata’s of society. Good quality health care should not be a privilege of the elite only. Medica Group of
      Hospitals was setup in 1997 by Padma Vibhushan and Dr. B C Roy National Awardee Dr. Purshotam Lal (Chairman),
       with the vision and endeavours to bring the best possible health care to the masses of India. In order to
        achieve this, Medica Group of Hospitals has evolved as a committed group which provides advanced medical care 
        at much affordable prices. Their focus has always been on the patients of the lower and middle sections of
         society, patients who are rejected by the large corporate hospitals, and who cannot afford expensive medical 
         care but definitely deserve empathy. They believe that medicine is a noble profession and sick must not be
          rejected on monetary grounds.</p>
          <img src="https://www.metrohospitals.com/Adminpanel/HospitalImages/9c61f64897ab43648f1e5247ed640555.jpg" style="float: right;">
   <p>Medica Group of Hospitals is a group of 11 hospitals and 1 college (Medica College of Health Sciences and Research), 
       having more than 2500 beds flourishing hospitals and leading one of the biggest group of hospitals in India, out of
        which 10 are NABH Accredited (NABH – is the highest accreditation body in India) and 4 are NABL Accredited (NABL is
         the highest body for the accreditation of laboratory services).</p>
  <p> Medica Group of Hospitals has an outstanding and recognized team of doctors led by Dr. Purshotam Lal in all
       specialities including Cardiology, Gastroenterology, Nephrology, Respiratory, Oncology, Orthopaedics Joint
        replacement, Gastro and Bariatric Surgery, Neurology and Neurosurgery etc. All their senior doctors are 
         deans, professors or directors of reputed institutes. It is a matter of great pride that they, at Medica, 
         have created a facility and an atmosphere of team-work and cross-opinions with all related doctors and
          these inputs and discussions shared between many scientific minds greatly benefit their patients. They 
          continue to be a leader in the industry for the personal approach they take with every patient. Their 
          professional team provides exceptional service and employs the highest standards of patient care. Many
           hospitals across the country refer their most difficult cases to Medica Group of Hospital. This is a 
           true testimony to the skill and knowledge of Dr. Purshotam Lal and his professional team.</p>
</section>
<section class="section-third" id="section-third">
    <div class="boxing">
    <h2 >VISION & MISSION</h2>
    <div class="box">
        <h4 class="Mission">Our Mission</h4>
        <figure><img src="https://www.metrohospitals.com/images/Mission.png" alt=""></figure>
        <p>Our immediate agenda is to set up more such dedicated centers for 
            providing wholesome treatment to the patients from all over the country 
            and abroad. We are committed in continually serving the humanity.</p>
    </div><div class="box">
        <h4 class="vision">Our Vision</h4>
        <figure><img src="https://www.metrohospitals.com/images/vision-logo.png" alt=""></figure>
        <p>Our vision is to achieve excellence in Healthcare services by offering 
            unique expertise, state of the art technology & patient care. Metro Group 
            of Hospitals is committed in providing world class health care.</p>
    </div><div class="box">
        <h4 class="value">Our Value</h4>
        <figure><img src="https://www.metrohospitals.com/images/hands_icon.png" alt=""></figure>
        <h5 style="font-style: bold; font-size: 26px;color: rgb(224, 200, 200);">5 Pillars of Excellence</h5>
        
        <p>Transparency</p>
        <p>Affordability</p>
        <p>Trust</p>
        <p>Patient Care</p>
        <p>Commitment</p>
 
    </div>
</div>
</section>
<section class="section-4">
    <div style="text-align:center">
        <h2 style="background-color: rgb(53, 12, 12);font-size: 25px;">Specialities</h2>
       
      </div>
      
      <!-- The four columns -->
      <div class="row">
        <div class="column">
          <img src="specilities2.jpg"alt="Specialitie1" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="surgery2.jpg" alt="Specialitie2" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="sp3.jpg" alt="Specialitie3" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="img4.jpg" alt="Specialitie4" style="width:100%" onclick="myFunction(this);">
        </div>

      </div>
      <div class="row">
        <div class="column">
          <img src="timg1.png"alt="Specialitie4" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="images.jpg" alt="Specialitie5" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="cardiology.jpg" alt="Specialitie6" style="width:100%" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="General-Paediatrics.jpg" alt="Specialitie8" style="width:100%" onclick="myFunction(this);">
        </div>
        
      </div>
      
      <div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
      </div>
      
      <script>
      function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
      }
      </script>
      
</section>
<section class="section-fifth"> 
    <div class="slideshow-container">

        <div class="mySlides">
          <q>I really appreciate all the doctors and nursing staff for their commitment.</q>
          <p class="author">- Partha Saha</p>
        </div>
        
        <div class="mySlides">
          <q>It was very positive experience since admission till discharge. Great job everyone.</q>
          <p class="author">- K.Padma Rao</p>
        </div>
        
        <div class="mySlides">
          <q>Hospital is maintained excellently. No problems for patients. Thanks to Dr.Mallikarjuna & his team for giving greatest service to the patients.</q>
          <p class="author">-  P.Swarajya Lakshmi</p>
        </div>
        <div class="mySlides">
            <q>Good maintainence of rooms. Nice geusture by nursing staff. Overall had a very good experience and feel at home. Good job. Cheers..!</q>
            <p class="author">- K. Ananth Nag</p>
          </div>
          
          <div class="mySlides">
            <q>Hospital’s services are very good. Doctors are regularly available. Hospital is maintained very neatly.</q>
            <p class="author">- Ruchira Bhattacharjee</p>
          </div>
          
          <div class="mySlides">
            <q>Nursing Staff is excellent and dedicated. Housekeeping is very good. Doctors are professional and gave confidence to the patients. Please keep up the good work.</q>
            <p class="author">- K.G.K. Murthy</p>
          </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        
        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
          <span class="dot" onclick="currentSlide(5)"></span> 
          <span class="dot" onclick="currentSlide(6)"></span> 
        </div>
        
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        
</section>



        <footer class="footerb ">
          <div>
                        <div class="copy">
                    <p> © Medica Groups Hospital Faridabad, All right reserved.  </p> 
      </div>
      </div>
      </footer>



</body>
</html>			