<?php
session_start(); 
	$visit_counter = 0;
	if(isset($_COOKIE['visitCounter'])) {
		$visit_counter = $_COOKIE['visitCounter'] ;
	}
		$visit_counter++;
		$last_visit = '';
$last_visit = $_COOKIE["lastvisit"];
if (!isSet($last_visit)) 
$last_visit = date('d.m.Y H:i:s', strtotime("+6 hours"));
else 
$last_visit = $last_visit; 
		setcookie("visitCounter", $visit_counter);
		setcookie("lastVisit", $last_visit);
?>