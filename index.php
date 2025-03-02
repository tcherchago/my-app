<?php
// Подключаем ядро
require_once 'core.php';

// Подготовим данные для шаблона
$data = [
    'title' => 'Мое приложение',
    'username' => 'Пользователь',
    'message' => 'Добро пожаловать в наше приложение!'
];

// Загружаем шаблон с переданными данными
echo loadTemplate('templates/page.tpl', $data);
?>
