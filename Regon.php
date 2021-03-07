<?
session_start();
?>
<div id=content>
	<h3>Регистрация</h3>
	<form action='' method='post'>
		<label>Логин: </label><br />
		<input name='login' type='text' size="50"/><br />
		<label>Пароль: </label><br />
		<input name='password' type='password' size="50"/><br />
		<label>e-mail: </label><br />
		<input name='mail' type='e-mail' size="50"/><br />
		<br />
		<input type='submit' value='Отправить' />
	</form>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
	//if($_SERVER['REQUEST_METHOD']=='POST')
	if((isset($_POST['login'])) && (isset($_POST['password'])) && (isset($_POST['mail'])))
	{
		if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['mail']))
		{
			$login = clearStr($_POST['login']);
			$password = clearStr($_POST['password']);
			$mail = clearStr($_POST['mail']);
			$query=mysqli_query($link, "SELECT * FROM user WHERE login='".$login."'");
			$numrows=mysqli_num_rows($query);
			if($numrows==0)
		    {
				$sql="INSERT INTO user (login, password, mail)
				VALUES('$login', md5('$password'), '$mail')";
				$result=mysqli_query($link,$sql);
				if($result)
				{
					$message = "Отлично, аккаунт создан!";	
				} 
				else
				{
		 			$message = "Ошибка внесения данных!";
		  		}
			}
			else
			{
				$message = "Этот логин уже занят, попробуйте другой!";
		    }
		} 
		else
		{
			$message = "Заполните все поля!";
		}
	}
			
	if (!empty($message))
	{
		echo '<p class="error">' . 'MESSAGE: ' . $message . '</p>';
	}
?>

