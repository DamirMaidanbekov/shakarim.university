<?php
$page_styles = '<link rel="stylesheet" href="assets/css/shakarim-museum.css">';
$page_scripts = '<script src="assets/js/shakarim-museum.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Shakarim Museum</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Познакомьтесь с университетом</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Shakarim Museum</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <h2>Shakarim Museum</h2>
    
    <div class="department-container">
        <!-- Левая колонка - Руководитель -->
        <div class="department-head">
            <div class="head-photo" style="text-align: center; margin-bottom: 15px;">
                <img src="assets/img/shanabay.jpeg" alt="Шаңбай Тұрдықұл Қасенұлы" style="width: 180px; height: 240px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="head-info" style="text-align: center;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 5px;">Шаңбай Тұрдықұл Қасенұлы</h3>
                <p style="font-size: 16px; color: #666; margin-bottom: 20px;">Руководитель музея</p>
            </div>
            <div class="contact-info" style="background: #fff; padding: 15px; border-radius: 8px;">
                <div class="contact-item" style="margin-bottom: 10px;">
                    <strong>Телефон:</strong> +7(707)596-00-00
                </div>
                <div class="contact-item" style="margin-bottom: 10px;">
                    <strong>Адрес:</strong> 071400 Республика Казахстан, область Абай, город Семей, ул. Глинки, 20 "А"
                </div>
                <div class="contact-item">
                    <strong>Кабинет:</strong> 2-этаж, музей
                </div>
            </div>
        </div>
        
        <!-- Правая колонка - Информация и сотрудники -->
        <div class="department-info">
            <!-- Информация об отделе -->
            <div class="info-block" style="background: #f7f9fc; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 15px;">Основные виды деятельности:</h3>
                <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 0;">
                    <li><strong>Основная деятельность музея Шакарима</strong> – изучение и популяризация наследия Шакарима и истории Университета, состоящие из научно-исследовательской, издательской, фондовой, экспозиционной и массово-просветительской работ.</li>
                    <li><strong>Научно-исследовательская работа</strong> связана с накоплением, обработкой и введением в научный и общекультурный оборот материальных и нематериальных объектов.</li>
                    <li><strong>Издательская деятельность музея</strong> – подготовка и издание буклетов, календарей, открыток и научных книг.</li>
                    <li><strong>Фондовая работа музея</strong> – комплектование и обработка материалов о наследии Шакарима и истории Университета, учёт, хранение и изучение.</li>
                    <li><strong>Экспозиционная деятельность музея Шакарим</strong> является основой музейной коммуникации и базой для реализации культурно-образовательной деятельности музея.</li>
                    <li><strong>Научно-массовая работа</strong> – привлечение посетителей в музей Шакарима, популяризация истории Университета и творчества Шакарима, проведение конференций, круглых столов, лекций, участие в телепередачах, интервью, экспедиции.</li>
                </ul>
            </div>
            
            <!-- Сотрудники -->
            <div class="staff-block" style="background: #f7f9fc; padding: 20px; border-radius: 8px;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 15px;">Сотрудники</h3>
                <div class="staff-grid" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <!-- Сотрудник 1 -->
                    <div class="staff-card" style="width: 100%; display: flex; margin-bottom: 20px;">
                        <div class="staff-photo" style="margin-right: 15px;">
                            <img src="assets/img/tortenova.jpeg" alt="Тортенова Гульнур Шалатаевна" style="width: 100px; height: 133px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <div class="staff-info">
                            <h4 style="font-size: 16px; color: #333; margin-bottom: 5px;">Тортенова Гульнур Шалатаевна</h4>
                            <p style="font-size: 14px; color: #666;">Хранитель фонда музея</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
