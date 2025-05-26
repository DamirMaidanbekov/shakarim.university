<?php
$page_styles = '<link rel="stylesheet" href="assets/css/admissions-date.css">';
$page_scripts = '<script src="assets/js/admissions-date.js"></script>';

ob_start();
?>

<!-- ЗАГОЛОВОК КАТЕГОРИИ -->
<div class="category-header">
    <h1 class="category-title">Важные даты</h1>
</div>

<!-- ХЛЕБНЫЕ КРОШКИ -->
<div class="breadcrumb-container">
    <div class="breadcrumb">
        <a href="/" title="Домашняя страница"><span class="home-icon"></span></a>
        <span class="breadcrumb-separator">〉</span>
        <a href="/">Поступление</a>
        <span class="breadcrumb-separator">〉</span>
        <span class="current">Важные даты</span>
    </div>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
        <!-- Секция с мероприятиями и календарем -->
        <section class="events-section">
        <h2>Мероприятия для абитуриентов</h2>
        
        <div class="events-container">
            <div class="calendar-block">
                <div class="calendar-container">
                    <div class="calendar-navigation">
                        <button id="prevMonth"><i class="fas fa-chevron-left"></i></button>
                        <h3 id="currentMonth">Июнь 2025</h3>
                        <button id="nextMonth"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div id="calendar"></div>
                </div>
            </div>
            
            <div class="upcoming-events">
                <h3>Ближайшие события</h3>
                
                <div class="event-cards">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">12</span>
                            <span class="date-month">июнь</span>
                        </div>
                        <div class="event-info">
                            <h4>Мастер-класс для абитуриентов</h4>
                            <p>Онлайн, 14:30</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">20</span>
                            <span class="date-month">июнь</span>
                        </div>
                        <div class="event-info">
                            <h4>Встреча с деканами</h4>
                            <p>Актовый зал, 11:00</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">25</span>
                            <span class="date-month">июнь</span>
                        </div>
                        <div class="event-info">
                            <h4>Семинар по поступлению</h4>
                            <p>Онлайн, 15:00</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="see-all-events">Смотреть все мероприятия <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </section>
</div>

<?php

$content = ob_get_clean();
 