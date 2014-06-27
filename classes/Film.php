<?php

$db_server = mysql_connect("127.0.0.1", "thomas", "opullentpig");
mysql_select_db("whatshouldi");

function filmExists ($searchedString) {
	$result = mysql_query("SELECT * FROM films WHERE title='" . $searchedString . "'");
	if (!$result) die ('Database access failed: ' . mysql_error());
	if(mysql_num_rows($result) > 0) {
		return true;
	} else {
		return false;
	}
}

function getFilmId ($searchedString) {
	$result = mysql_query("SELECT id FROM films WHERE title='" . $searchedString . "'");
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'id');
}

function getFilmName ($id) {
	$result = mysql_query("SELECT title FROM films WHERE id = " . $id . ";");
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'title');
}

function getSimilar($id, $rating, $genre, $cast) {
	$filmMatch = array();
	
	$result = mysql_query("SELECT * FROM films WHERE rating = '" . $rating . "'");
	//$result = mysql_query("SELECT * FROM films");
	
	
	$cast1 = json_decode($cast);
	$genre1 = json_decode($genre);
	$rows = mysql_num_rows($result);
	for ($x = 0; $x < $rows; $x++) {
		
		$score = 0;
		$castmatch = 0;
		$genrematch = 0;
		/*
		$result2 = mysql_query("SELECT cast FROM films WHERE id = '" . mysql_result($result, $x, 'id') . "'");
		$cast2 = array();
		$cast2 = json_decode(mysql_result($result2, 0, 'cast'));
		for ($a = 0; $a < count($cast1); $a++) {
			for ($b = 0; $b < count($cast2); $b++) {
				if ($cast1[$a] == $cast2[$b]) {
					$castmatch++;
				}
			}
		}
		//$castmatch = min($castmatch,15);
		if ($castmatch > 4) {
			$score += 5;
		} else if ($castmatch > 3) {
			$score += 4;
		} else if ($castmatch > 2) {
			$score += 3;
		} else if ($castmatch > 1) {
			$score += 2;
		} else if ($castmatch > 0) {
			$score += 1;
		}
		*/
		//echo $cast . "<br>";
		//echo mysql_result($result2, 0, 'cast'). "<br>";
		//echo "castmatch = " . $castmatch . "<br>";
		//echo "score = " . $score ."<br>";
		
		$result3 = mysql_query("SELECT genres FROM films WHERE id = '" . mysql_result($result, $x, 'id') . "'");
		$genre2 = array();
		$genre2 = json_decode(mysql_result($result3, 0, 'genres'));
		for ($c = 0; $c < count($genre1); $c++) {
			for ($d = 0; $d < count($genre2); $d++) {
				if ($genre1[$c] == $genre2[$d]) {
					$genrematch++;
				}
			}
		}
		
		$genrematch = min($genrematch,15);
		if ($genrematch > 3) {
			$score += 5;
		} else if ($genrematch > 2) {
			$score += 4;
		} else if ($genrematch > 1) {
			$score += 3;
		}
		
		if ($score > 3) {
			array_push($filmMatch, mysql_result($result, $x, 'id'));
		}
	}
	
	$ran = rand(0, count($filmMatch));
	
	return $filmMatch[$ran];
}

function getProdutionYear($searchId){
	$result = mysql_query("SELECT year FROM films WHERE id = ". $searchId);
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'year');
}

function getGenre($searchId){
	$result = mysql_query("SELECT genres FROM films WHERE id = " . $searchId);
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'genres');
}

function getCast($searchId){
	$result = mysql_query("SELECT cast FROM films WHERE id = " . $searchId);
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'cast');
}

function getAgeRating($searchId){
	$result = mysql_query("SELECT rating FROM films WHERE id = " . $searchId);
	if (!$result) die ('Database access failed: ' . mysql_error());
	return mysql_result($result, 0, 'rating');
}

function getTagline($searchId){
	$result = mysql_query("SELECT tagline FROM films WHERE id = " . $searchId);
	if (!$result) die ('Database access failed: ' . mysql_error());
	if (mysql_num_rows($result) > 0) {
		return mysql_result($result, 0, 'tagline');
	} else {
		return "not found";
	}
}

function fixString($string){
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
	return $string;
}

//mysql_close($db_server);

?>