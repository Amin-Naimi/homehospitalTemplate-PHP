<?php include ('the_php.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>My-property</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" type="text/css" href="my-property-css.css">
<link rel="stylesheet" type="text/css" href="data.css">
</head>
<body>

<style type="text/css">
    .mont_title{
        color: lightblue;
        font-size: 2.1vw;
    }
    #send_doctor_time_totable{
        border:none;
        transition: .4s;
        font-size: 1.5vw;
        color: lightblue;
        position: absolute;
        transform: translate(37vw, 38vw);
        width: 8vw;
        height: 3.3vw;
        background-color: rgba(99,99,99,.7);
    }
    .mont_title{
        color: lightblue;
        font-size: 2.1vw;
    }
    #send_doctor_time_totable:hover{
        width: 8.2vw;
        height: 3.6vw;
        background-color: rgba(66,66,66,.7);
    }
</style>


<!--pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp-->
<?php
include ('the_php.php');
?>



<form method="post" action="my-property_d.php">
<div id="month_get">
    <font class="mont_title">Select a Month</font><br>
    <input type="radio" name="e" value="1" class="monclass"><font class="mont_style_radio">1 </font>
    <input type="radio" name="e" value="2" class="monclass"><font class="mont_style_radio">2 </font>
    <input type="radio" name="e" value="3" class="monclass"><font class="mont_style_radio">3 </font>
    <input type="radio" name="e" value="4" class="monclass"><font class="mont_style_radio">4 </font><br><br>
    <input type="radio" name="e" value="5" class="monclass"><font class="mont_style_radio">5 </font>
    <input type="radio" name="e" value="6" class="monclass"><font class="mont_style_radio">6 </font>
    <input type="radio" name="e" value="7" class="monclass"><font class="mont_style_radio">7 </font>
    <input type="radio" name="e" value="8" class="monclass"><font class="mont_style_radio">8 </font><br><br>
    <input type="radio" name="e" value="9" class="monclass"><font class="mont_style_radio">9 </font>
    <input type="radio" name="e" value="10" class="monclass"><font class="mont_style_radio">10 </font>
    <input type="radio" name="e" value="11" class="monclass"><font class="mont_style_radio">11 </font>
    <input type="radio" name="e" value="12" class="monclass"><font class="mont_style_radio">12 </font>
</div>
<div id="day_get">
    <font class="mont_title">Select a Day</font><br>
    <input type="radio" name="r" value="1" class="mont"><font class="mont_style_radio">1 &nbsp;</font>
    <input type="radio" name="r" value="2" class="mont"><font class="mont_style_radio">2 &nbsp;</font>
    <input type="radio" name="r" value="3" class="mont"><font class="mont_style_radio">3 &nbsp;</font>
    <input type="radio" name="r" value="4" class="mont"><font class="mont_style_radio">4 &nbsp;</font>
    <input type="radio" name="r" value="5" class="mont"><font class="mont_style_radio">5 &nbsp;</font>
    <input type="radio" name="r" value="6" class="mont"><font class="mont_style_radio">6 &nbsp;</font>
    <input type="radio" name="r" value="7" class="mont"><font class="mont_style_radio">7 &nbsp;</font><br><br>
    <input type="radio" name="r" value="8" class="mont"><font class="mont_style_radio">8 &nbsp;</font>
    <input type="radio" name="r" value="9" class="mont"><font class="mont_style_radio">9 &nbsp;</font>
    <input type="radio" name="r" value="10" class="mont"><font class="mont_style_radio">10 </font>
    <input type="radio" name="r" value="11" class="mont"><font class="mont_style_radio">11 </font>
    <input type="radio" name="r" value="12" class="mont"><font class="mont_style_radio">12 </font>
    <input type="radio" name="r" value="13" class="mont"><font class="mont_style_radio">13 </font>
    <input type="radio" name="r" value="14" class="mont"><font class="mont_style_radio">14 </font><br><br>
    <input type="radio" name="r" value="15" class="mont"><font class="mont_style_radio">15 </font>
    <input type="radio" name="r" value="16" class="mont"><font class="mont_style_radio">16 </font>
    <input type="radio" name="r" value="17" class="mont"><font class="mont_style_radio">17 </font>
    <input type="radio" name="r" value="18" class="mont"><font class="mont_style_radio">18 </font>
    <input type="radio" name="r" value="19" class="mont"><font class="mont_style_radio">19 </font>
    <input type="radio" name="r" value="20" class="mont"><font class="mont_style_radio">20 </font>
    <input type="radio" name="r" value="21" class="mont"><font class="mont_style_radio">21 </font><br><br>
    <input type="radio" name="r" value="22" class="mont"><font class="mont_style_radio">22 </font>
    <input type="radio" name="r" value="23" class="mont"><font class="mont_style_radio">23 </font>
    <input type="radio" name="r" value="34" class="mont"><font class="mont_style_radio">24 </font>
    <input type="radio" name="r" value="35" class="mont"><font class="mont_style_radio">25 </font>
    <input type="radio" name="r" value="36" class="mont"><font class="mont_style_radio">26 </font>
    <input type="radio" name="r" value="37" class="mont"><font class="mont_style_radio">27 </font>
    <input type="radio" name="r" value="38" class="mont"><font class="mont_style_radio">28 </font><br><br>
    <input type="radio" name="r" value="39" class="mont"><font class="mont_style_radio">29 </font>
    <input type="radio" name="r" value="30" class="mont"><font class="mont_style_radio">30 </font>
    <input type="radio" name="r" value="31" class="mont"><font class="mont_style_radio">31 </font>

</div>
<div id="houer_get">
<font class="mont_title">Select an Houers</font><br>
<input type="radio" name="h" value="1:0-1:30" class="ohuer"><font class="mont_style_radio">1:0-1:30 </font>
<input type="radio" name="h" value="1:30-2:0" class="ohuer"><font class="mont_style_radio">1:30-2:0 </font>
<input type="radio" name="h" value="2:0-2:30" class="ohuer"><font class="mont_style_radio">2:0-2:30 </font><br><br>
<input type="radio" name="h" value="3:0-3:30" class="ohuer"><font class="mont_style_radio">3:0-3:30 </font>
<input type="radio" name="h" value="3:30-4:0" class="ohuer"><font class="mont_style_radio">3:30-4:0 </font>
<input type="radio" name="h" value="4:0-4:30" class="ohuer"><font class="mont_style_radio">4:0-4:30 </font><br><br>z<input type="radio" name="h" value="4:30-5:0" class="ohuer"><font class="mont_style_radio">4:30-5:0 </font>
<input type="radio" name="h" value="5:0-5:30" class="ohuer"><font class="mont_style_radio">5:0-5:30 </font>
<input type="radio" name="h" value="5:30-6:0" class="ohuer"><font class="mont_style_radio">5:30-6:0 </font><br><br>
<input type="radio" name="h" value="6:0-6:30" class="ohuer"><font class="mont_style_radio">6:0-6:30 </font>
<input type="radio" name="h" value="6:30-7:0" class="ohuer"><font class="mont_style_radio">6:30-7:0 </font>
<input type="radio" name="h" value="7:0-7:30" class="ohuer"><font class="mont_style_radio">7:0-7:30 </font><br><br>
<input type="radio" name="h" value="7:30-8:0" class="ohuer"><font class="mont_style_radio">7:30-8:0 </font>
<input type="radio" name="h" value="8:0-8:30" class="ohuer"><font class="mont_style_radio">8:0-8:30 </font>
<input type="radio" name="h" value="8:30-9:0" class="ohuer"><font class="mont_style_radio">8:30-9:0 </font><br><br>
<input type="radio" name="h" value="9:0-9:30" class="ohuer"><font class="mont_style_radio">9:0-9:30 </font>
<input type="radio" name="h" value="9:30-10:0" class="ohuer"><font class="mont_style_radio">9:30-10:0</font>
<input type="radio" name="h" value="10:0-10:30" class="ohuer"><font class="mont_style_radio">10:0-10:30</font><br><br>
<input type="radio" name="h" value="10:30-11:0" class="ohuer"><font class="mont_style_radio">10:30-11:0 </font>
<input type="radio" name="h" value="11:0-11:30" class="ohuer"><font class="mont_style_radio">11:0-11:30 </font>
<input type="radio" name="h" value="11:30-12:0" class="ohuer"><font class="mont_style_radio">11:30-12:0 </font><br><br>
</div>
<input id="send_doctor_time_totable" type="submit" value="CHEK" name="dfgfdgdgfdg">
</form>

<!--pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp-->


<div style="padding: 5px; position: absolute;">
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


<a href="index_d.php"><input id="summiii" type="submit" value="Okaye"></a>


</div>
</body>
</html>


