<?php
$server = 'localhost'; // Имя или адрес сервера
$user = 'root'; // Имя пользователя БД
$password = ''; // Пароль пользователя
$db = 'hakaton2022'; // Название БД

$db = mysqli_connect($server, $user, $password, $db); // Подключение

// Проверка на подключение

if (!$db) {
    // Если проверку не прошло, то выводится надпись ошибки и заканчивается работа скрипта
    die("База данных не поключена: " . mysqli_connect_error());
}

?>
<!-- Подключение бутстрапа -->

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
