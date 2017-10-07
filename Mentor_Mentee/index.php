<?php
session_start();

if(isset($_SESSION['uname']))
{ 
header("Location: studhome.php?uname=".$_SESSION['uname']);
exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
  	<script src="Script/jquery.min.js"></script>
  	<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="Script/loginJS.js"></script>
	<script type="text/javascript">
	function changeLogin(user)
	{

 	    userType=user;
		try{
		var head = document.getElementById('Header');
		head.innerHTML=userType+' Login';
		var signUpBtn= document.getElementById('signUp');
		var signup = document.getElementById('signUp');
 		if(userType=="Teacher")
 		{
 			signup.href="signUpTeacher.html"
 			tbl="teachertbl";
 		}
 		else
 		{
 			signup.href="signUp.html"
 			tbl="studenttbl";
 		}
	}catch(err){alert(err);}	
	} 
	</script>
</head>
<body> 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mentor Mentee Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Log In</a></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul> 
  </div>
</nav>

<div class="myContainer">
<ul>
	<li><Button value="Student" onclick="changeLogin(this.value)";>Student</Button></li>
	<li><Button value="Teacher" onclick="changeLogin(this.value)";>Teacher</Button></li>
	<li><Button value="HOD" onclick="changeLogin(this.value)";>HOD</Button></li>
</ul>
		<img src="images/student.png"/>
 	<form method="POST">
 		<div class="Header" id="Header">
	 		Student Login
 		</div>

 		<div class="inner-addon left-addon">
    				<i class="glyphicon glyphicon-user"></i>
 					<input type="text" name="username" id="username" placeholder="Username" autofocus>
 		</div>
 		
 	
 		<div class="inner-addon left-addon">
    				<i class="glyphicon glyphicon-lock"></i>
    			 <input id="password" type="password" name="password" placeholder="Password">
 		</div>
 		<input type="Button" name="Submit" onclick="return Validate(username.value,password.value,tbl)" value="Login" class="btn">
 		<input type="Reset" class="btn" >

 <div class="myAlert" id="myAlert">
 	Incorrect Username or Password
 	<a onclick="myAlert.style.display='none';" href="#">X</a>
 </div>

 	</form><br>
 	<a name="signUp" href="signUp.html" id="signUp">Sign Up</a><br>
 	<br>	
 	<a href="ForgotPwd.html">Forget password?</a>
</div>
<footer>
	<p>System Developed by <a class="footer-text" href="#">Rushikesh and Nikita</a></p>
</footer>
</body>
</html>