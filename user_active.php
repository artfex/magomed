<?php
$host = 'localhost';
$user = 'root';
$password = 'vkoRF269';
$database = 'rk-company';
$mysqli = new mysqli($host, $user, $password, $database);
$mysqli->set_charset('UTF8');
$user_id = (int) filter_input(INPUT_POST, 'user_id');
$mysqli->query("UPDATE `users` SET `activate` = 1, `role` = 3 WHERE `id` = '$user_id'");
echo 'Пользователь активирован';