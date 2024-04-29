


<?php include ('the_php.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign-up</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" type="text/css" href="sign_up.css">
</head>
<body>
<form method="post" action="up.php">
<input id="user-name" class="search_up_class" placeholder="First" type="text" name="p_f_name">
<input id="nike-name" class="search_up_class" placeholder="Nike name" type="text" name="p_n_name">
<input id="city" class="search_up_class" placeholder="City" type="text" name="p_cityi">
<input id="birthday" class="search_up_class" placeholder="Your birth day" type="text" name="p_birthday">	
<input id="email" class="search_up_class" placeholder="Enter Your Email" type="text" name="p_email">		
<input id="phone" class="search_up_class" placeholder="Enter Your phone number" type="text" name="p_ph_nump">
<input id="id" class="search_up_class" placeholder="Enter Your ID_PIN_COD" type="text" name="p_pin_id">
<input id="p_job" class="search_up_class" placeholder="Your job" type="text" name="p_jobe">
<input id="pa" class="search_up_class" placeholder="password" type="text" name="p_password"
 style="transform: translate(4vw , 28vw);">
<input id="con-pa" class="search_up_class" placeholder="Conferm Passwrd" type="text" name="conf_pass"
 style="transform: translate(22vw , 28vw);">

<input class="finish_sign_up" id="up_up" type="submit" name="iuiuouiuoii" value="Signup">
</form>

<a href="index.php"><input class="finish_sign_up" id="cansel_up" type="submit" name="cani" value="Cancel">
</a>


<p class="paragraf">This is aweb sit to you if you did't an ID cod you have to boy one in Sulaymaniyah or Hawler Duhok Halabja.<br> if you want to be Admin pleas visit owr main department to get it admin ID. Wcan help you test you that you can or not
</p>

</body>
</html>




<!-- 
<?php

	if (isset($_POST['sub'])) {
		
		$f_name = $_POST['f_name'];
		$n_name = $_POST['n_name'];
		$city = $_POST['city'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$ph_num = $_POST['ph_num'];
		$pin_id = $_POST['pin_id'];
		$job = $_POST['job'];
		$about = $_POST['about'];
		$password = $_POST['password'];
		$conferm_pass = $_POST['conf_pass'];

$connection = mysqli_connect('localhost','root','','home');
$insert = " INSERT INTO main_t(f_name,n_name,city,birthday,email,ph_num,pin_id,job,about,password) VALUES 
('$f_name','$n_name','$city','$birthday','$email','$ph_num','$pin_id','$job','$about','$password')";
	
	$f = mysqli_query($connection, $insert);

		if ($f) {
			echo "OK";
		}
		else echo "yiuyiyiyiu";

	}


 ?>
 -->