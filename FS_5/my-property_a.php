<!DOCTYPE html>
<html>
<head>
	<title>My-property</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" type="text/css" href="my-property-css.css">
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
        z-index: 1;
    }
</style>


<?php 

if (isset($_POST['dfkgjfgklr'])) {
    $curent_second = $_COOKIE['ellodoctors'];
    
$log1_congfn3 = mysqli_connect('localhost','root','','bigtable');
$selfgdt3 = "SELECT COUNT(*) FROM ttiimm";
$aplfdg3 = mysqli_query($log1_congfn3, $selfgdt3);
    
   
while ($i = mysqli_fetch_assoc($aplfdg3)) {

    print_r($i);
}
}

?>


<?php 

if (isset($_POST['dfkgjfgklr'])) {
    $curent_second = $_COOKIE['ellodoctors'];
    
$log1_congfn3 = mysqli_connect('localhost','root','','bigtable');
$selfgdt3 = "SELECT COUNT(*) FROM maintable";
$aplfdg3 = mysqli_query($log1_congfn3, $selfgdt3);
    
   




}
?>


<form method="post" action="my-property_a.php">
    <input class="vmp" type="submit" name="dfkgjfgklr" value="Viwe my patients">
</form>






<!--pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp-->



<!-- <select>
<?php
    $connection = mysqli_connect('localhost','root','','bigtable');
    $sqlcommand = "SELECT * FROM up";
    $aplay = mysqli_query($connection, $sqlcommand);



    while ($i = mysqli_fetch_assoc($aplay)) {
         $id = $i['username'] ;
      
      echo "<option value='$id' name=id>$id</option>";
        
    }
?> 
</select> -->







<!-- <form method="post" action="my-property.php" style="position: absolute;">
    <input type="text" name="user">
    <input type="password" name="pass"><br><br>
    <input type="submit" name="OK"> -->

        
</form>
<style type="text/css">
    #css{color: lightblue;}
</style>

<!--pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp-->



























<p id="demo"></p>
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

&nbsp;
<script>
  var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear();
  document.write(day + "/" + month + "/" + year)
</script>
</div>

<div id="today">
<script>
var day;
switch (new Date().getDay()) {
    case 0:
        day = "Sunday";
        break;
    case 1:
        day = "Monday";
        break;
    case 2:
        day = "Tuesday";
        break;
    case 3:
        day = "Wednesday";
        break;
    case 4:
        day = "Thursday";
        break;
    case 5:
        day = "Friday";
        break;
    case  6:
        day = "Saturday";
}
document.getElementById("demo").innerHTML = "Today is " + day;
</script>
</div>
<!-- <a href="index_a.php"><input id="summiii" type="submit" value="Okaye"></a> -->

</body>
</html>


