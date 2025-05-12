<?php
$page_styles = '<link rel="stylesheet" href="assets/css/applicants.css">';
$page_scripts = '<script src="assets/js/applicants.js"></script>';

ob_start();
?>


<!-- BREADCRUMB -->
<div class="custom-breadcrumb">
    <span>Главная страница</span> <span class="breadcrumb-separator">/</span> <span>Абитуриентам</span>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <!-- Секция приветствия -->
    <section class="welcome-section">
        <div class="welcome-container">
            <div class="welcome-image">
                <img src="assets/img/template.png" alt="Студенты Shakarim University" width="500" height="400">
            </div>
            <div class="welcome-text">
                <h1>Строй будущее <br>вместе с нами!</h1>
                <p>Университет Шакарима – это современное образование, признанное научное сообщество и передовые исследовательские центры. Мы готовим профессионалов, которые меняют мир к лучшему.</p>
                <a href="#apply" class="apply-button">Поступить</a>
            </div>
        </div>
    </section>
    
    <!-- Секция выбора уровня образования -->
    <section class="education-level-section" id="apply">
        <h2>Я хочу поступить в...</h2>
        
        <div class="education-options">
            <div class="education-option" id="bachelor-option" data-target="bachelor-benefits">
                <div class="option-background" style="background-image: url('assets/img/template.png');">
                    <div class="option-overlay"></div>
                    <h3>Бакалавриат</h3>
                </div>
            </div>
            
            <div class="education-option" id="master-option" data-target="master-benefits">
                <div class="option-background" style="background-image: url('assets/img/template.png');">
                    <div class="option-overlay"></div>
                    <h3>Магистратура</h3>
                </div>
            </div>
            
            <div class="education-option" id="phd-option" data-target="phd-benefits">
                <div class="option-background" style="background-image: url('assets/img/template.png');">
                    <div class="option-overlay"></div>
                    <h3>Докторантура</h3>
                </div>
            </div>
        </div>
        
        <!-- Преимущества для бакалавриата -->
        <div class="benefits-container" id="bachelor-benefits">
            <h3>Преимущества бакалавриата</h3>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-calendar-alt"></i></div>
                    <h4>4 года обучения</h4>
                    <p>Продолжительность</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-diploma"></i></div>
                    <h4>Диплом государственного образца</h4>
                    <p>Да</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Отсрочка от армии</h4>
                    <p>Да</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-users"></i></div>
                    <h4>Очная форма обучения</h4>
                    <p>Форма обучения</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-building"></i></div>
                    <h4>Общежития</h4>
                    <p>Да</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-certificate"></i></div>
                    <h4>Аккредитация ARQA</h4>
                    <p>Независимое агентство по аккредитации</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-award"></i></div>
                    <h4>Аккредитация IAAR</h4>
                    <p>Независимое агентство аккредитации и рейтинга</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-globe-asia"></i></div>
                    <h4>Аккредитация САААЕ</h4>
                    <p>Центрально-Азиатская Ассоциация</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-university"></i></div>
                    <h4>Возможность двойного диплома</h4>
                    <p>Международное признание</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-handshake"></i></div>
                    <h4>Международное сотрудничество</h4>
                    <p>Глобальные партнерства</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-tree"></i></div>
                    <h4>«Зелёный» рейтинг</h4>
                    <p>Экологическая ответственность</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-industry"></i></div>
                    <h4>Дуальная система обучения</h4>
                    <p>KAZDUAL</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-flask"></i></div>
                    <h4>Современные лаборатории</h4>
                    <p>Обновленные корпуса</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-book"></i></div>
                    <h4>Разнообразие программ</h4>
                    <p>Более 40 направлений</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-exchange-alt"></i></div>
                    <h4>Erasmus+ Mobility</h4>
                    <p>Международные обмены</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-language"></i></div>
                    <h4>Языковые сертификаты</h4>
                    <p>Повышение квалификации</p>
                </div>
            </div>
        </div>
        
        <!-- Преимущества для магистратуры -->
        <div class="benefits-container" id="master-benefits">
            <h3>Преимущества магистратуры</h3>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-th-list"></i></div>
                    <h4>Широкий выбор программ</h4>
                    <p>Многообразие направлений</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-brain"></i></div>
                    <h4>Разнообразие областей знаний</h4>
                    <p>Фундаментальные и прикладные науки</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-money-bill"></i></div>
                    <h4>Бюджетные и платные места</h4>
                    <p>176 бюджетных и 430 платных мест</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-tags"></i></div>
                    <h4>Доступная стоимость обучения</h4>
                    <p>Конкурентные цены</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Конкурентные проходные баллы</h4>
                    <p>88 на научно-педагогические</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-microscope"></i></div>
                    <h4>Исследовательская направленность</h4>
                    <p>Научный подход</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h4>Подготовка преподавателей</h4>
                    <p>Педагогика и психология</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-briefcase"></i></div>
                    <h4>Партнёрские MBA-программы</h4>
                    <p>Executive MBA и классическое MBA</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-globe"></i></div>
                    <h4>Приём иностранных студентов</h4>
                    <p>Международная среда</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-handshake"></i></div>
                    <h4>Международные партнёрства</h4>
                    <p>Программа "Менеджер спорта"</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-university"></i></div>
                    <h4>Высшие школы</h4>
                    <p>Исследовательские центры</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Путь к PhD</h4>
                    <p>Дальнейшее академическое развитие</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-clock"></i></div>
                    <h4>Гибкие формы обучения</h4>
                    <p>Очная, заочная и смешанная</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-exchange-alt"></i></div>
                    <h4>Академическая мобильность</h4>
                    <p>Возможность обмена опытом</p>
                </div>
            </div>
        </div>
        
        <!-- Преимущества для докторантуры -->
        <div class="benefits-container" id="phd-benefits">
            <h3>Преимущества докторантуры</h3>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-book-open"></i></div>
                    <h4>Широкий спектр программ PhD</h4>
                    <p>Разнообразные направления</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-user-tie"></i></div>
                    <h4>Высококвалифицированный состав</h4>
                    <p>28 докторов наук и профессоров</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Государственный заказ</h4>
                    <p>Бюджетные места и гранты</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-award"></i></div>
                    <h4>До 25 целевых грантов</h4>
                    <p>Для докторантов</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-tasks"></i></div>
                    <h4>Структурированные испытания</h4>
                    <p>Эссе, тест и профильный экзамен</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-list-ol"></i></div>
                    <h4>Чёткий перечень тем</h4>
                    <p>Публикация всех требований</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-flask"></i></div>
                    <h4>Современные лаборатории</h4>
                    <p>Научно-исследовательская база</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-book"></i></div>
                    <h4>Виртуальные читальные залы</h4>
                    <p>Доступ к информации</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-globe"></i></div>
                    <h4>Поддержка иностранных абитуриентов</h4>
                    <p>Международное сотрудничество</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-clipboard-check"></i></div>
                    <h4>Пререквизиты для поступления</h4>
                    <p>Степень магистра и 9 месяцев стажа</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-user-graduate"></i></div>
                    <h4>Перспектива академической карьеры</h4>
                    <p>Путь к должности доцента и профессора</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Как поступить" (карта сокровищ) -->
    <section class="apply-map-section">
        <h2>Как поступить в Университет Шакарима</h2>
        
        <div class="treasure-map-container">
            <div class="treasure-map">
                <img src="template.png" alt="Карта поступления" class="map-background" width="1000" height="600">
                
                <!-- Шаги поступления -->
                <div class="map-step" id="step-1">
                    <div class="step-marker">1</div>
                    <div class="step-content">
                        <h3>Выбери программу</h3>
                        <p>Изучи все направления обучения и выбери программу, которая тебе подходит</p>
                    </div>
                </div>
                
                <div class="map-step" id="step-2">
                    <div class="step-marker">2</div>
                    <div class="step-content">
                        <h3>Подготовь документы</h3>
                        <p>Удостоверение личности, аттестат, сертификат ЕНТ и другие необходимые документы</p>
                    </div>
                </div>
                
                <div class="map-step" id="step-3">
                    <div class="step-marker">3</div>
                    <div class="step-content">
                        <h3>Подай заявление</h3>
                        <p>Онлайн на сайте университета или лично в приемной комиссии</p>
                    </div>
                </div>
                
                <div class="map-step" id="step-4">
                    <div class="step-marker">4</div>
                    <div class="step-content">
                        <h3>Участвуй в конкурсе</h3>
                        <p>Дождись результатов конкурса на присуждение грантов или зачисления на платное обучение</p>
                    </div>
                </div>
                
                <div class="map-step" id="step-5">
                    <div class="step-marker">5</div>
                    <div class="step-content">
                        <h3>Получи приказ о зачислении</h3>
                        <p>После успешного прохождения конкурса ты получишь приказ о зачислении</p>
                    </div>
                </div>
                
                <div class="map-step treasure-chest" id="step-6">
                    <div class="step-marker"><i class="fas fa-award"></i></div>
                    <div class="step-content">
                        <h3>Поздравляем!</h3>
                        <p>Теперь ты студент Университета Шакарима!</p>
                    </div>
                </div>
                
                <!-- Линии соединения между шагами -->
                <div class="map-path"></div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Что еще интересного?" -->
    <section class="interesting-section">
        <h2>Что еще интересного?</h2>
        
        <div class="interesting-items">
            <div class="interesting-row">
                <div class="interesting-item">
                    <div class="interesting-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Современные лаборатории</h3>
                    <p>Оснащенные передовым оборудованием для проведения исследований и практических занятий</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Тренажерный зал</h3>
                    <p>Современное спортивное пространство для поддержания здорового образа жизни студентов</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Коворкинг</h3>
                    <p>Комфортное пространство для совместной работы, учебы и творческих проектов</p>
                </div>
            </div>
            
            <div class="interesting-row">
                <div class="interesting-item">
                    <div class="interesting-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Обширная научная библиотека</h3>
                    <p>Богатый фонд учебной и научной литературы, электронные ресурсы и базы данных</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Несколько учебных корпусов</h3>
                    <p>Современные аудитории и специализированные учебные пространства для комфортного обучения</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Популярные вопросы" -->
    <section class="popular-questions-section">
        <h2>Топ популярных вопросов</h2>
        
        <div class="questions-container">
            <div class="questions-grid">
                <a href="#" class="question-button">
                    <span>Стоимость обучения</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Дистанционное обучение</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Стипендии, гранты и квоты</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Студенческая жизнь</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Военная кафедра</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Условное зачисление</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>FOUNDATION</span>
                </a>
                
                <a href="#" class="question-button">
                    <span>Творческий экзамен</span>
                </a>
                
                <a href="#" class="question-button wide-button">
                    <span>Общежития</span>
                </a>
            </div>
            
            <div class="ask-question-block">
                <div class="illustration">
                    <img src="template.png" alt="Студент с подзорной трубой" width="500" height="400">
                </div>
                
                <div class="question-form">
                    <p>Остались вопросы?</p>
                    <a href="#" class="ask-button">Задать вопрос</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция с мероприятиями и календарем -->
    <section class="events-section">
        <h2>Мероприятия для абитуриентов</h2>
        
        <div class="events-container">
            <div class="calendar-block">
                <div class="calendar-header">
                    <button id="prevMonth" class="calendar-nav-btn"><i class="fas fa-chevron-left"></i></button>
                    <h3 id="currentMonth">Август 2024</h3>
                    <button id="nextMonth" class="calendar-nav-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
                
                <div id="calendar" class="calendar-widget"></div>
            </div>
            
            <div class="upcoming-events">
                <h3>Ближайшие события</h3>
                
                <div class="event-cards">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">15</span>
                            <span class="date-month">авг</span>
                        </div>
                        <div class="event-info">
                            <h4>День открытых дверей</h4>
                            <p>Главный корпус, 10:00 - 14:00</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">22</span>
                            <span class="date-month">авг</span>
                        </div>
                        <div class="event-info">
                            <h4>Мастер-класс по подготовке к ЕНТ</h4>
                            <p>Онлайн, 15:00 - 17:00</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="event-card">
                        <div class="event-date">
                            <span class="date-day">25</span>
                            <span class="date-month">авг</span>
                        </div>
                        <div class="event-info">
                            <h4>Встреча с деканами факультетов</h4>
                            <p>Актовый зал, 11:00 - 13:00</p>
                            <a href="#" class="event-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="see-all-events">Смотреть все мероприятия <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </section>
    
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
                    
                    <div class="contact-socials">
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-illustration">
                <img src="template.png" alt="Приемная комиссия" width="500" height="400">
            </div>
        </div>
    </section>
</div>
   


<?php

$content = ob_get_clean();