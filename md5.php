<html>
<head>
	<title>����������� MD5</title>
</head>

<body>
<h1>����������� MD5</h1>
<?
$str = $_GET["str"];
?>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	������:
	<input type="text" name="str" value="<?=$str?>">
	<input type="submit" value="MD5">
</form>
<?
if ($str) {
	echo "<h2>", md5($str) ,"</h2>";
}
?>
</body>
</html>
