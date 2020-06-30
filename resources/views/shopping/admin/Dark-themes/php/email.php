<?php
$email = trim($_POST['email']);
$listBox = trim($_POST['listbox']);
$toMessage = trim($_POST['paragraphyEmail']);
$message = trim($_POST['bodyEmail']);
//mail($email, $toMessage, $message);
echo $email+$listbox;
?>