<?php
$page_styles = '<link rel="stylesheet" href="assets/css/admissions-how.css">';
$page_scripts = '<script src="assets/js/admissions-how.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Как подать документы</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Поступление</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Как подать документы</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <!-- Секция "Как поступить" (новый дизайн) -->
    <section class="apply-steps-section">
        <div class="container">
        <h2>Как поступить в Университет Шакарима</h2>
        
            <div class="steps-container">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Выбери программу</h3>
                        <p>Изучи все направления обучения и выбери программу, которая тебе подходит</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Подготовь документы</h3>
                        <p>Удостоверение личности, аттестат, сертификат ЕНТ и другие необходимые документы</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Подай заявление</h3>
                        <p>Онлайн на сайте университета или лично в приемной комиссии</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Участвуй в конкурсе</h3>
                        <p>Дождись результатов конкурса на присуждение грантов или зачисления на платное обучение</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Получи приказ о зачислении</h3>
                        <p>После успешного прохождения конкурса ты получишь приказ о зачислении</p>
                    </div>
                </div>
                
                <div class="step-item final-step">
                    <div class="step-number"><i class="fas fa-award"></i></div>
                    <div class="step-content">
                        <h3>Поздравляем!</h3>
                        <p>Теперь ты студент Университета Шакарима!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php

$content = ob_get_clean();
 