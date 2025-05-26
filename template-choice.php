<?php
$page_styles = '<link rel="stylesheet" href="assets/css/template-choice.css">';
$page_scripts = '<script src="assets/js/template-choice.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Шаблон выбора</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Footer</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Шаблон выбора</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <h2>Выбор шаблона</h2>
    
    <div class="template-grid">
        <!-- Карточки с изображениями -->
        <div class="template-card">
            <div class="template-image"></div>
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card">
            <div class="template-image"></div>
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card">
            <div class="template-image"></div>
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <!-- Карточки без изображений -->
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Тест Тест Тест</h3>
                <p>Тест Тест Тест</p>
                <a href="#" class="template-button">Выбрать</a>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
 