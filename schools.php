<?php
$page_styles = '<link rel="stylesheet" href="assets/css/schools.css">';
$page_scripts = '<script src="assets/js/schools.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Высшие/Исследовательские школы</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Образование</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Высшие/Исследовательские школы</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <h2>Выбор школы</h2>
    
    <div class="template-grid">
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Исследовательская школа пищевой инженерии</h3>
                <a href="https://rse.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Исследовательская школа ветеринарии и сельского хозяйства</h3>
                <a href="https://rsvma.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа филологии</h3>
                <a href="https://hsp.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа образования</h3>
                <a href="https://gse.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа физико-математических наук</h3>
                <a href="https://gspms.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа естественных наук</h3>
                <a href="https://gsns.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Исследовательская школа физических и химических наук</h3>
                <a href="https://rspcs.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа искусственного интеллекта и строительства</h3>
                <a href="https://gsaic.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
        <div class="template-card no-image">
            <div class="template-info">
                <h3>Высшая школа бизнеса</h3>
                <a href="https://gsb.faculty.shakarim.kz/ru" class="template-button" target="_blank">Перейти</a>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
 