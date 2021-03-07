<?php
	require("constants_regon.php");
	require_once('clearstr.php');
	$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	mysqli_select_db($link, "regon");

