<?php
//var_dump('id  '.$_POST['id']);
	if(isset($_POST['id']))
	{
		$id=abs((int)$_POST['id']);
		if($id)
	{
			$sql="DELETE FROM msgs WHERE id=$id";
			mysqli_query($link1,$sql) or die(mysqli_error($link1));
			//header('Location: /gbook');
			echo '<script> window.location.href = "/gbook" </script>';
			mysqli_close($link1);
			exit;
		}
	}
