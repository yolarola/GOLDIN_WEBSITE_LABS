<?
session_start();
//mysqli_select_db($link1,gbook);
?><!-- Область основного контента -->
<div id = content>
	<h3>Письмо нам!</h3>
	<p></p>
	<h3>Задайте вопрос</h3>
	<form action='' method='POST'>
		<label>Тема письма: </label><br />
		<input name='theme' type='text' size="50"/><br />
		<label>Ваш E-Mail: </label><br />
		<input name='email' type='text' size="50"/><br />
		<label>Содержание: </label><br />
		<textarea name='body' cols="50" rows="10"></textarea>
		<?php
			$Count = ini_get("post_max_size");
			Switch ($Count[strlen($Count)-1])
			{
				case 'G': $Count=$Count*1024;
				case 'M': $Count=$Count*1024;
				case 'K': $Count=$Count*1024;
				default: $Count=$Count;
			}
			echo '<br>';
			Echo "Максимальное количество байт $Count ";
			echo '<br>';
			if((isset($_POST['theme'])) && (isset($_POST['email'])) && (isset($_POST['body'])))
			{
				echo "Сообщение отправлено!";	
			}
			else
			{
				echo "Заполните все поля!";	
			}
			//if ($s=1)
			//{
			//	echo "ИМЕЮТСЯ ПУСТЫЕ ПОЛЯ!";
			//}
		?>
		<br /><br />
		<input type='submit' value='Отправить' />
	</form>	
	<br>
	<!-- Область основного контента -->
</div>
<?php
	if((isset($_POST['theme'])) && (isset($_POST['email'])) && (isset($_POST['body'])))
		{
			if(!empty($_POST['theme']) && !empty($_POST['email']) && !empty($_POST['body']))
	//if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$theme = clearStr($_POST['theme']);
					$email = clearStr($_POST['email']);
					$body = clearStr($_POST['body']);
					$sql = "INSERT INTO msgs(name, email, msg) VALUES('$theme','$email','$body')";
					mysqli_query($link1,$sql) or die(mysqli_error($link1));
					$s=0;
					exit;
				}
				else
				$s=1;
				exit;	
		}		
?>