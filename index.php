<?php session_start();?>
<?php include_once('cookie.inc.php'); ?>
<?php require_once('dbconnect_gbook.php'); ?>
<?php require_once('dbconnect_regon.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>GOLDIN</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>	
<?php
include 'header.php';
?>
	<body>
<div class="wrapper">
		<div id=id1>
			<?php
				include('menu.inc.php');
			?>	
		</div>
		<div id=id2>
			<div class="content">	

				<!-- Заголовок -->
					<blockquote> <h1>Добро пожаловать на наш сайт!</h1></blockquote>
				<!-- Заголовок -->
				<!-- Область основного контента -->
					<blockquote>
					<?php
					echo strftime('Сегодня %d-%m-%Y');
						?>
					</blockquote>
				<!-- Область основного контента -->
			</div>
		</div>
</div>
			<!-- меню -->

			<!-- меню -->
	</body>
	<?php
		$request = $_SERVER['REDIRECT_URL'];
		switch ($request) 
		{
		    case '/index':
		        require('index.php');
		        break;
			case '/gbook':
			    require('gbook.php');
				break;
			case '/contact':
			    require('contact.php');
				break;
			case '/table':
			    require('table.php');
				break;
			case '/regon':
			    require('regon.php');
				break;		
			case '/login':
			    require('login.php');
				break;				
			case '/redirect':
			    require('redirect.php');
				break;		
			case '/for':
			    require('for.php');
				break;	
			case '/while':
			    require('while.php');
				break;	
			case '/indextext':
			    require('indextext.php');
				break;	
			case '/delete_gbook':
				require('delete_gbook.php');
				break;	
			case '/logout':
				require('logout.php');
				break;	
			case '/about':
				require('about.php');
				break;																	
		}

	?>
	<?php include 'footer.php'?>
</html>