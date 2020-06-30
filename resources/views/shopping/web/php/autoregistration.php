<?php
$login=filter_var(trim($_POST['email_sign_in']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass_sign_in']),FILTER_SANITIZE_STRING);
$pass=md5($pass."q23w23e6");
$warning="<p>Веден неверный логин или пароль</p>";
$dbconnect=mysqli_connect('localhost','root','','newshop') or die ("Ошибка при подключение к базе данных");
$result=$dbconnect->query("SELECT * FROM `tableregistration` WHERE `login`='$login'AND`password`='$pass'");
$user=$result->fetch_assoc();
if (count($user)==0) {
echo $login;
//	setcookie("txt",$warning,time()+10);
}
//setcookie("user",$user['name'],time()+3600*(60*24),"/");

//header('Location: index.php');

/*
if (isset($_POST['autoregistration'])) {
	$search=explode(" ", $login);
	$count=count($search);
	$array=array();$i=0;
	foreach ($search as $key) {
		$i++;
		if ($i<$count) {
		$array[]="CONCAT (`name`,`login`) LIKE '%".$key."%' OR ";
		}else{
		$array[]="CONCAT (`name`,`login`) LIKE '%".$key."%'";
		}
		$sql="SELECT * FROM `tableregistration` WHERE ".implode("",$array);
		//$sql="SELECT COUNT(*) FROM `menshapka` WHERE(nameProduct LIKE '%search%') UNION SELECT COUNT(*) FROM `mencap` WHERE(nameProduct LIKE'%search%')".implode("",$array);
		
	}
	$querytable=mysqli_query($dbconnect,$sql);

while ($row=mysqli_fetch_assoc($querytable)) {
	echo .$row['name']."<br>".$row['login']."</hr><p>Pass:".$row['password']."</p><br>";
}
}*/

/*while ($row=mysql_fetch_array($sql)) {
	$id=['ID'];
	$name=['name'];
	$loginsql=['login'];
	$passsql=['password'];
	echo "<p>$id-$name-$loginsql-$passsql</p>";
}*/
//$result=query("SELECT * FROM `tableregistration` WHERE `login`='$login' AND `password`='$pass'");
/*if (isset($_POST['autoregistration'])) {*/


//$user=$result->fetch_assoc();
//$row=mysqli_fetch_assoc($result); 
/*	mysql_close();*/
/*}*/
/*if (count($user)==0) {
	
	echo "Такой пользовател не найден";
}
elseif ($user[`login`]==$login) {
	//echo "Такой пользовател уже зарегисрирован";
	setcookie('user',$user['name'],time()+3600,"/");
	
}*/




//header("Location: index.php");

/*if ($email==$login) {
	echo "Такой пользовател существует";
}*/
?>