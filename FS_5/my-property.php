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
<a href="index_p.php"><input id="summiii" type="submit" value="Okaye"></a>

</body>
</html>


