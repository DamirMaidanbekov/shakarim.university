<?php
$page_styles = '<link rel="stylesheet" href="assets/css/admissions-applicants.css">';
$page_scripts = '<script src="assets/js/admissions-applicants.js"></script>';

ob_start();
?>
 
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <!-- Секция приветствия -->
    <section class="welcome-section">
        <div class="welcome-container">
            <div class="welcome-image">
                <img src="assets/img/applicants1.png" alt="Студенты Shakarim University" width="500" height="400">
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
                <div class="option-background" style="background-image: url('assets/img/applicants2.png');">
                    <div class="option-overlay"></div>
                    <h3>Бакалавриат</h3>
                </div>
            </div>
            
            <div class="education-option" id="master-option" data-target="master-benefits">
                <div class="option-background" style="background-image: url('assets/img/applicants3.png');">
                    <div class="option-overlay"></div>
                    <h3>Магистратура</h3>
                </div>
            </div>
            
            <div class="education-option" id="phd-option" data-target="phd-benefits">
                <div class="option-background" style="background-image: url('assets/img/applicants4.png');">
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
                    <div class="benefit-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Диплом государственного образца</h4>
                    <p>Да</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Отсрочка от армии</h4>
                    <p>Да</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-users"></i></div>
                    <h4>Очная форма обучения</h4>
                    <p>Форма обучения</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-building"></i></div>
                    <div class="benefit-content">
                    <h4>Общежития</h4>
                        <p>Комфортные условия проживания для иногородних студентов</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-certificate"></i></div>
                    <div class="benefit-content">
                        <h4>Независимые аккредитации</h4>
                        <p>ARQA, IAAR, САААЕ - международное признание качества образования</p>
                </div>
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
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-tree"></i></div>
                    <div class="benefit-content">
                        <h4>"Зелёный" рейтинг</h4>
                        <p>Экологическая ответственность и устойчивое развитие университета</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-industry"></i></div>
                    <div class="benefit-content">
                    <h4>Дуальная система обучения</h4>
                        <p>KAZDUAL - практикоориентированное образование с привлечением работодателей</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-flask"></i></div>
                    <h4>Современные лаборатории</h4>
                    <p>Обновленные корпуса</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-book-reader"></i></div>
                    <h4>Обширная научная библиотека</h4>
                    <p>Доступ к мировым изданиям</p>
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
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-users-cog"></i></div>
                    <h4>Клубы и организации</h4>
                    <p>Студенческое самоуправление</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-briefcase"></i></div>
                    <h4>Центр карьерного развития</h4>
                    <p>Помощь в трудоустройстве</p>
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
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-money-bill"></i></div>
                    <div class="benefit-content">
                    <h4>Бюджетные и платные места</h4>
                        <p>Научно‑педагогические программы – 176 бюджетных мест, платных – 430</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="benefit-content">
                        <h4>Конкурентоспособные проходные баллы</h4>
                        <p>Для бюджетного приёма: 88 на научно‑педагогические и 75 на профильные направления</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-dollar-sign"></i></div>
                    <h4>Доступная стоимость обучения</h4>
                    <p>Конкурентные цены</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-microscope"></i></div>
                    <h4>Исследовательская направленность</h4>
                    <p>Научный подход</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <div class="benefit-content">
                        <h4>Подготовка преподавательских кадров</h4>
                        <p>Программы «Педагогика и психология», «Дошкольное обучение и воспитание» формируют компетенции будущих преподавателей</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-briefcase"></i></div>
                    <div class="benefit-content">
                        <h4>Партнёрские MBA‑программы</h4>
                        <p>Executive MBA и классическое MBA для управленцев и предпринимателей</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-globe"></i></div>
                    <h4>Приём иностранных студентов</h4>
                    <p>Международная среда</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-university"></i></div>
                    <h4>Высшие школы</h4>
                    <p>Исследовательские центры</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-handshake"></i></div>
                    <div class="benefit-content">
                        <h4>Международные партнёрства</h4>
                        <p>Программа «Менеджер спорта» в сотрудничестве с польским университетом: 900 € в Польше + 500 000 ₸ в Шакариме</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Путь к PhD</h4>
                    <p>Дальнейшее академическое развитие</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-clock"></i></div>
                    <h4>Гибкие формы обучения</h4>
                    <p>Очная, заочная и смешанная формы</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-exchange-alt"></i></div>
                    <div class="benefit-content">
                    <h4>Академическая мобильность</h4>
                        <p>Возможность обмена опытом и участия в программах академических обменов с зарубежными вузами</p>
                    </div>
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
                    <div class="benefit-icon"><i class="fas fa-award"></i></div>
                    <h4>До 25 целевых грантов</h4>
                    <p>Для докторантов</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-user-tie"></i></div>
                    <div class="benefit-content">
                        <h4>Высококвалифицированный научный состав</h4>
                        <p>В педагогическом и научном штате – 28 докторов наук и профессоров, что гарантирует экспертное научное руководство</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <div class="benefit-content">
                        <h4>Государственный образовательный заказ</h4>
                        <p>Фиксированное количество бюджетных мест и целевых грантов по линии Министерства науки и высшего образования РК</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-tasks"></i></div>
                    <div class="benefit-content">
                        <h4>Структурированная система испытаний</h4>
                        <p>Экзамен состоит из трёх компонентов: эссе, теста на готовность и профильного экзамена по выбранной программе</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-list-ol"></i></div>
                    <div class="benefit-content">
                        <h4>Чёткий перечень тем и литературы</h4>
                        <p>Все требования к вступительным испытаниям, включая программы и список рекомендованной литературы, публикуются на официальном сайте</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-flask"></i></div>
                    <h4>Современные научно-исследовательские лаборатории</h4>
                    <p>Передовое оборудование</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-globe"></i></div>
                    <h4>Поддержка иностранных абитуриентов</h4>
                    <p>Международное сотрудничество</p>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-clipboard-check"></i></div>
                    <div class="benefit-content">
                    <h4>Пререквизиты для поступления</h4>
                        <p>Кандидаты должны иметь степень магистра и не менее 9 месяцев профессионального стажа, что повышает зрелость исследовательских навыков</p>
                    </div>
                </div>
                
                <div class="benefit-item-wide">
                    <div class="benefit-icon"><i class="fas fa-user-graduate"></i></div>
                    <div class="benefit-content">
                    <h4>Перспектива академической карьеры</h4>
                        <p>Успешная защита диссертации открывает путь к должности доцента, профессора и приглашениям на международные исследовательские проекты</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    

</div>
   


<?php

$content = ob_get_clean();