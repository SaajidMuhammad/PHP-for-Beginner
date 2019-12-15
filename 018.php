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
			18. Write a php function to add to input values</h4></div>
			
			<div style="background-color:#DCDCDC;height:500px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;form method="get">
Enter Number 1 : &lt;input type="text" name="num1">
Enter Number 2 : &lt;input type="text" name="num2">
&lt;button name="add" class="btn-primary">Add&lt;/button>
&lt;/form&gt;
&lt;?php 
if(isset($_GET['add'])){
	$sum = 0;
	
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
function add($num1,$num2){
	$sum = $num1+$num2;
	return $sum;
}
echo "Total Is = ", add($num1,$num2);
}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:500px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 0px; text-align:center;">
					<form method="get">
						Enter Number 1 : <input type="text" name="num1"></br>
						Enter Number 2 : <input type="text" name="num2"></br>
						<button name="add" class="btn-primary">Add</button>
					</form>
					<?php 
						if(isset($_GET['add'])){
							$sum = 0;
							
							$num1 = $_GET['num1'];
							$num2 = $_GET['num2'];
							
						function add($num1,$num2){
							$sum = $num1+$num2;
							return $sum;
						}
						echo "Total Is = ", add($num1,$num2);
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