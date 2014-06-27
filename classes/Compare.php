<?php

function compareFilm ($cast1, $genre1, $director1, $producer1,
					  $cast2, $genre2, $director2, $producer2,) {
	
	$score = 0;
	$castmatch = 0;
	
	for ($a = 0; $a < count($cast1); $a++) {
		for ($b = 0; $b < count($cast2); $b++) {
			if ($cast1[$a] == $cast2[$b]) {
				$castmatch++;
			}
		}
	}
	
	$castmatch = min($castmatch,15);
	
	if ($castmatch > 12) {
		$score += 5;
	} else if ($castmatch > 9) {
		$score += 4;
	} else if ($castmatch > 6) {
		$score += 3;
	} else if ($castmatch > 3) {
		$score += 2;
	} else if ($castmatch > 0) {
		$score += 1;
	}
	
	if ($genre1 == $genre2) {$score++;}
	if ($director1 == $director2) {$score++;}
	if ($producer1 == $producer2) {$score++;}
	
	return $score;
}
?>