<?php
$email=filter_var(trim($_POST['email_sign_in']),FILTER_SANITIZE_STRING);
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
// $count = count($user);
// if ($count == 0) {
// echo "Логин свободный";
// }
// else {
// 	echo "Такой пользователь уже существует";
// }
//echo $user;
?>