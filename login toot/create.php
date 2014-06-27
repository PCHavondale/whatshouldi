<!DOCTYPE html> 
<html>

<?php
session_start();

require_once 'classes/Mysql.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die(mysql_error());
mysql_select_db("grapplerworld") or die(mysql_error());

$username = fixString($_POST["username"]);
$password = fixString($_POST["password"]);
$email = fixString($_POST["email"]);
$password = sha1(md5("a6sH7&" . $password . "sj*h2£"));

$query = "select * from users where username = '" . $username . "';";
$result = mysql_query($query);
if (!$result) die('Database access failed: ' . mysql_error());
$rows = mysql_num_rows($result);

if ($rows == 0){
	$query2 = "INSERT INTO users (username, password, email, admin) VALUES ('" . $username . "','" . $password . "','" . $email . "',0);";
	$result2 = mysql_query($query2);
	if (!$result2) die('Database access failed: ' . mysql_error());
} else {
	echo "USERNAME TAKEN!";	
}
function fixString($string){
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
	return $string;
}

?>

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
Thanks for signing up!
<br>
<a href="index.html">go to the homepage</a>

<footer>
	<hr>
	A Grappler Production &copy; 2014 | By Thomas Roberts & Lewis Pawsey
	<div style="color:#FF0000">OFFICAL LAUNCH: 30th June</div>
</footer>

</center>
</body>
</html>