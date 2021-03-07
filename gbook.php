<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name = clearStr($_POST['name']);
	$email = clearStr($_POST['email']);
	$msg = clearStr($_POST['msg']);
	$sql = "INSERT INTO msgs(name, email, msg) VALUES('$name','$email','$msg')";
	mysqli_query($link1,$sql) or die(mysqli_error($link1));
	//header('Location:'.$_SERVER['REQUEST_URI']);
	echo '<script> window.location.href = "/gbook" </script>';
	exit;
}
?>
<body>
	<div id=content>
		<h1>Гостевая книга</h1>
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			Ваше имя:<br />
			<input type="text" name="name" /><br />
			Ваш E-mail:<br />
			<input type="E-mail" name="email" /><br />
			Сообщение:<br />
			<textarea name="msg" cols="50" rows="5"></textarea><br />
			<br />
			<input type="submit" value="Отправить!" />
			<br>
		</form>
	</div>
<br>
<br>
<div id=content>
<?php
$sql= "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM
msgs ORDER BY id DESC LIMIT 5";
$res=mysqli_query($link1,$sql) or die(mysqli_error($link1));
while($row=mysqli_fetch_assoc($res))
{
	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$dt=date('d-m-Y H:i:s',$row['dt']);
	$msg=$row['msg'];
	echo <<<HTML
	<hr>
	<p>
	<a href = "mailto:$email">$name</a> @ $dt <br>$msg
	</p>
	<p align='right'>

	<form method="POST" action="/delete_gbook">
		<input type="hidden" name="id" value="$id">
		<button type="submit">Удалить</button>
	</form>
	</p>
	HTML;
}

		?>
	</div>
</body>
</html>