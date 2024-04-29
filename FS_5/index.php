<!DOCTYPE html>
<html>
<head>
<title>Welcom.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--<meta name="viewport" content="height=device-width, initial-scale=1.0" />-->
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" type="text/css" href="cc_11.css">
<link rel="stylesheet" type="text/css" href="bu.css">
<link rel="stylesheet" type="text/css" href="bo.css">
<link rel="stylesheet" type="text/css" href="slydes.css">
<link rel="stylesheet" type="text/css" href="options.css">
<link rel="stylesheet" type="text/css" href="reclam.css">
<link rel="icon"  type="image/x-icon" href="icon/icon.ico">
</head>
<body>
<?php 

include ('the_php.php');

 ?>
<!--=======================================SIGN IN WINDOW===========================================-->

						<!--===========Sigi-in as a Patient==========-->


<div id="movable-sign-in" class="goms" align="center">
	<form method="post" action="index.php">
	<font color="#fff" style="padding: 6px; font-size: 1.5vw; color:lightblue;">Sigi-in as a Patient</font>
	<button type="button" style="background-color: rgba(55, 55, 55, 1); border-style: none; 
	color: #fff; width: 1.6vw; height: 1.6vw; font-size:1vw; transform: translateX(6vw);"
	onclick="document.getElementById('movable-sign-in').style.visibility='hidden'"
	>X</button>
	<br><br>
	&nbsp; <input class="sign-in" id="user_name" type="text" name="l_user_name" placeholder="User name or Email..."><br><br>
	<input class="sign-in" id="password" type="password" name="l_password" placeholder="Enter your Password"><br><br><br>
	<input id="action" type="submit" name="retrtetertte" value="sign-in"><br><br>
	<a href="up.php" id="link_of_creat_na_account">Creat a Patient account</a>
	</form><br>

	<img src="icon/patient.png" style="width: 4vw;">
</div>
            <!--==========================Sigi-in as a Doctor==========-->


<div id="movable-sign-in-doctor" class="goms" align="center">
	<form method="post" action="index.php">
	<font color="#fff" style="padding: 6px; font-size: 1.5vw; color:lightblue;">Sigi-in as a Doctor</font>
	<button type="button" style="background-color: rgba(55, 55, 55, 1); border-style: none; 
	color: #fff;
	width: 1.6vw; height: 1.6vw; font-size:1vw; transform: translateX(6vw);"
	onclick="document.getElementById('movable-sign-in-doctor').style.visibility='hidden'"
	>X</button>
	<br><br>

	&nbsp; <input class="sign-in" id="user_name-doctor" type="text" name="doctor_username" placeholder="User name or Email..."><br><br>
	<input class="sign-in" id="password" type="password-doctor" name="doctor_password" placeholder="Enter your Password"><br><br><br>
	<input id="action-doctor" type="submit" name="ytyuytuutut" value="sign-in"><br><br>
		<a href="up_d.php" id="link_of_creat_na_account-doctor">Creat a Doctor account</a>
	</form><br>


	<img src="icon/doctor.png" style="width: 4vw;">
</div>
							<!--==============Sigi-in as a Admin===========-->





<div id="movable-sign-in-Admin" class="goms" align="center">
	<form method="post" action="index.php">
	<font color="#fff" style="padding: 6px; font-size: 1.5vw; color:lightblue;">Sigi-in as a Admin</font>
	<button type="button" style="background-color: rgba(55, 55, 55, 1); border-style: none; 
	color: #fff;
	width: 1.6vw; height: 1.6vw; font-size:1vw; transform: translateX(6vw);"

	onclick="document.getElementById('movable-sign-in-Admin').style.visibility='hidden'"

	>X</button>
	<br><br>

	&nbsp; <input class="sign-in" id="user_name-Admin" type="text" name="a_fild_usern" placeholder="User name or Email..."><br><br>
	<input class="sign-in" id="password" type="password-Admin" name="admin_f_password" placeholder="Enter your Password"><br><br>
	<div class="sign-in">
	</div>
	<br>
	<a href="index_a.php"><input id="action-Admin" type="submit" name="lkiuokj" value="sign-in"></a><br><br>
	<a href="up_a.php" id="link_of_creat_na_account-Admin">Creat an Admin account</a>
	</form><br>
	<img src="icon/admin.png" style="width: 4vw;">
</div>
<!--**************************************END - SIGN IN WINDOW**************************************-->
<!--===========================================THE TOP BAR===========================================-->
<div id="new-div">
	<table border="0" id="table_barr" cellspacing="0" cellpadding="0">
		<tr>
			<td width="8vw" id="table_barr_td" align="center">
				<img src="img/logo_v2_p1.png" class="home" align="top" id="logo_v2_p1">
				<img src="img/logo_v2_p2.png" class="home" align="top" id="logo_v2_p2">
			</td>
			<td>&nbsp;&nbsp;</td>
			<td valign="center">
			<p id="Home_Hospital_text"><b>&nbsp;Home Hospital&nbsp;</b></p>
			</td>
			<td valign="center">
			<script type="text/javascript">
				function test(){
					alert("You cannot use search without signing in !!!");
				}
			</script>
			&nbsp; <input onkeydown="test()" id="search" placeholder="Search for a doctor" type="text" name="search">
			</td>
			<td width="11vw" valign="center">
			<div id="cc">
			<button id="button" class="cl_tt" >Sign-in<img id="arrow" src="icon/arrow.png" width="22px" height="22px"></button>
			<div id="in_div">
			<!--======================THE DROPDOWN LIST=================-->
			<script type="text/javascript">
		function H_P(){
		document.getElementById('movable-sign-in').style.visibility="hidden";
	}
		function H_D(){
		document.getElementById('movable-sign-in-doctor').style.visibility="hidden";
	}
		function H_A(){
		document.getElementById('movable-sign-in-Admin').style.visibility="hidden";
	}



		function S_P(){
		document.getElementById('movable-sign-in').style.visibility="visible";
	}
		function S_D(){
		document.getElementById('movable-sign-in-doctor').style.visibility="visible";
	}
		function S_A(){
		document.getElementById('movable-sign-in-Admin').style.visibility="visible";
	}
	</script>
			<a class="l" id="ll" 

			onclick="H_D() , H_A(), S_P()"
			><img class="icon_imags" src="icon/patient.png" width="22px" height="22px">&nbsp;Patient</a>
			<!--=======================================-->
			<a class="l" id="ll_1"

			onclick="H_P(), H_A(), S_D()"
			><img class="icon_imags" src="icon/doctor.png" width="22px" height="22px">&nbsp;Doctor</a>
			<!--=======================================-->
			<a class="l" id="ll_2"

			onclick="H_P(), H_D(), S_A()"
			><img class="icon_imags" src="icon/admin.png" width="22px" height="22px">&nbsp;Admin</a>
			</div>
   			 </div>
					</td>
			<td width="9vw;" id="sign-out" valign="center">
				<button id="button">Sign-out </button>
			</td>
			<td id="td-ligo-user" align="center" valign="center">
				<a onclick="p_s_m()" href="#"><img src="img/log.png" id="logoic" align="top"></a>
			</td>
		</tr>
	</table>
</div>
<!--****************************************END - THE TOP BAR****************************************-->
<!--==========================================THE BUTTOM PART=======================================-->
<!--==========================================THE MIDLE BAR=======================================-->
<table border="0" cellpadding="0" cellspacing="0" id="table">
<tr>
	<td id="TAKE_A_TIME" class="TC" align="center">
	<input id="TAKE_A_TIME" class="lowe_barr" type="submit" name="TAKE_A_TIME" value="TAKE A TIME"
	onclick="H_HA() , H_CA(), H_AU(), H_R(), S_TT()"></td>
	<td id="HELTH_ADVICE" class="TC" align="center">
	<input id="TAKE_A_TIME" class="lowe_barr" type="submit" name="TAKE_A_TIME" value="HELTH ADVICE"
	onclick="H_TT(), H_CA(), H_AU(), H_R(), S_HA()"></td>
	<td id="CONNECT_US" class="TC" align="center">
	<input id="TAKE_A_TIME" class="lowe_barr" type="submit" name="TAKE_A_TIME" value="CONNECT US"
	onclick="H_TT(), H_HA(), H_AU(), H_R(), S_CA()"></td>
	<td id="ABOUT_US" class="TC" align="center">
	<input id="TAKE_A_TIME" class="lowe_barr" type="submit" name="TAKE_A_TIME" value="ABOUT US"
	onclick="H_TT(), H_HA(),H_CA(), H_R(), S_AU()"></td>
	<td id="TAKE_A_TIME" class="TC" align="center">
	<input id="TAKE_A_TIME" class="lowe_barr" type="submit" name="TAKE_A_TIME" value="REKLAM & LEARN"
	onclick="H_TT(), H_HA(),H_CA(), H_AU(), S_R()"></td>
</tr>
<!--===============================================THE TV=============================================-->
<!--==================================================================================================-->
<tr>
<td  class="TC" id="slide_holder" colspan="5">
<!--=====================================  JS  ===========================================-->
<script type="text/javascript">
		function H_TT(){
		document.getElementById('dive_take_a_time').style.visibility="hidden";
	}
		function H_HA(){
		document.getElementById('health_advice').style.visibility="hidden";
	}
		function H_CA(){
		document.getElementById('CONNECT-us-us').style.visibility="hidden";
	}
		function H_AU(){
		document.getElementById('ABOUT').style.visibility="hidden";
	}
		function H_R(){
		document.getElementById('reklam').style.visibility="hidden";
	}



		function S_TT(){
		document.getElementById('dive_take_a_time').style.visibility="visible";
	}
		function S_HA(){
		document.getElementById('health_advice').style.visibility="visible";
	}
		function S_CA(){
		document.getElementById('CONNECT-us-us').style.visibility="visible";
	}
		function S_AU(){
		document.getElementById('ABOUT').style.visibility="visible";
	}
		function S_R(){
		document.getElementById('reklam').style.visibility="visible";
	}


</script>
<!--=====================================DIV TO TAKE A TIME===========================================-->

<script>
function p_s_i() {
    alert("Pleas sign-in!  if you don't sign-in you can not take doctors time");
}
function p_s_m() {
    alert("Pleas sign-in!");
}
</script>



	<div id="dive_take_a_time">
<div>
<div onclick="p_s_i()" id="kid" class="patients_s"><img src="p_ico/kid.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="bone" class="patients_s"><img src="p_ico/bone.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="breath" class="patients_s"><img src="p_ico/breath.png" class="image_pat_s" ></div>
<div onclick="p_s_i()" id="ear" class="patients_s"><img src="p_ico/ear.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="eye" class="patients_s"><img src="p_ico/eye.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="tooth" class="patients_s"><img src="p_ico/tooth.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="k" class="patients_s"><img src="p_ico/brain.png" class="image_pat_s"></div>
<div onclick="p_s_i()" id="l" class="patients_s"><img src="p_ico/heart.png" class="image_pat_s"></div>
	</div>




</div>
	

<!--=====================================DIV HELTH ADVICE===========================================-->
<div id="health_advice">

	<a href="pdf/a.pdf"><img src="pdf/aa.png" class="books" style="transform: translate(2vw,4vw)"></a>
	<a href="pdf/b.pdf"><img src="pdf/bb.png" class="books" style="transform: translate(21vw,4vw)"></a>
	<a href="pdf/c.pdf"><img src="pdf/cc.png" class="books" style="transform: translate(41vw,4vw)"></a>
	<a href="pdf/d.pdf"><img src="pdf/dd.png" class="books" style="transform: translate(60vw,4vw)"></a>
	<a href="pdf/f.pdf"><img src="pdf/ff.png" class="books" style="transform: translate(80vw,4vw)"></a>
	<style type="text/css">
	.books{position: absolute; width: 17vw; transition: .3s; border-radius: 2%; }
	.books:hover{ width: 18vw; border-radius: 7%;
		border: .2vw; border-color: lightblue; border-style: double;}
	</style>
	
</div>
<!--=====================================DIV CONNECT US===========================================-->
<div id="CONNECT-us-us" align="center">
<table border="0" cellspacing="4" style="position: absolute; transform: translateY(2vw); border-top: none; border-bottom: none;">
<tr>
	<td>
	<font>Brwa Mahmud:<br> Email:(systemwork64@gmail.com)<br>Phone: (0750 343 39 24)</font><br>
	<img src="u_img/d12.png" class="img_sercl">
	</td>
	<td>
	<font>Ahmad Chalak:<br> Email:(ahmadchalak11@gmail.com)<br>Phone: (0750 343 39 24)</font><br>
	<img src="u_img/log1d12.png" class="img_sercl">
	</td>
	<td>
	<font>Karo Kosar:<br> Email:(garillagian11@gmail.com)<br>Phone: (0750 323 79 24)</font><br>
	<img src="u_img/log112.png" class="img_sercl">
	</td>
	<td>
	<font>Hawkar Husen:<br> Email:(hawkarhawo410@gmail.com)<br>Phone: (0750 125 05 59)</font><br>
	<img src="u_img/lo12.png" class="img_sercl">
	</td>
</tr>
</table>
<!--=====================================END CONNECT US===========================================-->
<!--=====================================DIV ABOUT AS===========================================-->
</div>
<div id="ABOUT" align="center" style="font-size: 2.2vw; position: absolute;">
	<p style="color: #999; transform: translateY(0vw);">Welcom to our web site. We hope can help you . Our main office is from Sulaymanyah strit Salm .<br>This web site is daly update.and you can use it all over the world.
	please make sure the city of your chousen doctor.feel free to take helth advice, ther are som realy usfull book.
	<br>If you are adoctor you must to visit us to veriyfy your associate. and if you are a  patient you have yo by your unic cod to signup ths is free for 6 next month.<br>Ouer admin is have associate from CSI sulaymanyah.<br>
	<span style="color: lightblue; font-style: italic;"> If you want to do reklam please click on connect and call or send an email to one of  ouer admin </span>
	</p>
</div>
<!--=====================================END ABOUT AS===========================================-->
<!--=======================================DIV RECLAM===========================================-->

<div id="reklam">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/1.jpg" style="width:100%">
  <div class="text"><h1 style="color: lightblue; background-color: rgba(33,33,33,.7); font-size: 2vw;">
  We can keep your time and you don't have to wait to see your doctor</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/2.jpg" style="width:100%">
  <div class="text"><h1 style="color: lightblue; background-color: rgba(33,33,33,.7); font-size: 2vw;">
  	We can help you to keep your mony
  </h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/3.jpg" style="width:100%">
  <div class="text"><h1 style="color: lightblue; background-color: rgba(33,33,33,.7);font-size: 2vw;">
  	Verry easy if it is not to you visit our <a href="https://www.youtube.com/channel/UCuH2JKiRh859S_w8oFWzFKQ" style="color: #000;">youtube chanal</a>
  </h1></div>
</div>

<a class="prev" onclick="plusSlides(-1)" style="color: rgba(66,66,66,1);">&#10094;</a>
<a class="next" onclick="plusSlides(1)" style="color: #000;">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
</div>
</td>
</tr>
<!--================================END DIV RECLAM===========================================-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; FOODER ;;;;;;;;;;;;;;;;;;;;;;;;;-->
<tr id="fooder">
	<td colspan="5" align="center"><p>www.homehospital.com copy right &copy; 2017-<?php echo date("Y");?> by Brwa Mahmud ,
	Karo Kosar ,Ahmad Chalak ,Hawkar Husen <br> and with domainance of t.Shilan in CSI sulaymanyah at Network department.</p></td>
</tr>
</table>
</body>
</html>