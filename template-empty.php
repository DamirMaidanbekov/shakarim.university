<?php
$page_styles = '<link rel="stylesheet" href="assets/css/template-empty.css">';
$page_scripts = '<script src="assets/js/template-empty.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Пустой шаблон</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Footer</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Пустой шаблон</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
</div>

<?php

$content = ob_get_clean();
 