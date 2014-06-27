<!DOCTYPE html> 
<html>
<head>
	<title>What Should I Watch?</title>
	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/hint.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<link rel="icon" href="favicon.ico">
	
	<meta name=”description” content=”free film comparison”/>
	<meta name=”keywords” content=”films, movies, what, should, i, watch” />
	<meta http-equiv="content-language" content="en" />
</head>

<script>
	
	/* Analytics */
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-30115948-2', 'grapplerworld.co.uk');
	ga('send', 'pageview');
	
	/* Resize input box */
	window.onload   = function(){document.getElementById("box").size = (window.innerWidth / 20) - 5;console.log(window.innerWidth / 20) -5;}
	window.onresize = function(){document.getElementById("box").size = (window.innerWidth / 20) - 5;console.log(window.innerWidth / 20) -5;}
	
	/* Result mouse over */
	function filmPic1() {
		if (document.getElementById("film1").black=="on") {
			document.getElementById("film1").src="img/poster.png";
			document.getElementById("film1").black="off";
		} else {
			document.getElementById("film1").src="img/posterdim.png";
			document.getElementById("film1").black="on";
		}
	}
	
	function filmPic2() {
		if (document.getElementById("film2").black=="on") {
			document.getElementById("film2").src="img/poster.png";
			document.getElementById("film2").black="off";
		} else {
			document.getElementById("film2").src="img/posterdim.png";
			document.getElementById("film2").black="on";
		}
	}
	
	function filmPic3() {
		if (document.getElementById("film3").black=="on") {
			document.getElementById("film3").src="img/poster.png";
			document.getElementById("film3").black="off";
		} else {
			document.getElementById("film3").src="img/posterdim.png";
			document.getElementById("film3").black="on";
		}
	}
	
	$(document).ready(function(){
		$("#pic1").click(function(){
			$("#text1").slideToggle("700,swing");
		});
	});
	
	$(document).ready(function(){
		$("#pic2").click(function(){
			$("#text2").slideToggle("700,swing");
		});
	});
	
	$(document).ready(function(){
		$("#pic3").click(function(){
			$("#text3").slideToggle("700,swing");
		});
	});
</script>
<body>
<center>
<div id="register">get better results - <a href="register.php">register</a></div>

<h1>What Should I Watch? <sup>&#945;lpha<!--&#946;eta--></sup></h1>
<br>
<br>
<br>
<br>
<br>

<table>
  <tr>
  	<td>
		<div id="pic1">
			<img id="film1" black="off" onmouseover="filmPic1();" onmouseleave="filmPic1();" src="img/poster.png">
		</div>
	</td>
	  	<td>
		<div id="pic2">
			<img id="film2" black="off" onmouseover="filmPic2();" onmouseleave="filmPic2();" src="img/poster.png">
		</div>
	</td>
	  	<td>
		<div id="pic3">
			<img id="film3" black="off" onmouseover="filmPic3();" onmouseleave="filmPic3();" src="img/poster.png">
		</div>
	</td>
  </tr>
  <tr>
    <td><b>Avatar</b></td>
    <td><b>film title</b></td>
    <td><b>film title</b></td>
  </tr>
  <tr>
  	<td><div id="text1" style="display:none;">
			Match 1<br>
			Match 2<br>
			Tagline<br>
			Budget<br>
			Rating<br>
			<a href="#">Watch on Amazon</a>
		</div></td>
  	<td><div id="text2" style="display:none;">
			Match 1<br>
			Match 2<br>
			Tagline<br>
			Budget<br>
			Rating<br>
			<a href="#">Watch on Amazon</a>
		</div></td>
  	<td><div id="text3" style="display:none;">
			Match 1<br>
			Match 2<br>
			Tagline<br>
			Budget<br>
			Rating<br>
			<a href="#">Watch on Amazon</a>
		</div></td>
  </tr>
</table><br><br>
<hr><h2>Try these other suggestions</h2>

<table width="700px">
  <tr>
    <td><img src="img/poster.png"></td>
    <td><table width="800px">
    	<tr>
    		<td>Film Title</td>
    		<tr><td>
			Match 1<br>
			Match 2<br>
			Tagline<br>
			Budget<br>
			Rating<br>
			<a href="#">Watch on Amazon</a></td></tr>
    	</tr>
    </table></td>
  </tr>
</table><br><br>

<footer><hr>
	A Grappler Production &copy; 2014 | By Thomas Roberts & Lewis Pawsey
</footer>
</center>
</body>
</html>