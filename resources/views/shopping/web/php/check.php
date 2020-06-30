<?php
$email=filter_var(trim($_POST['email_sign_up']),FILTER_SANITIZE_STRING);
$db = new mysqli('localhost','root','root','newshop');
$result = $db->query("SELECT * FROM `tableregistration` WHERE `login` = '$email'");
//$user=$result->fetch_assoc();
if ( mysqli_num_rows( $result ) ) {
echo "Такой пользователь уже существует";
return false;
exit();

}

else{
 	echo "Логин свободный";
 }
?>