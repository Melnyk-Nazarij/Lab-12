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

$sql = "INSERT INTO ihe (name, address, category)
VALUES ('ZUNU', 'Lvivska, 11', 4)";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close()
?>