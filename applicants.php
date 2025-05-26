<?php
$page_styles = '<link rel="stylesheet" href="assets/css/applicants.css">';
$page_scripts = '<script src="assets/js/applicants.js"></script>';

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
    
    <!-- Секция "Что еще интересного?" -->
    <section class="interesting-section">
        <h2>Что еще интересного?</h2>
        
        <div class="interesting-items">
            <div class="interesting-row">
                <div class="interesting-item">
                    <div class="interesting-image">
                        <img src="assets/img/2ddb3fbd-aa50-4c3f-bd54-1ee12a89ee57.jpg" alt="Современные лаборатории">
                    </div>
                    <h3>Современные лаборатории</h3>
                    <p>Оснащенные передовым оборудованием для проведения исследований и практических занятий</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-image">
                        <img src="assets/img/c7119b29-24c8-4b7f-84e8-203cc6f0b103.jpg" alt="Тренажерный зал">
                    </div>
                    <h3>Тренажерный зал</h3>
                    <p>Современное спортивное пространство для поддержания здорового образа жизни студентов</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-image">
                        <img src="assets/img/2066bfba-72c7-4cd8-a32b-caa0a001b52d.jpg" alt="Коворкинг">
                    </div>
                    <h3>Коворкинг</h3>
                    <p>Комфортное пространство для совместной работы, учебы и творческих проектов</p>
                </div>
            </div>
            
            <div class="interesting-row">
                <div class="interesting-item">
                    <div class="interesting-image">
                        <img src="assets/img/7870b6bf-b7a3-40e6-9892-d283eff2956b.jpg" alt="Обширная научная библиотека">
                    </div>
                    <h3>Обширная научная библиотека</h3>
                    <p>Богатый фонд учебной и научной литературы, электронные ресурсы и базы данных</p>
                </div>
                
                <div class="interesting-item">
                    <div class="interesting-image">
                        <img src="assets/img/d62f44bc-f425-4565-8f5d-df740bb4fa8c.png" alt="Несколько учебных корпусов">
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
            <div class="questions-layout">
                <div class="questions-column">
            <div class="questions-grid">
                        <button class="question-button" data-question="tuition">
                    <span>Стоимость обучения</span>
                        </button>
                
                        <button class="question-button" data-question="distance">
                    <span>Дистанционное обучение</span>
                        </button>
                
                        <button class="question-button" data-question="scholarships">
                    <span>Стипендии, гранты и квоты</span>
                        </button>
                
                        <button class="question-button" data-question="student-life">
                    <span>Студенческая жизнь</span>
                        </button>
                
                        <button class="question-button" data-question="military">
                    <span>Военная кафедра</span>
                        </button>
                
                        <button class="question-button" data-question="conditional">
                    <span>Условное зачисление</span>
                        </button>
                
                        <button class="question-button" data-question="foundation">
                    <span>FOUNDATION</span>
                        </button>
                
                        <button class="question-button" data-question="creative-exam">
                    <span>Творческий экзамен</span>
                        </button>
                
                        <button class="question-button wide-button" data-question="dormitories">
                    <span>Общежития</span>
                        </button>
                        
                        <div class="questions-footer">
                            <div class="questions-footer-text">Остались вопросы?</div>
                            <a href="#" class="ask-button">Задать вопрос</a>
                        </div>
            </div>
                </div>
                
                <div class="question-content-container">
                    <!-- Картинка по умолчанию -->
                    <div class="question-image active">
                        <img src="assets/img/applicants5.png" alt="Студент с подзорной трубой" width="500" height="400">
                    </div>
                    
                    <!-- Контент вопросов -->
                    <div class="question-content" id="tuition">
                        <h3>Стоимость обучения</h3>
                        <p>Стоимость обучения в Университете Шакарима зависит от выбранной программы и уровня образования:</p>
                        <ul>
                            <li>Бакалавриат: от 650 000 тенге в год</li>
                            <li>Магистратура: от 750 000 тенге в год</li>
                            <li>Докторантура: от 950 000 тенге в год</li>
                        </ul>
                        <p>Университет предлагает различные скидки и льготы для определенных категорий студентов. Подробную информацию о стоимости конкретной программы можно получить в приемной комиссии.</p>
                    </div>
                    
                    <div class="question-content" id="distance">
                        <h3>Дистанционное обучение</h3>
                        <p>Университет Шакарима предлагает возможность дистанционного обучения по многим программам бакалавриата и магистратуры.</p>
                        <p>Дистанционное обучение проводится через современную образовательную платформу, которая включает:</p>
                        <ul>
                            <li>Видеолекции и онлайн-консультации с преподавателями</li>
                            <li>Электронную библиотеку с учебными материалами</li>
                            <li>Систему онлайн-тестирования и проверки знаний</li>
                        </ul>
                        <p>Студенты дистанционной формы обучения получают такой же диплом государственного образца, как и студенты очной формы.</p>
                    </div>
                    
                    <div class="question-content" id="scholarships">
                        <h3>Стипендии, гранты и квоты</h3>
                        <p>Университет Шакарима предлагает различные возможности финансовой поддержки студентов:</p>
                        <ul>
                            <li>Государственные образовательные гранты на основе результатов ЕНТ</li>
                            <li>Социальные квоты для определенных категорий абитуриентов</li>
                            <li>Именные стипендии для талантливых студентов</li>
                            <li>Скидки на обучение для студентов с высокой успеваемостью</li>
                        </ul>
                        <p>Размер государственной стипендии в 2024 году составляет около 41 000 тенге в месяц. Повышенные стипендии доступны для студентов с отличной успеваемостью.</p>
                    </div>
                    
                    <div class="question-content" id="student-life">
                        <h3>Студенческая жизнь</h3>
                        <p>Университет Шакарима предлагает насыщенную студенческую жизнь:</p>
                        <ul>
                            <li>Более 20 студенческих клубов и организаций</li>
                            <li>Спортивные секции и соревнования</li>
                            <li>Культурные мероприятия и концерты</li>
                            <li>Волонтерские и социальные проекты</li>
                            <li>Студенческое самоуправление</li>
                        </ul>
                        <p>Каждый студент может найти занятие по интересам и развивать свои таланты помимо учебы. Университет также организует различные экскурсии, выезды и образовательные поездки для студентов.</p>
                    </div>
                    
                    <div class="question-content" id="military">
                        <h3>Военная кафедра</h3>
                        <p>В Университете Шакарима функционирует военная кафедра, которая предоставляет студентам возможность получить военную подготовку параллельно с основным образованием.</p>
                        <p>Требования для поступления на военную кафедру:</p>
                        <ul>
                            <li>Казахстанское гражданство</li>
                            <li>Хорошая успеваемость (GPA не ниже 2.0)</li>
                            <li>Хорошее здоровье (годность к военной службе)</li>
                            <li>Успешное прохождение физических нормативов</li>
                        </ul>
                        <p>Выпускники военной кафедры получают звание офицера запаса и освобождаются от срочной военной службы.</p>
                    </div>
                    
                    <div class="question-content" id="conditional">
                        <h3>Условное зачисление</h3>
                        <p>Университет Шакарима предлагает программу условного зачисления для абитуриентов, которые:</p>
                        <ul>
                            <li>Ожидают получения результатов ЕНТ или других вступительных экзаменов</li>
                            <li>Находятся в процессе оформления документов</li>
                            <li>Ожидают получения нострификации иностранных документов об образовании</li>
                        </ul>
                        <p>Условное зачисление позволяет начать обучение до завершения всех формальных процедур. Абитуриент получает доступ к учебному процессу, но должен предоставить все необходимые документы в течение установленного срока.</p>
                        <p>Для получения подробной информации об условном зачислении обратитесь в приемную комиссию.</p>
                    </div>
                    
                    <div class="question-content" id="foundation">
                        <h3>FOUNDATION</h3>
                        <p>Программа Foundation в Университете Шакарима - это подготовительный курс для будущих студентов, который помогает:</p>
                        <ul>
                            <li>Подготовиться к поступлению в университет</li>
                            <li>Улучшить знания по профильным предметам</li>
                            <li>Повысить уровень владения языком обучения</li>
                            <li>Адаптироваться к университетской среде</li>
                        </ul>
                        <p>Программа особенно полезна для иностранных студентов и абитуриентов, которым требуется дополнительная подготовка перед началом основного обучения.</p>
                        <p>Продолжительность программы Foundation составляет 1 академический год. После успешного завершения программы студенты могут поступить на 1 курс выбранной специальности.</p>
                    </div>
                    
                    <div class="question-content" id="creative-exam">
                        <h3>Творческий экзамен</h3>
                        <p>Творческий экзамен является обязательным для поступления на специальности творческого направления, такие как:</p>
                        <ul>
                            <li>Журналистика</li>
                            <li>Дизайн</li>
                            <li>Архитектура</li>
                            <li>Физическая культура и спорт</li>
                        </ul>
                        <p>Экзамен состоит из двух творческих заданий, соответствующих выбранной специальности. Для каждого направления установлены свои требования и критерии оценки.</p>
                        <p>Абитуриентам необходимо заранее ознакомиться с программой творческого экзамена и подготовить необходимые материалы. Консультации перед экзаменом проводятся профильными кафедрами.</p>
                    </div>
                    
                    <div class="question-content" id="dormitories">
                        <h3>Общежития</h3>
                        <p>Университет Шакарима предоставляет комфортные общежития для иногородних студентов:</p>
                        <ul>
                            <li>5 студенческих общежитий в разных районах города</li>
                            <li>Комнаты на 2-3 человека с современной мебелью</li>
                            <li>Общие кухни и санузлы на каждом этаже</li>
                            <li>Комнаты отдыха и учебные помещения</li>
                            <li>Бесплатный Wi-Fi на территории общежитий</li>
                            <li>Прачечные и спортивные залы</li>
                        </ul>
                        <p>Стоимость проживания в общежитии составляет от 15 000 тенге в месяц. Приоритет при распределении мест отдается первокурсникам и социально уязвимым категориям студентов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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