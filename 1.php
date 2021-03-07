<?php
session_start();
include "login_controller.php";

$mail = $_POST['reg_mail'];
$pwd = $_POST['reg_pwd'];
$pwd2 = $_POST['reg_pwd_2'];
$type = $_POST['type'] === 'emp' ? 1 : 0;


if ($pwd != $pwd2) {
$_SESSION['error'] = "Пароли не совпадают!";
header('Location: '.$_SERVER['HTTP_REFERER']);
} else if (mb_strlen($pwd) < 6) {
$_SESSION['error'] = "Длина пароля должна быть от 6 символов длиной";
header('Location: '.$_SERVER['HTTP_REFERER']);
} else {
$crypt_pwd = md5($pwd);
if (connect()->query("insert into user (mail, pwd, is_emp) VALUES ('$mail', '$crypt_pwd', $type)")) {
login($mail, $pwd);
$_SESSION['error'] = "";
$user = $_SESSION['user'];
if ($user['is_emp'] == 1) {
$id = $user['id_user'];
connect()->query("insert into employer (id_user) values($id)");
header("Location: /employer.php?id=" . $user['id_user']);
} else
header("Location: /user.php?id=".$user['id_user']);
} else {
$_SESSION['error'] = "Адрес электронной почты уже зарегестрирован";
header('Location: '.$_SERVER['HTTP_REFERER']);
}
}