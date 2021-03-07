<?php
	require("constants_gbook.php");
	require_once('clearstr.php');
	$link1=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	mysqli_select_db($link1, "gbook");
