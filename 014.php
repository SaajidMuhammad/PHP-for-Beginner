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
		<div id="content" class="bg-light" style="height:1050px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;">
			<h4 style="font-weight:bold; text-align:center;">14. Modify above program to show total and average marks of each student </h4></div>
			
			<div style="background-color:#DCDCDC;height:900px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;?php 
$student=array(
			
	$aadhil=array("name"=>"Aadhil",
			"mark1"=>71,
			"mark2"=>82,
			"mark3"=>93
			),
	$faros=array("name"=>"Faros",
			"mark1"=>64,
			"mark2"=>75,
			"mark3"=>86
			),
	$fasly=array("name"=>"Fasly",
			"mark1"=>97,
			"mark2"=>88,
			"mark3"=>79
			),
	$muneef=array("name"=>"Muneef",
			"mark1"=>68,
			"mark2"=>77,
			"mark3"=>86
			),
	$nawshad=array("name"=>"Nawshad",
			"mark1"=>95,
			"mark2"=>84,
			"mark3"=>73
			));
echo "Total of ", $student[0]["name"]; 
echo  "&nbsp;= ", (array_sum($aadhil)); echo "&lt;/br>";
echo "Total of ", $student[1]["name"]; 
echo  "&nbsp;= ", (array_sum($faros)); echo "&lt;/br>";
echo "Total of ", $student[2]["name"]; 
echo  "&nbsp;= ", (array_sum($fasly)); echo "&lt;/br>";
echo "Total of ", $student[3]["name"]; 
echo  "&nbsp;= ", (array_sum($muneef)); echo "&lt;/br>";
echo "Total of ", $student[4]["name"]; 
echo  "&nbsp;= ", (array_sum($nawshad)); echo "&lt;/br>";
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:900px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 160px;">
					
					<?php

					$student=array(
			
				$aadhil=array("name"=>"Aadhil",
						"mark1"=>71,
						"mark2"=>82,
						"mark3"=>93
						),
				$faros=array("name"=>"Faros",
						"mark1"=>64,
						"mark2"=>75,
						"mark3"=>86
						),
				$fasly=array("name"=>"Fasly",
						"mark1"=>97,
						"mark2"=>88,
						"mark3"=>79
						),
				$muneef=array("name"=>"Muneef",
						"mark1"=>68,
						"mark2"=>77,
						"mark3"=>86
						),
				$nawshad=array("name"=>"Nawshad",
						"mark1"=>95,
						"mark2"=>84,
						"mark3"=>73
						));
			echo "Total of ", $student[0]["name"]; echo  "&nbsp;= ", (array_sum($aadhil)); echo "</br>";			
			echo "Total of ", $student[1]["name"]; echo  "&nbsp;= ", (array_sum($faros)); echo "</br>";
			echo "Total of ", $student[2]["name"]; echo  "&nbsp;= ", (array_sum($fasly)); echo "</br>";
			echo "Total of ", $student[3]["name"]; echo  "&nbsp;= ", (array_sum($muneef)); echo "</br>";
			echo "Total of ", $student[4]["name"]; echo  "&nbsp;= ", (array_sum($nawshad)); echo "</br>";

					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>