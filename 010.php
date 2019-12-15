<!DOCTYPE html>

<html>
    <head>
        <title>Assignment | Web Development | Saajid Muhammad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
		
		<script type="text/javascript" src="js/fontawesome.min.js"></script>
		
		
    </head>
    <body  class="container" style="background-color:#C0C0C0;">
       <nav class="navbar navbar-expand-sm bg-dark">
			<a href="index.php" class="btn btn-primary btn-sm" role="button" style="font-weight:bold; width:40px;"><i class="fas fa-home"></i></a>
		</nav>
		<div id="content" class="bg-light" style="height:740px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">10. Write PHP code for finding the number of days in a month </h4></div>
			
			<div style="background-color:#DCDCDC;height:600px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;?php 
//cal_days_in_month(calendar,month,year);

$d=cal_days_in_month(CAL_GREGORIAN,1,2019);
echo "$d days in January 2019.&lt;br>";

$d=cal_days_in_month(CAL_GREGORIAN,2,2019);
echo "$d days in Febraury 2019.&lt;br>"; 

$d=cal_days_in_month(CAL_GREGORIAN,2,2020);
echo "$d days in Febraury 2020.&lt;br>";

$d=cal_days_in_month(CAL_GREGORIAN,3,2019);
echo "$d days in March 2019.&lt;br>";

$d=cal_days_in_month(CAL_GREGORIAN,4,2019);
echo "$d days in April 2019.&lt;br>";

$d=cal_days_in_month(CAL_GREGORIAN,11,2019);
echo "$d days in November 2019.&lt;br>";

$d=cal_days_in_month(CAL_GREGORIAN,12,2019);
echo "$d days in December 2019.&lt;br>";
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:600px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 150px;">
					
					<?php

					$d=cal_days_in_month(CAL_GREGORIAN,1,2019);
					echo "$d days in January 2019.<br>";

					$d=cal_days_in_month(CAL_GREGORIAN,2,2019);
					echo "$d days in Febraury 2019.<br>"; 

					$d=cal_days_in_month(CAL_GREGORIAN,2,2020);
					echo "$d days in Febraury 2020.<br>";

					$d=cal_days_in_month(CAL_GREGORIAN,3,2019);
					echo "$d days in March 2019.<br>";

					$d=cal_days_in_month(CAL_GREGORIAN,4,2019);
					echo "$d days in April 2019.<br>";

					$d=cal_days_in_month(CAL_GREGORIAN,11,2019);
					echo "$d days in November 2019.<br>";

					$d=cal_days_in_month(CAL_GREGORIAN,12,2019);
					echo "$d days in December 2019.<br>";

					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>