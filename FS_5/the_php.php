


<!-- patient -->
<?php 
if (isset($_POST['retrtetertte'])) {
	
$log1_connection = mysqli_connect('localhost','root','','bigtable');
$select = "SELECT email, password FROM maintable WHERE pincode LIKE'PF11L%'";
$aplly = mysqli_query($log1_connection, $select);

while ($row = mysqli_fetch_assoc($aplly)) {
 	$sh = $row['email'];
 	$sd = $row['password'];

 	$fild_inf_email = $_POST['l_user_name'];
 	$fild_inf_passw = $_POST['l_password'];

 	if ($fild_inf_email == "" || $fild_inf_passw == "") {

 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Your fildes is empty &nbsp;</h2>";
 	}
 	else{
 	
 	if ($fild_inf_email !== $sh || $fild_inf_passw !== $sd) {
 
 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Please make sure your Email and Passwrd is correct &nbsp;</h2>";
 	}
 	else {
 		header('Location:index_p.php');
 	}
 }

}

}
?>


<!-- doctor sign in -->
<?php 
if (isset($_POST['ytyuytuutut'])) {
	
$log1_connection2 = mysqli_connect('localhost','root','','bigtable');
$select2 = "SELECT email, password FROM maintable WHERE pincode LIKE'AC22H%'";
$aplly2 = mysqli_query($log1_connection2, $select2);


while ($row2 = mysqli_fetch_assoc($aplly2)) {
 	$sh2 = $row2['email'];
 	$sd2 = $row2['password'];

 	$fild_inf_email2 = $_POST['doctor_username'];
 	$fild_inf_passw2 = $_POST['doctor_password'];

 	setcookie("ellodoctors",$fild_inf_email2 ,time()+670000);

 	if ($fild_inf_email2 == "" || $fild_inf_passw2 == "") {

 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Your fildes is empty &nbsp;</h2>";
 	}
 	else{
 	
 	if ($fild_inf_email2 !== $sh2 || $fild_inf_passw2 !== $sd2) {
 
 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Please make sure your Email and Passwrd is correct &nbsp;</h2>";
 	}
 	else {
 		header('Location:index_d.php');
 	}
 }
}
}
?>
   <!--  Doctor insert  times -->
<?php 
if (isset($_POST['dfgfdgdgfdg'])) {

  $user_curent = $_COOKIE['ellodoctors'];
  $mono_radion = $_POST['e'];
  $day_radio = $_POST['r'];
  $houer_radio = $_POST['h'];

echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(30vw ,32vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; your selected time added to your book &nbsp;</h2>";

$conect_insert_time = mysqli_connect('localhost','root','','bigtable');
$the_doc_time_selectd = "INSERT INTO ttiimm(doctor_email,month_do,day_do,houer_do) VALUES ('$user_curent','$mono_radion','$day_radio','$houer_radio')";
$done_time = mysqli_query($conect_insert_time,$the_doc_time_selectd);
}

?>








<?php


if (isset($_POST['lkiuokj'])) {
	
$log1_connection3 = mysqli_connect('localhost','root','','bigtable');
$select3 = "SELECT email, password FROM maintable WHERE pincode LIKE'DK11O%'";
$aplly3 = mysqli_query($log1_connection3, $select3);

while ($row3 = mysqli_fetch_assoc($aplly3)) {
 	$sh3 = $row3['email'];
 	$sd3 = $row3['password'];

 	$fild_inf_email3 = $_POST['a_fild_usern'];
 	$fild_inf_passw3 = $_POST['admin_f_password'];

 	if ($fild_inf_email3 == "" || $fild_inf_passw3 == "") {

 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Your fildes is empty &nbsp;</h2>";
 	}
 	else{
 	
 	if ($fild_inf_email3 !== $sh3 || $fild_inf_passw3 !== $sd3) {
 
 		echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(35vw ,20vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>&nbsp; Please make sure your Email and Passwrd is correct &nbsp;</h2>";
 	}
 	else {
 		header('Location:index_a.php');
 	}
 }
}
}
?>


<!-- sign up admin php -->
<?php 

if (isset($_POST['jkljkjk'])) {


$a_fname = $_POST['a_f_name'];
$a_lastname = $_POST['a_f_n_name'];
$a_cty = $_POST['a_f_cty'];
$a_email = $_POST['a_e_email'];
$a_phone = $_POST['a_f_ph_nu'];
$a_pincode = $_POST['a_f_pincode'];
$a_password = $_POST['a_f_password'];

if ($a_fname == "" || $a_lastname == "" || $a_cty == "" || $a_email == "" || $a_phone == "" || $a_pincode == "" || $a_password == "") {
	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Please fill all filds</h2>";
}
else {

	$d_connection = mysqli_connect('localhost','root','','bigtable');
	$d_insert_tab = "INSERT INTO maintable(fname,lastname,email,phone,pincode,password,city) VALUES ('$a_fname','$a_lastname','$a_email','$a_phone','$a_pincode','$a_password','$a_cty')";
	$aple = mysqli_query($d_connection,$d_insert_tab);

	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Your account created successfully</h2>";
}
}

 ?>


<!--  sign up patient -->
<?php 


if (isset($_POST['iuiuouiuoii'])) {


$p_fname = $_POST['p_f_name'];
$p_lastname = $_POST['p_n_name'];
$p_birthday = $_POST['p_birthday'];
$p_email = $_POST['p_email'];
$p_ph = $_POST['p_ph_nump'];
$p_pincode = $_POST['p_pin_id'];
$p_password = $_POST['p_password'];
$p_city = $_POST['p_cityi'];
$p_job = $_POST['p_jobe'];


if ($p_fname == "" || $p_lastname == "" || $p_birthday == "" || $p_email == "" || $p_ph == "" || $p_pincode == "" || $p_password == "" || $p_city == "") {
	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Please fill all filds <br> only job can be blank</h2>";
}
else {

	$p_connection = mysqli_connect('localhost','root','','bigtable');
	$p_insert_tab = "INSERT INTO maintable(fname,lastname,birthday,email,phone,pincode,password,city,job) VALUES ('$p_fname','$p_lastname','$p_birthday','$p_email','$p_ph','$p_pincode','$p_password','$p_city','$p_job')";
	$p_aple = mysqli_query($p_connection,$p_insert_tab);

	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Your account created successfully</h2>";
}
}

 ?>


<!-- sign up  -->
<?php 

if (isset($_POST['yuyuryuiei'])) {


$fname = $_POST['d_name'];
$lastname = $_POST['d_n_name'];
$locationcinic = $_POST['d_l_o'];
$birthday = $_POST['d_birth'];
$email = $_POST['d_em'];
$phone = $_POST['d_ph_num'];
$pincode = $_POST['d_pin'];
$speshalist = $_POST['sp'];
$password = $_POST['d_password'];

if ($fname == "" || $lastname == "" || $locationcinic == "" || $birthday == "" || $email == "" || $phone == "" || $pincode == "" || $speshalist == "" || $password == "") {
	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Please fill all filds</h2>";
}
else {

	$d_connection = mysqli_connect('localhost','root','','bigtable');
	$d_insert_tab = "INSERT INTO maintable(fname,lastname,locationcinic,birthday,email,phone,pincode,speshalist,password) VALUES ('$fname','$lastname','$locationcinic','$birthday','$email','$phone','$pincode','$speshalist','$password')";
	$aple = mysqli_query($d_connection,$d_insert_tab);

	echo "<h2 style='color: lightblue; transition: 1s; position: absolute; transform: translate(5vw ,35vw); background-color: rgba(33,33,33,.6); font-family: cursive;'>Your account created successfully</h2>";
}
}

 ?>
