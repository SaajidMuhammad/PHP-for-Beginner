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
		<div id="content" class="bg-light" style="height:1200px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">7. Write a program to take average marks of three subjects and display grade (Use if…else…)</h4></div>
			
			<div style="background-color:#DCDCDC;height:1000px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px; overflow:auto;">
					<pre >

&lt;form method="get">
Maths : &lt;input type="text" name="sub1">&lt;/br>
Science : &lt;input type="text" name="sub2">&lt;/br>
English : &lt;input type="text" name="sub3">&lt;/br>
&lt;button name="submit">Submit&lt;/button>
&lt;/form&gt;
&lt;?php 
if(isset($_GET['submit'])){
	$maths = $_GET['sub1'];
	$science = $_GET['sub2'];
	$english = $_GET['sub3'];

	$total = $maths+$science+$english;
	$avg = $total/3;

	 if($avg>=90){
		 echo "You Result is : A+";
	 }
	 else if($avg>=85){
		 echo "You Result is : A";
	 }
	 else if($avg>=75){
		 echo "You Result is : B+";
	 }
	 else if($avg>=65){
		 echo "You Result is : B";
	 }
	 else if($avg>=55){
		 echo "You Result is : C+";
	 }
	 else if($avg>=45){
		 echo "You Result is : C";
	 }
	 else if($avg>=35){
		 echo "You Result is : D";
	 }
	 else{
		 echo "You Result is : F";
	 }
}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:1000px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 165px;">
					<form method="get">
						Maths :  &emsp;<input type="text" name="sub1"></br>
						Science : &puncsp;&puncsp;<input type="text" name="sub2"></br>
						English : &nbsp; <input type="text" name="sub3"></br>
						<button name="submit" class="btn-primary" style="margin-left:101px;">Submit</button>
					</form>
					<?php 
						if(isset($_GET['submit'])){
							$maths = $_GET['sub1'];
							$science = $_GET['sub2'];
							$english = $_GET['sub3'];
							
							$total = $maths+$science+$english;
							$avg = $total/3;
							
							 if($avg>=90){
								 echo "You Result is : A+";
							 }
							 else if($avg>=85){
								 echo "You Result is : A";
							 }
							 else if($avg>=75){
								 echo "You Result is : B+";
							 }
							 else if($avg>=65){
								 echo "You Result is : B";
							 }
							 else if($avg>=55){
								 echo "You Result is : C+";
							 }
							 else if($avg>=45){
								 echo "You Result is : C";
							 }
							 else if($avg>=35){
								 echo "You Result is : D";
							 }
							 else{
								 echo "You Result is : F";
							 }
						}
					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE</h6>
		</footer>
		
		
    </body>
	
</html>