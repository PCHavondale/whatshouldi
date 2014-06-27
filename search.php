<?php
require_once 'classes/Film.php';

$searchedString = fixString($_GET["name"]);

echo "You searched for: ".$searchedString."<br>Avatar id is: 1965377<br>";

if (filmExists($searchedString)){

echo "<br>--------------Film info--------------<br>";
$id = getFilmId($searchedString);
$genre = getGenre($id);
$rating = getAgeRating($id);
$tagline = getTagline($id);
$year = getProdutionYear($id);
$genre = getGenre($id);
$cast = getCast($id);
echo "film id: " . $id . "<br>";
echo "Rating: " . $rating . "<br>";
echo "Tagline: " . $tagline . "<br>";
echo "Production year: " . $year . "<br>";
echo "Genre: " . $genre . "<br>";
echo "Cast: " . $cast . "<br>";

echo "<br>";

$id1 = getSimilar($id, $rating, $genre, $cast);
$film1 = "";
$genre1 = getGenre($id1);
$rating1 = getAgeRating($id1);
$tagline1 = getTagline($id1);
$year1 = getProdutionYear($id1);


}

?>

<html>

<head>
	<title>What Should I Watch?</title>

	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type='text/css' href='css/main.css'>
	
	<link rel="icon" href="favicon.ico">
	
	<meta http-equiv="content-language" content="en" />
</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30115948-2', 'grapplerworld.co.uk');
  ga('send', 'pageview');
</script>
</html>
