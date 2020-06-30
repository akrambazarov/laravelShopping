<?php

define('log', 'azam-7069');
define('pass', '12345');
$login = htmlspecialchars($_POST['login']);
$Password = htmlspecialchars($_POST['Password']);
if (log === $login && pass === $Password) {
	header("Location:../selectDashboard.html");
}
else{
	echo "<script>alert('Веден неверный логин и пароль')</script>";
	header("Location:../404.html");
}
?>