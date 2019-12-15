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
		<div id="content" class="bg-light" style="height:700px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:80px;"><h4 style="font-weight:bold; text-align:center;">
			30. Write a program to keep three student details (Name, NIC , Age, Address) and display it. (Hint : use multidimensional array)</h4></div>
			
			<div style="background-color:#DCDCDC;height:550px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;?php 
$student=array(
	array("Name"=>"Fasly",
	"NIC"=>"970901296v",
	"Age"=> 22,
	"Address" => "76/1,Kandy rd,Polannaruwa"),
	array("Name"=>"Saajid",
	"NIC"=>"971031395v",
	"Age"=> 22,
	"Address" => "16/1,Kandy rd,Gampola"),
	array("Name"=>"Aadhil",
	"NIC"=>"980281247v",
	"Age"=> 22,
	"Address" => "61/4,Kandy rd,Mawanella")
	
	);
foreach($student as $x)
{while(list($y,$z)= each($x)){
echo "$y -  $z <br/>";
}}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:550px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 100px; ">
					
					<?php
						$student=array(
									array("Name"=>"Fasly",
									"NIC"=>"970901296v",
									"Age"=> 22,
									"Address" => "76/1,Kandy rd,Polannaruwa"),
									array("Name"=>"Saajid",
									"NIC"=>"971031395v",
									"Age"=> 22,
									"Address" => "16/1,Kandy rd,Gampola"),
									array("Name"=>"Aadhil",
									"NIC"=>"980281247v",
									"Age"=> 22,
									"Address" => "61/4,Kandy rd,Mawanella")
									
									);
						foreach($student as $x)
						{while(list($y,$z)= each($x)){
						echo "$y -  $z <br/>";
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