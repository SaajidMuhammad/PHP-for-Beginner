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
		<div id="content" class="bg-light" style="height:650px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">
			22. Write a program to calculated total marks of three subject marks entered by user</h4></div>
			
			<div style="background-color:#DCDCDC;height:500px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;form method="post">
Maths : &lt;input type="text" name="maths">
Science : &lt;input type="text" name="science">
English : &lt;input type="text" name="english">
&lt;button name="submit">Submit&lt;/button>
&lt;/form>
&lt;?php
if(isset($_POST['submit'])){
	$maths = $_POST['maths'];
	$science = $_POST['science'];
	$english = $_POST['english'];
	
	$total = 0;
	
	$total = $maths+$science+$english;
	
	echo "Your Total is : $total";
		
} 
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:500px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show3" style="margin:30px 30px 30px 140px; text-align:;">
					
					<form method="post">
						Maths : &nbsp;&nbsp;<input type="text" name="maths"></br>
						Science : <input type="text" name="science"></br>
						English :&nbsp; <input type="text" name="english"></br>
						<button name="submit" class="btn-primary">Submit</button>
					</form>
					<?php 
						if(isset($_POST['submit'])){
							$maths = $_POST['maths'];
							$science = $_POST['science'];
							$english = $_POST['english'];
							
							$total = 0;
							
							$total = $maths+$science+$english;
							
							echo "Your Total is : $total";
								
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