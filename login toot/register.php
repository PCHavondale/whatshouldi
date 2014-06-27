<!DOCTYPE html> 
<html>

<head>
	<title>What Should I Watch?</title>
	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/hint.css">
	<link rel="icon" href="favicon.ico">
</head>

<body>
<center>

<br>
<br>
<h1>What Should I Watch? <sup>&#945;lpha<!--&#946;eta--></sup></h1>
<br>
<br>
<br>

<script>

function login(){
	
	document.getElementById("login").innerHTML = '<form action="login.php" method="post"><input type="text" name="username" size=35 placeholder="username" autocomplete="off"><br><br><input type="password" name="password" size=35 placeholder="password"><br><br><input type="submit" class="button" value="log in"></form>';
	document.getElementById("signupbutton").style.backgroundColor='#FFFFFF';
	document.getElementById("loginbutton").style.backgroundColor='#46B525';
}

function register(){
	document.getElementById("login").innerHTML = '<form action="create.php" method="post"><input type="text" name="username" size=35 placeholder="username" autocomplete="off"><br><br><input type="password" name="password" size=35 placeholder="password"><br><br><input type="text" name="email" size=35 placeholder="email" autocomplete="off"><br><br><input type="submit" class="button" value="register"></form>';
	document.getElementById("signupbutton").style.backgroundColor='#46B525';
	document.getElementById("loginbutton").style.backgroundColor='#FFFFFF';
}
</script>

<input type="button" class="button" id="loginbutton" value="login" onclick="login();" />&nbsp;
<input type="button" class="button" id="signupbutton" value="register" onclick="register();" />

<br>
<br>
<div id="login">

</div>

<footer>
	<hr>
	A Grappler Production &copy; 2014 | By Thomas Roberts & Lewis Pawsey
	<div style="color:#FF0000">OFFICAL LAUNCH: 30th June</div>
</footer>

</center>
</body>
</html>