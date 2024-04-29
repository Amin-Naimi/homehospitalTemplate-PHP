<!DOCTYPE html>
<html>
<head>
	<title>rd</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" type="text/css" href="my-property-css.css">
<link rel="stylesheet" type="text/css" href="data.css">
</head>
<body>

<style type="text/css">
	.vmp{
		width: 11vw;
		height: 4vw;
		background-color: rgba(88,88,88,.8);
		color: lightblue;
		font-size: 1.1vw;
		font-family: cursive;
		border:none;
		position: absolute;
		transform: translate(40vw , 40vw);
	}
</style>

<select>

<?php 

if (isset($_POST['dfkgjfgklr'])) {
	$curent_second = $_COOKIE['ellodoctors'];
	
$log1_congfn3 = mysqli_connect('localhost','root','','bigtable');
$selfgdt3 = "SELECT * FROM ttiimm WHERE doctor_email = '$curent_second'";
$aplfdg3 = mysqli_query($log1_congfn3, $selfgdt3);
	

 while ($er = mysqli_fetch_row($aplfdg3)) {
 	$rtertrre = $er['doctor_email'];

     echo "<option value=$rtertrre>$rtertrre</option>";
 }
}
?>
</select>


<form method="post" action="r_d.php">
	<input class="vmp" type="submit" name="dfkgjfgklr" value="Viwe my patients">
</form>


</body>
</html>