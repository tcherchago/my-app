<?php
// Функция для загрузки шаблона
function loadTemplate($templatePath) {
    if (file_exists($templatePath)) {
        return file_get_contents($templatePath);
    }
    return 'Шаблон не найден!';
}
?>