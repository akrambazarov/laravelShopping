<?php
// Подключаемся к базе (данные доступа изменить на свои)
$dbh = new \PDO('mysql:host=localhost;dbname=newshop', 'root', 'root') or die("Error MYSQL");
// Записываем в таблицу order основные данные по заказу
$query = "INSERT INTO `order` (`username`, `email`, `telephone`, `address`, `comment`) VALUES (?, ?, ?, ?, ?)";
$sth = $dbh->prepare($query);
$sth->execute([
$userdata['user_name'],
$userdata['user_mail'],
$userdata['user_phone'],
$userdata['user_address'],
$userdata['user_comment'],
]);
// Если заказ успешно записан, то получаем ID заказа (!должно быть поле с автоинкрементом)
if($order_id = $dbh->lastInsertId()) {
// Записываем в таблицу order_product каждый из заказанных товаров, с привязкой к ID заказа
$query = "INSERT INTO `order_product` (`order_id`, `product_name`, `price`, `count`) VALUES (?, ?, ?, ?)";
$sth = $dbh->prepare($query);
foreach($orderlist as $id => $item_data) {
$sth->execute([
$order_id,
$item_data['title'],
$item_data['price'],
$item_data['count']
]);
}
// * Другим вариантом, может быть сгененрирована строка запроса с "мультивставкой"
// и запрос выполняется один раз, а не в цикле.
// Пример такого запроса:
// INSERT INTO tbl_name (a,b,c) VALUES (1,2,3),(4,5,6),(7,8,9);
}