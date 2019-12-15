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
		<div id="content" class="bg-light" style="height:600px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">3. Write a program to display assigned variable values</h4></div>
			
			<div style="background-color:#DCDCDC;height:420px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
	&lt;?php 
	$int=12;
	$double=12.12;
	$float=10.3685;
	$string="test";
	$array=array("a","b","c");
	$bool=true;
	
	echo gettype($int),"&lt;br>";
	echo gettype($double),"&lt;br>";
	echo gettype($float),"&lt;br>";
	echo gettype($string),"&lt;br>";
	echo gettype($array),"&lt;br>";
	echo gettype($bool),"&lt;br>";
	?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:420px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 0px; text-align:center;">
					<?php 
						
						$int=12;
						$double=12.12;
						$float=10.3685;
						$string="test";
						$array = array("a","b","c");
						$bool=true;
						echo gettype($int),"<br>";
						echo gettype($double),"<br>";
						echo gettype($float),"<br>";
						echo gettype($string),"<br>";
						echo gettype($array),"<br>";
						echo gettype($bool),"<br>";
	
					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>