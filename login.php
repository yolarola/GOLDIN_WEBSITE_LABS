<?php session_start();
	if(isset($_SESSION["session_username"]))
	{
		echo '<script> window.location.href = "/indextext" </script>';
	}
	if(isset($_POST["login"]))
	{
		if(!empty($_POST['login']) && !empty($_POST['password']))
	 	{
			$login=htmlspecialchars($_POST['login']);
			$password=htmlspecialchars($_POST['password']);
			//var_dump('pass ', $password);
			$password = md5($password);
			//var_dump('pass ', $password);
			//var_dump('login ', $login);
			$query = mysqli_query($link,"SELECT * FROM user WHERE login ='".$login."' AND password ='".$password."'");
			$numrows= mysqli_num_rows($query);
			if($numrows!=0)
			{
				while($row=mysqli_fetch_assoc($query))
				{
					$dbusername=$row['login'];
					$dbpassword=$row['password'];
				}
				if($login == $dbusername && $password == $dbpassword)
				{
					echo '<script> window.location.href = "/indextext" </script>';
					$_SESSION['session_username']=$login;	
					exit; 
				}
			}
			else
			{
				//  $message = "неправильный логин или пароль";	
				echo  "неправильный логин или пароль";
			}
		}
		else
		{
			echo  "нужны все поля";
		}
	}
?>
	<div id=content>
		<div class="container">
			<div id="login">
				<h1>Вход</h1>
				<form action="" id="loginform" method="post"name="loginform">
					<p><label for="user_login">Имя пользователя<br>
					<input class="input" id="login" name="login"size="20"
					type="text" value=""></label></p>
					<p><label for="user_pass">Пароль<br>
					<input class="input" id="password" name="password"size="20"
					type="password" value=""></label></p> 
					<p class="submit"><input class="button" type= "submit" value="Log In"></p>
					<p class="regtext">Еще не зарегистрированы? <a href= "regon">Регистрация</a>!</p>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>

