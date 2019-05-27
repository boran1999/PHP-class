<?php

include "Schoolboy.php";

function get_from_file($str){
		$School_boys = [];
		$schoolboys = file_get_contents("data/schoolboys.txt");
		$sc = file_get_contents("data/sc.txt");
		$attend = file_get_contents("data/attend.txt");
		$schoolboys = explode("\n", $schoolboys);
		$sc = explode("\n", $sc);
		$attend = explode("\n", $attend);
		foreach ($schoolboys as $key => $value) {
			$boys = explode(" ", $schoolboys[$key]);
			$score = explode(",", $sc[$key]);
			$att = explode(",", $attend[$key]);
			$schooler = new Schoolboy($boys[0], $boys[1], $boys[2], $score, $att);
			array_push($School_boys, $schooler);
			}
	return $School_boys;
}
