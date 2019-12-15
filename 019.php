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
		<div id="content" class="bg-light" style="height:900px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">
			19. Write a function for  +,-,* and / of two numbers and return values</h4></div>
			
			<div style="background-color:#DCDCDC;height:750px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;form method="get">
Enter Number 1 : &lt;input type="text" name="num1">
Enter Number 2 : &lt;input type="text" name="num2">
&lt;button name="submit">Submit&lt;/button>
&lt;/form&gt;
&lt;?php 
if(isset($_GET['submit'])){
	$sum = 0;
	
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
function res($num1,$num2){
	$add = $num1+$num2;
	$sub = $num1-$num2;
	$div = $num1*$num2;
	$mul = $num1/$num2;
	
	$result = array($add,$sub,$div,$mul);
	return $result;
}
$func_result = res($num1,$num2);

echo "Result for $num1+$num2 = ". $func_result [0];
echo "Result for $num1-$num2 = ". $func_result [1];
echo "Result for $num1*$num2 = ". $func_result [2];
echo "Result for $num1/$num2 = ". $func_result [3];

}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:750px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show2" style="margin:30px 30px 30px 140px;">
					
					<form method="get">
						Enter Number 1 : <input type="text" name="num1"></br>
						Enter Number 2 : <input type="text" name="num2"></br>
						<button name="submit" class="btn-primary">Submit</button>
					</form>
					<?php 
						if(isset($_GET['submit'])){
							$sum = 0;
							
							$num1 = $_GET['num1'];
							$num2 = $_GET['num2'];
							
						function res($num1,$num2){
							$add = $num1+$num2;
							$sub = $num1-$num2;
							$div = $num1*$num2;
							$mul = $num1/$num2;
							
							$result = array($add,$sub,$div,$mul);
							return $result;
						}
						$func_result = res($num1,$num2);
						
						echo "Result for $num1+$num2 = ". $func_result [0]."</br>";
						echo "Result for $num1-$num2 = ". $func_result [1]."</br>";
						echo "Result for $num1*$num2 = ". $func_result [2]."</br>";
						echo "Result for $num1/$num2 = ". $func_result [3]."</br>";

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