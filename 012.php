<!DOCTYPE html>

<html>
    <head>
        <title>Assignment | Web Development | Saajid Muhammad</title>
        <meta charset="UTF-8">
        <meta Name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
		
		<script type="text/javascript" src="js/fontawesome.min.js"></script>
		
		
    </head>
    <body  class="container" style="background-color:#C0C0C0;">
       <nav class="navbar navbar-expand-sm bg-dark">
			<a href="index.php" class="btn btn-primary btn-sm" role="button" style="font-weight:bold; width:40px;"><i class="fas fa-home"></i></a>
		</nav>
		<div id="content" class="bg-light" style="height:1000px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:80px;"><h4 style="font-weight:bold; text-align:center;">12. Write a program to keep student Name, Mark1, Mark2, Mark3 of five students </br>(Hint: Use Multidimensional Arrays )  </h4></div>
			
			<div style="background-color:#DCDCDC;height:850px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;?php 
$student=array(
			
	array("Name"=>"Aadhil",
		"Mark1"=>71,
		"Mark2"=>82,
		"Mark3"=>93
		),
	array("Name"=>"Faros",
		"Mark1"=>64,
		"Mark2"=>75,
		"Mark3"=>86
		),
	array("Name"=>"Fasly",
		"Mark1"=>97,
		"Mark2"=>88,
		"Mark3"=>79
		),
	array("Name"=>"Muneef",
		"Mark1"=>68,
		"Mark2"=>77,
		"Mark3"=>86
		),
	array("Name"=>"Nawshad",
		"Mark1"=>95,
		"Mark2"=>84,
		"Mark3"=>73
		));
	foreach($student as $x)
		{while(list($y,$z)= each($x)){
		echo "$y -  $z &lt;br>";
		}}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:850px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 170px;">
					
					<?php

					$student=array(
			
					array("Name"=>"Aadhil",
						"Mark1"=>71,
						"Mark2"=>82,
						"Mark3"=>93
						),
					array("Name"=>"Faros",
						"Mark1"=>64,
						"Mark2"=>75,
						"Mark3"=>86
						),
					array("Name"=>"Fasly",
						"Mark1"=>97,
						"Mark2"=>88,
						"Mark3"=>79
						),
					array("Name"=>"Muneef",
						"Mark1"=>68,
						"Mark2"=>77,
						"Mark3"=>86
						),
					array("Name"=>"Nawshad",
						"Mark1"=>95,
						"Mark2"=>84,
						"Mark3"=>73
						));
					foreach($student as $x)
							{while(list($y,$z)= each($x)){
							echo "$y -  $z <br>";
							}}
			
			

					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>