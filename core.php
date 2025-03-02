<?php
// Функция для загрузки шаблона с данными
function loadTemplate($templatePath, $data = []) {
    if (file_exists($templatePath)) {
        // Получаем содержимое шаблона
        $template = file_get_contents($templatePath);
        
        // Заменяем переменные в шаблоне на значения из массива $data
        foreach ($data as $key => $value) {
            $template = str_replace("{{" . $key . "}}", $value, $template);
        }

        return $template;
    }
    return 'Шаблон не найден!';
}
?>
