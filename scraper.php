<html>
<?php 
error_reporting(0);

$city=$_GET['city'];
$city=str_replace(' ','',$city);
$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
$regex="temperature";
    if (preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',$contents,$matches)) {
         $result= $matches[1];
    } else {
        $result= "Sorry We can't find the weather for city Please try again";
    }

?>



<head>
<title>Weather Predictor</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

<style>
html, body {
height:100%;
}
.container {
background-image:url("imge.jpg");

width:100%;
height:100%;
background-size:cover;
background-position:center;
padding-top:100px;
}
.center {
text-align:center;
}
.white {
color:white;
}
p {
padding-top:15px;
padding-bottom:15px;
}
button {
margin-top:20px;
margin-bottom:20px;
}
.alert {
margin-top:20px;
font-size:125%;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 class="center white">Weather Predictor</h1>
<p class="lead center white">The Weather Forecast for <?php echo $city;
?>
</p>
<div id="success" class="alert alert-success">
<?php

echo $result;


 ?></div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="panel panel-success">
<div class="panel-footer center"> 
All Copyrights Reserved &copy; Apoorv | <a href="#">About us</a> | 
</div>
</div>
</div>
</body>
</html>
