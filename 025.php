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
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">
			25. Write a program to display factorial of any given number entered by user</h4></div>
			
			<div style="background-color:#DCDCDC;height:450px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;form method="get">  
Enter a Number : &lt;input type="text" name="number">  
&lt;button name="submit">Submit&lt;/button>
&lt;/form> 

&lt;?php 
if($_GET){  
	$x = 1;    
	$number = $_GET['number'];    
	for ($i = 1; $i <= $number; $i++){
	$x = $x * $i;  
	}
	echo "Factorial of $number is = $x";
	}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:450px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show1" style="margin:30px 30px 30px 80px;">
					
					<form method="get">  
						Enter a Number :  
						<input type="text" name="number">  
						<button name="submit" class="btn-primary">Submit</button>						
					</form>  
					<?php   
						if($_GET){  
							$x = 1;    
							$number = $_GET['number'];    
							for ($i = 1; $i <= $number; $i++){         
								$x = $x * $i;  
								}
								echo "<br> Factorial of $number is = $x";		 
						}  
					?>
					
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>