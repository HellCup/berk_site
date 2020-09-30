<?php
$user = 'mysql';
$password = "mysql";
$db = 'data_berkut';
$host = 'berkut';
$port = 3307;
$link = mysqli_connect ($host, $user, $password, $db, $port);
if (!$link) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");
?>