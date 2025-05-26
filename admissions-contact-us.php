<?php
$page_styles = '<link rel="stylesheet" href="assets/css/admissions-contact-us.css">';
$page_scripts = '<script src="assets/js/admissions-contact-us.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Контакты</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Поступление</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Контакты</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <!-- Секция "Свяжитесь с нами" -->
    <section class="contact-us-section">
        <h2>Свяжитесь с нами</h2>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Приемная комиссия Университета Шакарима</h3>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text">
                            <p>071410, РК, область Абай, г. Семей, ул. Глинки, 20А</p>
                            <p class="contact-note">Главный корпус, 1 этаж, кабинет 107</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-text">
                            <p><a href="tel:+77713654625">+7 (771) 365-46-25</a></p>
                            <p class="contact-note">Приемная комиссия</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-text">
                            <p><a href="mailto:admission@shakarim.kz">admission@shakarim.kz</a></p>
                            <p class="contact-note">Электронная почта</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div class="contact-text">
                            <p>Пн-Пт: 9:00 - 18:00<br>Сб: 9:00 - 14:00<br>Вс: выходной</p>
                            <p class="contact-note">Часы работы</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-illustration">
                <img src="assets/img/applicants6.png" alt="Приемная комиссия" width="500" height="400">
            </div>
        </div>
    </section>
</div>

<?php

$content = ob_get_clean();
 