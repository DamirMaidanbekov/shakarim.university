<?php
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$filename = $request === '' ? 'home' : $request;
$filepath = __DIR__ . "/$filename.php";

if (file_exists($filepath)) {
    include $filepath; // Этот файл должен установить $title, $content и т.д.
} else {
    $title = "404 - Страница не найдена";
    $page_styles = '';
    $page_scripts = '';
    ob_start();
    echo "<h1>404</h1><p>Такой страницы нет.</p>";
    $content = ob_get_clean();
}

include __DIR__ . "/templates/base.php";