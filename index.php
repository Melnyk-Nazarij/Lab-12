<html>
<head>
<meta charset="utf-8">
</head>
<?php
 $host = "localhost"; // MYSQL server
 $user_db = "root"; // MYSQL користувач
 $pass_db = "root"; // MYSQL пароль
 $dbase = "lab12"; // MYSQL база даних
 $dtable = "ihe"; // Таблиця в базі даних
 /* З'єднання з сервером бази даних */
 $mysqli = new mysqli($host, $user_db, $pass_db, $dbase);
/* провіримо підключення */
if (mysqli_connect_errno()) {
 printf("Помилка підключення: %s\n", mysqli_connect_error());
 exit();
}

$name = "VSP TNTU";
/* створюємо підготовлений вираз */
if ($stmt = $mysqli->prepare("SELECT address FROM ihe WHERE
name=?")) {
 /* зв’язуємо параметр */
 $stmt->bind_param("s", $name);
 /* виконуємо запит */
 $stmt->execute();
 /* прикріпляємо результати*/
$stmt->bind_result($address);
 /* вибираємо значення */
$stmt->fetch();
 printf("Назва - %s<br> Адреса - %s<br>", $name, $address);
/* закриваємо з’єднання */
$mysqli->close();
} 
?>