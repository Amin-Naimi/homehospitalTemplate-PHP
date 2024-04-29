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
<!--=======================================SIGN IN WINDOW===========================================-->
<?php include ('the_php.php'); ?>
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
			<td>
			 <input id="search" placeholder="Search for a doctor" type="text" name="search">
			</td>
<td><div style="color: lightblue; font-size: 1.2vw;  font-family: cursive; font-weight: bold;">
	<div id="demo">
	<script>
	function startTime() {
    		var today = new Date();
    		var h = today.getHours();
   		 var m = today.getMinutes();
   		 var s = today.getSeconds();
    	m = checkTime(m);
    	s = checkTime(s);
    	document.getElementById('txt').innerHTML =
   	 h + ":" + m + ":" + s;
   	 var t = setTimeout(startTime, 500);
	}
	function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
	}
	</script>

	<body onload="startTime()">

	<div id="txt"></div>

	<script>
 		 var currentDate = new Date(),
    	  day = currentDate.getDate(),
     	 month = currentDate.getMonth() + 1,
     	 year = currentDate.getFullYear();
 	 document.write(day + "/" + month + "/" + year + "&nbsp;&nbsp;")
	</script>
	</div>
	</div></td>

<td>
<a href="r_d.php"><button id="button" class="cl_tt" >View&nbsp;<img id="arrow" src="img/rate.png" width="22px" height="22px"></button></a>
</td>
			<!--======================THE DROPDOWN LIST=================-->

			<td id="sign-out" valign="center">
				<a href="index.php"><button id="button">Sign-out </button></a>
			</td>
			<td id="td-ligo-user" align="center" valign="center">
				<a href="my-property_d.php"><img src="icon/doctor.png" id="logoic" align="top"></a>
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
	<div id="dive_take_a_time">
<div>
<div id="kid" class="patients_s"><img src="p_ico/kid.png" class="image_pat_s"></div>
<div id="bone" class="patients_s"><img src="p_ico/bone.png" class="image_pat_s"></div>
<div id="breath" class="patients_s"><img src="p_ico/breath.png" class="image_pat_s" ></div>
<div id="ear" class="patients_s"><img src="p_ico/ear.png" class="image_pat_s"></div>
<div id="eye" class="patients_s"><img src="p_ico/eye.png" class="image_pat_s"></div>
<div id="tooth" class="patients_s"><img src="p_ico/tooth.png" class="image_pat_s"></div>
<div id="k" class="patients_s"><img src="p_ico/brain.png" class="image_pat_s"></div>
<div id="l" class="patients_s"><img src="p_ico/heart.png" class="image_pat_s"></div>
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
  <div class="text"><h1 style="color: lightblue; background-color: rgba(33,33,33,.7);font-size: 2vw;">
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