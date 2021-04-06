<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
 /* Замініть нижченаведені змінні на свої */
 $host = "localhost"; // MYSQL server
 $user_db = "root"; // MYSQL користувач
 $pass_db = "root"; // MYSQL пароль
 $dbase = "lab12"; // MYSQL база даних
 $dtable = "ihe"; // Таблиця в базі даних
 $charset="utf8";
 /* З'єднання з сервером бази даних */
 $dsn = "mysql:host=$host;dbname=$dbase;charset=$charset";
$opt = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user_db, $pass_db, $opt);

 $stmt = $pdo->query('SELECT * FROM ihe');
?>
 <table class="table">
<tr>
<td> ID </td>
<td> Назва </td>
<td> Адреса </td>
<td> Категорія </td>
</tr>
<?php
 while ($row = $stmt->fetch())
{
 ?>
<tr>
<td> <?php echo $row['ID'] . "\n"; ?> </td>
<td> <?php echo $row['name'] . "\n"; ?> </td>
<td> <?php echo $row['address'] . "\n"; ?> </td>
<td> <?php echo $row['category'] . "\n"; ?> </td>
</tr>
<?php
}
?>