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
			21. Write a program to check user name and password correct or not. Give message Successfully login or Unauthorized access</h4></div>
			
			<div style="background-color:#DCDCDC;height:550px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;h4>Login Here:&lt;/h4>
&lt;form method="post">
	Username : 
	&lt;input type="name" name="uname">&lt;/br>
	Password : 
	&lt;input type="password" name="pass">&lt;/br>
	&lt;button name="login">Login&lt;/button>
&lt;/form>
&lt;?php 
if(isset($_POST['login'])){
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	if($uname == 'saajid' && $pass == "12345"){
		echo "Login Successful!"; 
	}
	else{
		echo "Unauthorized access";
	}
		
}
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:550px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show3" style="margin:30px 30px 30px 50px; text-align:;">
					
					<h4>Login Here: </h4>
					<form method="post">
						Username : <input type="name" name="uname"></br>
						Password :&nbsp; <input type="password" name="pass"></br>
						<button name="login" class="btn-primary">Login</button>
					</form>
					<?php 
						if(isset($_POST['login'])){
							$uname = $_POST['uname'];
							$pass = $_POST['pass'];
							
							if($uname == 'saajid' && $pass == "12345"){
								echo "<h3> Login Successful! </h3>"; 
							}
							else{
								echo "<h3> Unauthorized access </h3>";
							}
								
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