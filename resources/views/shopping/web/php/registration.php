<?php
$name=filter_var(trim($_POST['name_sign_in']),FILTER_SANITIZE_STRING);
$telNumber=filter_var(trim($_POST['phone_sign_up']),FILTER_SANITIZE_STRING);
$country=filter_var(trim($_POST['country_sign_up']),FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST['email_sign_up']),FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['pass_sign_up']),FILTER_SANITIZE_STRING);
$passwordConfim=filter_var(trim($_POST['pass_sign_up_again']),FILTER_SANITIZE_STRING);
$password =md5($password."q23w23e6");
// if (mb_strlen($email)<10||mb_strlen($email)>90) {
// 	echo "Введите логин от 6 символов";
	
// }
// elseif (mb_strlen($password)<6||mb_strlen($password)>32) {
// 	echo "Введите пароль от 6 до 32 символов";
	
// }


/*elseif($password!=$passwordConfim){

	echo "Пароли не совпадают";
	exit();
}*/
$db = new mysqli('localhost','root','root','newshop');

$result = $db->query("SELECT * FROM `tableregistration` WHERE `login` = '$email'");
//$user=$result->fetch_assoc();
if ( mysqli_num_rows( $result ) ) {
echo "Такой пользователь уже существует";
return false;
exit();

}
elseif ($name == "" ) {
echo "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу";
	return false;
exit();
}
elseif ($telNumber == "" ) {
echo "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу";
	return false;
exit();
}
elseif ($email == "" ) {
echo "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу";
	return false;
exit();
}
elseif ($country == "" ) {
echo "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу";
	return false;
exit();
}
elseif ($password == "" ) {
echo "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу";
	return false;
exit();
}
// elseif (mb_strlen($password)>=32 && mb_strlen($passwordConfim)<6 ) {
// echo "Пожалуйста введите пароль от 6 до 32 символов";
// 	return false;
// exit();
// }
// elseif ($password !== $passwordConfim ) {
// echo "Пароли не совпадают";
// 	return false;
// exit();
// }

 else{

$db->query("INSERT INTO `tableregistration` (`name` , `phonenumber` , `country` , `login` , `password`)VALUES ('$name','$telNumber','$country','$email', '$password')");

echo $name;


$db->close();
}
//header('Location: index.php');


?>
