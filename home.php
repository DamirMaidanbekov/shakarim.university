<?php
$page_styles = '<link rel="stylesheet" href="assets/css/styles.css">';
$page_scripts = '<script src="assets/js/script.js"></script>';

ob_start();
?>

<section class="slider">
    <div class="slide active">
        <div class="slide-content">
            <h1>ДОБРО ПОЖАЛОВАТЬ SHAKARIM UNIVERSITY</h1>
        </div>
    </div>
    <div class="slider-nav">
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </div>
    <div class="slider-dots">
        <span class="dot active"></span>
    </div>
</section>

<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="icon-circle">
                    <div class="icon"><i class="fas fa-user-graduate"></i></div>
                </div>
                <div class="stat-number">6692</div>
                <div class="stat-name">Студентов</div>
            </div>
            <div class="stat-item">
                <div class="icon-circle">
                    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                </div>
                <div class="stat-number">354</div>
                <div class="stat-name">ППС</div>
            </div>
            <div class="stat-item">
                <div class="icon-circle">
                    <div class="icon"><i class="fas fa-building"></i></div>
                </div>
                <div class="stat-number">9</div>
                <div class="stat-name">Корпусов</div>
            </div>
            <div class="stat-item">
                <div class="icon-circle">
                    <div class="icon"><i class="fas fa-home"></i></div>
                </div>
                <div class="stat-number">5</div>
                <div class="stat-name">Общежитие</div>
            </div>
        </div>
    </div>
</section>

<!-- Секция каталога -->
<section class="catalog">
    <div class="catalog-grid">
        <!-- Школьникам -->
        <div class="catalog-item" data-bg="assets/img/bg-child.jpg">
            <a href="https://shakarim.edu.kz/ru/pages/obrazovaniye/lekoteka?pathway=obrazovaniye" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Школьникам</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">Наша цель — заинтересовать детей наукой и показать, что она тоже может быть занимательной и абсолютно доступной. Познакомившись с университетской жизнью в столь раннем возрасте, Вы поймете, что учиться в университете — это увлекательно.</div>
                </div>
            </a>
        </div>
        
        <!-- Поступающим -->
        <div class="catalog-item" data-bg="assets/img/bg-enrollee.jpg">
            <a href="https://shakarim.edu.kz/ru/abituriyentam/rector?pathway=abituriyentam" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Поступающим</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">Если вы хотите приобрести востребованную, гарантирующую стабильный доход специальность, наши двери открыты для вас!</div>
                </div>
            </a>
        </div>
        
        <!-- Обучающимся -->
        <div class="catalog-item" data-bg="assets/img/bg-teaching.jpg">
            <a href="https://shakarim.edu.kz/ru/pages/obuchayushchimsya/tsentr-obsluzhivaniya-obuchayushchikhsya?path=obuchayushchimsya" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Обучающимся</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">Вы имеете возможность ознакомиться с информацией, касающейся Вашей академической деятельности, найдете ответы на вопросы о студенческой жизни, учебном процессе, практике, экзаменах, а также много полезной информации.</div>
                </div>
            </a>
        </div>
        
        <!-- Выпускникам -->
        <div class="catalog-item" data-bg="assets/img/bg-graduate.jpg">
            <a href="https://shakarim.edu.kz/ru/pages/index?pathway=vypusnikam" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Выпускникам</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">Одной из задач Университета Шакарима является обеспечение конкурентоспособности выпускников. Мы заинтересованы в сотрудничестве с вами во имя процветания и развития нашего университета в рамках деятельности Ассоциации выпускников.</div>
                </div>
            </a>
        </div>
        
        <!-- Работодателям -->
        <div class="catalog-item" data-bg="assets/img/bg-employer.jpg">
            <a href="https://shakarim.edu.kz/ru/resume/index?pathway=rabotodatelyam" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Работодателям</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">Мы предлагаем Вам различные формы сотрудничества такие как подбор соискателей на вакантные места, организация встреч с обучающимися, проведение тренингов и мастер-классов, реализация совместных проектов, а также участие в Ярмарке вакансий.</div>
                </div>
            </a>
        </div>
        
        <!-- Серебряный университет -->
        <div class="catalog-item" data-bg="assets/img/bg-senior-teaching.jpg">
            <a href="https://shakarim.edu.kz/ru/pages/obrazovaniye/serebryanyy?pathway=obrazovaniye" class="catalog-link">
                <div class="catalog-bg"></div>
                <div class="catalog-overlay"></div>
                <div class="catalog-title">Серебряный</div>
                <div class="catalog-content">
                    <div class="catalog-separator"></div>
                    <div class="catalog-text">На базе Университета Шакарима создана новая форма деятельности направленная на повышение качества жизни, социальной активности и профессионального развития граждан взрослого поколения.</div>
                </div>
            </a>
        </div>
    </div>
</section>

<div class="extra-spacer" style="height: 0; clear: both; width: 100%;"></div>

<section class="schools">
    <div class="container" style="max-width: 100%; padding: 0 40px;">
        <h2 style="margin-bottom: 30px;">Школы</h2>
        <div class="schools-grid">
            <!-- Верхний ряд: 6 школ -->
            <div class="top-row">
                <div class="school">
                    <a href="https://rse.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-flask"></i></div>
                        <div class="school-name">Исследовательская школа пищевой инженерии</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://rsvma.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-leaf"></i></div>
                        <div class="school-name">Исследовательская школа ветеринарии и сельского хозяйства</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://gsaic.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-microchip"></i></div>
                        <div class="school-name">Высшая школа искусственного интеллекта и строительства</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://shakarim.edu.kz/ru/structure/shakarim-higher-college?pathway=kolledzh" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-university"></i></div>
                        <div class="school-name">Высший колледж Шакарима</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://hsp.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-book"></i></div>
                        <div class="school-name">Высшая школа филологии</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://gspms.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-calculator"></i></div>
                        <div class="school-name">Высшая школа физико-математических наук</div>
                    </a>
                </div>
            </div>
            
            <!-- Нижний ряд: 5 школ -->
            <div class="bottom-row">
                <div class="school">
                    <a href="https://gsns.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-atom"></i></div>
                        <div class="school-name">Высшая школа естественных наук</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://gse.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="school-name">Высшая школа образования</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://shakarim.edu.kz/ru/structure/shakarim-high-school?pathway=universitet" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-school"></i></div>
                        <div class="school-name">Shakarim High School</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://rspcs.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-vial"></i></div>
                        <div class="school-name">Исследовательская школа физических и химических наук</div>
                    </a>
                </div>
                <div class="school">
                    <a href="https://gsb.faculty.shakarim.kz/ru" style="text-decoration: none; color: inherit;">
                        <div class="school-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="school-name">Высшая школа бизнеса</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <h2 class="section-title">Новости</h2>
        
        <div class="news-container">
            <div class="news-item">
                <div class="news-title">АБАЙДЫҢ КІТАБЫН ШЫҢ БАСЫНА ШЫҒАРҒАН ҚАЗАҚ ҚЫЗЫ</div>
                <div class="news-content">
                    <div class="news-image">
                        <img src="assets/img/news1.jpg" alt="News 1">
                    </div>
                    <div class="news-text">
                        <p>Биыл Абай Құнанбайұлының туғанына 180 жыл. Осы ретте оқырмандарымызға ұлы ойшылдың кітабын Солтүстік Американың ең биік шыңы Дэналиға алып шыққан жерлесіміз Индира Уивер (Сахаулова) жайлы аз-кем ақпарат ұсынбақпыз.</p>
                        <a href="https://shakarim.edu.kz/kz/news/abaydyng-kitabyn-shyng-basyna-shygharghan-qazaq-qyzy" class="news-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            
            <div class="news-item">
                <div class="news-title">АРА АУРУЛАРЫНЫҢ АЛДЫН АЛУ – ӨЗЕКТІ МӘСЕЛЕ</div>
                <div class="news-content">
                    <div class="news-image">
                        <img src="assets/img/news2.jpg" alt="News 2">
                    </div>
                    <div class="news-text">
                        <p>Shakarim University-дің Ветеринария және ауыл шаруашылығы зерттеу мектебінде «Абай облысы жағдайындағы ара ауруларын зерттеу және олардың экожүйеге әсері» тақырыбында воркшоп өткізілді. Мақсат – облыстағы ара шаруашылығының бүгінгі күндегі кезек күттірмейтін мәселелерін талқылау, оларды шешу жолдарын ұсыну.</p>
                        <a href="https://shakarim.edu.kz/kz/news/ara-aurularynyng-aldyn-alu-ozekti-masele" class="news-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            
            <div class="news-item">
                <div class="news-title">ХОРВАТИЯНЫҢ ҚАЗАҚСТАНДАҒЫ ЕЛШІСІ - SHAKARIM UNIVERSITY-ДЕ</div>
                <div class="news-content">
                    <div class="news-image">
                        <img src="assets/img/news3.jpg" alt="News 3">
                    </div>
                    <div class="news-text">
                        <p>Абай облысына сапары барысында Хорватияның Қазақстандағы Төтенше және өкілетті елшісі Рефик Шабанович Shakarim University-де болып, оқу орнының тыныс-тіршілігімен танысты.</p>
                        <a href="https://shakarim.edu.kz/kz/news/khorvatiyanyng-qazaqstandaghy-yelshisi-shakarim-university-de" class="news-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="news-all-btn-container">
            <a href="news/index" class="news-all-btn">Все новости</a>
        </div>
    </div>
</section>

<!-- Секция анонсы -->
<section class="announcements">
    <div class="container">
        <h2>АНОНСЫ И СОБЫТИЯ</h2>
        <div class="announcements-grid">
            <div class="calendar-container">
                <div class="calendar-navigation">
                    <button id="prevMonth"><i class="fas fa-chevron-left"></i></button>
                    <h3 id="currentMonth">Май 2025</h3>
                    <button id="nextMonth"><i class="fas fa-chevron-right"></i></button>
                </div>
                <div id="calendar"></div>
            </div>
            <div class="announcements-list">
                <div class="announcement-item">
                    <div class="announcement-date">7 мая</div>
                    <a href="announcements/all-announcements" class="announcement-title">Научно-практическая конференция "Искусственный интеллект и машинное обучение в современных исследованиях"</a>
                </div>
                <div class="announcement-item">
                    <div class="announcement-date">14 мая</div>
                    <a href="announcements/all-announcements" class="announcement-title">Открытая лекция "Инновационные биотехнологии и их применение в сельском хозяйстве и медицине"</a>
                </div>
                <div class="announcement-item">
                    <div class="announcement-date">15 мая</div>
                    <a href="announcements/all-announcements" class="announcement-title">Научно-методический семинар "Современные подходы в психологии обучения: когнитивные и эмоциональные аспекты образовательного процесса"</a>
                </div>
                <div class="show-more-container">
                    <a href="announcements/all-announcements" class="show-more-btn">Показать еще</a>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
$content = ob_get_clean();