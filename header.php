<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<link rel="stylesheet" type="text/css" href="/style_header.css"> -->
</head>
  <header class="blog-header py-3">
			<!-- Верхняя часть страницы -->		
	<p class="h5">
		<?php
			echo (($_SESSION["session_username"]).' ');
			echo "Счетчик посещений:";
			echo "Вы зашли к нам $visit_counter раз. ";
			echo "Последнее посещение: $last_visit ";
		?>	
	<span class="slogan">Знания - сила</span>
</header>
