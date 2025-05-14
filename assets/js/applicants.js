// Ждем полной загрузки DOM перед выполнением JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация мобильного меню аудитории
    initMobileAudienceMenu();
    
    // Инициализация мобильного мега-меню
    initMobileMegaMenu();

    // Инициализация секции образовательных уровней
    initEducationLevels();

    // Инициализация секции "Что если я...?"
    initWhatIfSection();

    // Инициализация секции "Популярные вопросы"
    initPopularQuestions();

    initCalendar();

    // ------------- МЕГА-МЕНЮ -------------
    // Переключение видимости мега-меню при клике на кнопку
    const menuToggle = document.querySelector('.menu-toggle');
    const menuContainer = document.querySelector('.menu-container');
    
    menuToggle.addEventListener('click', function() {
        menuContainer.classList.toggle('active');
    });
    
    // Закрытие мега-меню при клике вне его области
    document.addEventListener('click', function(event) {
        if (!menuContainer.contains(event.target) && menuContainer.classList.contains('active')) {
            menuContainer.classList.remove('active');
        }
    });
    
    // ------------- ФОРМА ПОИСКА -------------
    // Переключение видимости формы поиска
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchBtn) {
        searchBtn.addEventListener('click', function(e) {
            // Предотвращаем всплытие события, чтобы не сработал обработчик документа
            e.stopPropagation();
            document.querySelector('.search-container').classList.toggle('search-active');
        });
        
        // Закрытие формы поиска при клике вне её области
        document.addEventListener('click', function(event) {
            if (!document.querySelector('.search-container').contains(event.target)) {
                document.querySelector('.search-container').classList.remove('search-active');
            }
        });
    }
    
    // ------------- ВЫБОР ЯЗЫКА -------------
    // Переключение выпадающего списка языков
    const langBtn = document.querySelector('.lang-btn');
    
    if (langBtn) {
        langBtn.addEventListener('click', function(e) {
            // Предотвращаем всплытие события
            e.stopPropagation();
            document.querySelector('.language-selector').classList.toggle('lang-active');
        });
        
        // Закрытие списка языков при клике вне его области
        document.addEventListener('click', function(event) {
            if (!document.querySelector('.language-selector').contains(event.target)) {
                document.querySelector('.language-selector').classList.remove('lang-active');
            }
        });
    }
    
    // ------------- КНОПКА ПРОКРУТКИ ВВЕРХ -------------
    // Показ/скрытие кнопки "наверх" при прокрутке
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            // Показываем кнопку, если прокрутка > 300px
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });
        
        // Плавная прокрутка наверх при клике на кнопку
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // ------------- ИНИЦИАЛИЗАЦИЯ ДОПОЛНИТЕЛЬНЫХ МОДУЛЕЙ -------------
    // Инициализация поведения шапки при прокрутке
    if (typeof initHeaderScroll === 'function') {
        initHeaderScroll();
    }

    // SPOILER LOGIC FOR content
    document.querySelectorAll('.content .spoiler-title').forEach(function(title) {
        title.addEventListener('click', function() {
            var toggle = this.querySelector('.spoiler-toggle');
            if (toggle) {
                toggle.classList.toggle('show-icon');
                toggle.classList.toggle('hide-icon');
            }
            var content = this.parentElement.querySelector('.spoiler-content');
            if (content) {
                content.style.display = (content.style.display === 'none' || content.style.display === '') ? 'block' : 'none';
            }
        });
    });

    // TEST BUTTONS LOGIC
    const testButtons = document.querySelectorAll('.test-btn');
    const imageBlock = document.getElementById('test-image-block');
    let currentImg = '';
    testButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const img = this.getAttribute('data-img');
            if (imageBlock.style.display !== 'none' && currentImg === img) {
                imageBlock.style.display = 'none';
                imageBlock.innerHTML = '';
                currentImg = '';
            } else {
                imageBlock.innerHTML = `<img src="${img}" alt="${img}" style="max-width:100%;height:auto;display:block;margin:0 auto;box-shadow:0 2px 12px rgba(0,0,0,0.08);border-radius:8px;">`;
                imageBlock.style.display = 'block';
                currentImg = img;
            }
        });
    });
});

/**
 * Инициализация секции уровней образования
 * Настраивает переключение между опциями и отображение соответствующих блоков с преимуществами
 */
function initEducationLevels() {
    const educationOptions = document.querySelectorAll('.education-option');
    const benefitsContainers = document.querySelectorAll('.benefits-container');
    
    // Установка первого варианта активным по умолчанию
    if (educationOptions.length > 0 && benefitsContainers.length > 0) {
        educationOptions[0].classList.add('active');
        const defaultTargetId = educationOptions[0].getAttribute('data-target');
        const defaultTarget = document.getElementById(defaultTargetId);
        if (defaultTarget) {
            defaultTarget.classList.add('active');
        }
    }
    
    // Добавление обработчиков для каждой опции
    educationOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Удаляем активный класс со всех опций
            educationOptions.forEach(opt => opt.classList.remove('active'));
            
            // Добавляем активный класс на текущую опцию
            this.classList.add('active');
            
            // Скрываем все контейнеры с преимуществами
            benefitsContainers.forEach(container => container.classList.remove('active'));
            
            // Показываем соответствующий контейнер
            const targetId = this.getAttribute('data-target');
            const targetContainer = document.getElementById(targetId);
            if (targetContainer) {
                targetContainer.classList.add('active');
                
                // Плавная прокрутка к контейнеру с преимуществами
                targetContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * Функция управления шапкой сайта при прокрутке
 * Скрывает верхнюю часть шапки при прокрутке вниз и показывает при прокрутке вверх
 */
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    const topHeader = document.querySelector('.top-header');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
        // Если прокрутили более 100px
        if (scrollTop > 100) {
            // Прокрутка вниз
            if (scrollTop > lastScrollTop) {
                header.classList.add('hide-top-header');
            } 
            // Прокрутка вверх
            else {
                header.classList.remove('hide-top-header');
            }
                    } else {
            header.classList.remove('hide-top-header');
        }
        
        // Сохраняем текущее положение прокрутки для следующего вызова
        lastScrollTop = scrollTop;
    });
}

/**
 * Инициализация мобильного меню аудитории
 */
function initMobileAudienceMenu() {
    const mobileAudienceBtn = document.querySelector('.mobile-audience-btn');
    const mainNav = document.querySelector('.main-nav');
    const body = document.body;
    
    // Если кнопка не найдена, прекращаем выполнение
    if (!mobileAudienceBtn) return;
    
    // Создаем элемент затемненной подложки, если его нет
    let backdrop = document.querySelector('.mobile-menu-backdrop');
    if (!backdrop) {
        backdrop = document.createElement('div');
        backdrop.className = 'mobile-menu-backdrop';
        document.body.appendChild(backdrop);
    }
    
    // Функция для открытия мобильного меню
    function openMobileMenu() {
        mainNav.classList.add('mobile-open');
        backdrop.classList.add('active');
        body.classList.add('mobile-menu-open');
        
        // Меняем иконку на крестик
        const icon = mobileAudienceBtn.querySelector('i');
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    }
    
    // Функция для закрытия мобильного меню
    function closeMobileMenu() {
        mainNav.classList.remove('mobile-open');
        backdrop.classList.remove('active');
        body.classList.remove('mobile-menu-open');
        
        // Меняем иконку на исходную
        const icon = mobileAudienceBtn.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
    
    // Обработчик нажатия на кнопку мобильного меню
    mobileAudienceBtn.addEventListener('click', function() {
        if (mainNav.classList.contains('mobile-open')) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    });
    
    // Закрываем меню при клике на подложку
    backdrop.addEventListener('click', closeMobileMenu);
    
    // Закрываем меню при клике по пункту меню
    mainNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
    
    // Закрываем меню при скролле
    window.addEventListener('scroll', function() {
        if (mainNav.classList.contains('mobile-open')) {
            closeMobileMenu();
        }
    });
    
    // Закрываем меню при изменении размера окна
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && mainNav.classList.contains('mobile-open')) {
            closeMobileMenu();
        }
    });
}

/**
 * Инициализирует мобильное мега-меню с вертикальным раскрытием подкатегорий
 * Управляет показом/скрытием подкатегорий и под-подкатегорий на мобильных устройствах
 */
function initMobileMegaMenu() {
    // Глобальная переменная для хранения состояния инициализации
    let menuInitialized = false;
    
    // Проверяем размер экрана при загрузке страницы
    checkMobileMenu();
    
    // Также проверяем при изменении размера окна
    window.addEventListener('resize', checkMobileMenu);
    
    // Функция проверки мобильного размера экрана и настройки обработчиков
    function checkMobileMenu() {
        // Проверяем, что мы на мобильном устройстве
        const isMobile = window.innerWidth <= 768;
        
        // Находим элементы меню
        const categoryItems = document.querySelectorAll('.category-item.has-children');
        const subcategoryItems = document.querySelectorAll('.subcategory.has-children');
        const subsubcategoryItems = document.querySelectorAll('.subsubcategory.has-children');
        
        // Функция для закрытия всех меню
        function closeAllMenus() {
            // Закрываем все категории
            categoryItems.forEach(item => {
                item.classList.remove('active');
            });
            
            // Закрываем все подкатегории
            subcategoryItems.forEach(item => {
                item.classList.remove('active');
            });
            
            // Закрываем все подподкатегории
            subsubcategoryItems.forEach(item => {
                item.classList.remove('active');
            });
        }
        
        // Если не мобильное устройство, удаляем все обработчики и активные классы
        if (!isMobile) {
            // Если уже было инициализировано меню, очищаем его
            if (menuInitialized) {
                // Закрываем все активные меню
                closeAllMenus();
                
                // Удаляем обработчики
                categoryItems.forEach(item => {
                    const link = item.querySelector('.category-link');
                    if (link) {
                        link.removeEventListener('click', categoryClickHandler);
                    }
                });
                
                subcategoryItems.forEach(item => {
                    const link = item.querySelector('.subcategory-link');
                    if (link) {
                        link.removeEventListener('click', subcategoryClickHandler);
                    }
                });
                
                subsubcategoryItems.forEach(item => {
                    const link = item.querySelector('.subsubcategory-link');
                    if (link) {
                        link.removeEventListener('click', subsubcategoryClickHandler);
                    }
                });
                
                // Удаляем глобальный обработчик
                document.removeEventListener('click', documentClickHandler);
                
                menuInitialized = false;
            }
            return;
        }
        
        // Если уже инициализировано, не делаем этого повторно
        if (menuInitialized) return;
        
        // Закрываем все меню при инициализации
        closeAllMenus();
        
        // Настраиваем обработчики для мобильного устройства
        categoryItems.forEach(item => {
            const link = item.querySelector('.category-link');
            if (link) {
                // Удаляем предыдущий обработчик, чтобы избежать дублирования
                link.removeEventListener('click', categoryClickHandler);
                
                // Добавляем новый обработчик
                link.addEventListener('click', categoryClickHandler);
            }
        });
        
        subcategoryItems.forEach(item => {
            const link = item.querySelector('.subcategory-link');
            if (link) {
                // Удаляем предыдущий обработчик, чтобы избежать дублирования
                link.removeEventListener('click', subcategoryClickHandler);
                
                // Добавляем новый обработчик
                link.addEventListener('click', subcategoryClickHandler);
            }
        });
        
        // Добавляем обработчики для подподкатегорий
        subsubcategoryItems.forEach(item => {
            const link = item.querySelector('.subsubcategory-link');
            if (link) {
                // Удаляем предыдущий обработчик, чтобы избежать дублирования
                link.removeEventListener('click', subsubcategoryClickHandler);
                
                // Добавляем новый обработчик
                link.addEventListener('click', subsubcategoryClickHandler);
            }
        });
        
        // Добавляем обработчик клика для закрытия меню при клике вне меню
        document.addEventListener('click', documentClickHandler);
        
        menuInitialized = true;
    }
    
    // Обработчик клика для категорий
    function categoryClickHandler(event) {
        // Предотвращаем переход по ссылке
        event.preventDefault();
        
        // Получаем родительский элемент (li.category-item)
        const item = this.closest('.category-item');
        
        // Проверяем, активен ли уже этот пункт
        const isActive = item.classList.contains('active');
        
        // Закрываем все открытые подменю того же уровня если нажали на другой пункт
        // или сохраняем текущее состояние, если нажали на тот же пункт
        if (!isActive) {
            const allItems = document.querySelectorAll('.category-item.has-children');
            allItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    
                    // Закрываем все подкатегории внутри закрытой категории
                    const nestedSubcategories = otherItem.querySelectorAll('.subcategory.has-children');
                    nestedSubcategories.forEach(subItem => {
                        subItem.classList.remove('active');
                    });
                }
            });
        } else {
            // Если закрываем активный пункт - закрываем все вложенные подкатегории
            const nestedSubcategories = item.querySelectorAll('.subcategory.has-children');
            nestedSubcategories.forEach(subItem => {
                subItem.classList.remove('active');
            });
        }
        
        // Переключаем состояние текущего пункта
        item.classList.toggle('active');
    }
    
    // Обработчик клика для подкатегорий
    function subcategoryClickHandler(event) {
        // Предотвращаем переход по ссылке
        event.preventDefault();
        
        // Получаем родительский элемент (li.subcategory)
        const item = this.closest('.subcategory');
        
        // Проверяем, активен ли уже этот пункт
        const isActive = item.classList.contains('active');
        
        // Закрываем все открытые под-подменю на этом уровне если нажали на другой пункт
        // или сохраняем текущее состояние, если нажали на тот же пункт
        if (!isActive) {
            const parentSubcategory = item.closest('.subcategories');
            if (parentSubcategory) {
                parentSubcategory.querySelectorAll('.subcategory.has-children').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        
                        // Закрываем все подподкатегории внутри закрытой подкатегории
                        const nestedSubsubcategories = otherItem.querySelectorAll('.subsubcategory');
                        nestedSubsubcategories.forEach(subsubItem => {
                            subsubItem.classList.remove('active');
                        });
                    }
                });
            }
        } else {
            // Если закрываем активный пункт - закрываем все вложенные подподкатегории
            const nestedSubsubcategories = item.querySelectorAll('.subsubcategory');
            nestedSubsubcategories.forEach(subsubItem => {
                subsubItem.classList.remove('active');
            });
        }
        
        // Переключаем состояние текущего пункта
        item.classList.toggle('active');
    }

    // Обработчик клика для подподкатегорий
    function subsubcategoryClickHandler(event) {
        // Предотвращаем переход по ссылке
        event.preventDefault();
        
        // Получаем родительский элемент
        const item = this.closest('.subsubcategory');
        
        // Проверяем, активен ли уже этот пункт
        const isActive = item.classList.contains('active');
        
        // Закрываем все открытые элементы того же уровня
        if (!isActive) {
            const parentSubsubcategory = item.closest('.subsubcategories');
            if (parentSubsubcategory) {
                parentSubsubcategory.querySelectorAll('.subsubcategory.has-children').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
            }
        }
        
        // Переключаем состояние текущего пункта
        item.classList.toggle('active');
    }

    // Глобальный обработчик клика для закрытия меню
    function documentClickHandler(event) {
        // Проверяем, был ли клик вне меню
        const megaMenu = document.querySelector('.mega-menu');
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        
        if (megaMenu && !megaMenu.contains(event.target) && 
            mobileMenuBtn && !mobileMenuBtn.contains(event.target)) {
            
            // Закрываем все открытые категории
            const openCategories = document.querySelectorAll('.category-item.active');
            openCategories.forEach(category => {
                category.classList.remove('active');
            });
            
            // Закрываем все открытые подкатегории
            const openSubcategories = document.querySelectorAll('.subcategory.active');
            openSubcategories.forEach(subcategory => {
                subcategory.classList.remove('active');
            });
            
            // Закрываем все открытые подподкатегории
            const openSubsubcategories = document.querySelectorAll('.subsubcategory.active');
            openSubsubcategories.forEach(subsubcategory => {
                subsubcategory.classList.remove('active');
            });
        }
    }
}

/**
 * Инициализация секции "Что если я...?"
 * Настраивает переключение между вариантами и отображение соответствующей информации
 */
function initWhatIfSection() {
    const whatIfOptions = document.querySelectorAll('.what-if-option');
    const whatIfInfoBlocks = document.querySelectorAll('.what-if-info');
    const illustration = document.querySelector('.what-if-illustration');
    
    // Обработчик клика по опции
    whatIfOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Удаляем активный класс со всех опций
            whatIfOptions.forEach(opt => opt.classList.remove('active'));
            
            // Добавляем активный класс текущей опции
            this.classList.add('active');
            
            // Скрываем все информационные блоки
            whatIfInfoBlocks.forEach(block => block.classList.remove('active'));
            
            // Показываем целевой информационный блок
            const targetId = this.getAttribute('data-target');
            const targetBlock = document.getElementById(targetId);
            
            if (targetBlock) {
                targetBlock.classList.add('active');
                
                // Скрываем иллюстрацию при показе информации
                if (illustration) {
                    illustration.style.opacity = '0';
                    illustration.style.display = 'none';
                }
            }
        });
    });
    
    // Проверяем, есть ли активная опция, если нет - активируем первую
    if (whatIfOptions.length > 0) {
        const activeOption = document.querySelector('.what-if-option.active');
        if (!activeOption) {
            // Имитируем клик по первой опции
            whatIfOptions[0].click();
        }
    }
}

/**
 * Инициализация секции "Популярные вопросы"
 * Обрабатывает нажатия на кнопки вопросов и показывает соответствующий контент
 */
function initPopularQuestions() {
    const questionButtons = document.querySelectorAll('.popular-questions-section .question-button');
    const questionImage = document.querySelector('.question-image');
    const questionContents = document.querySelectorAll('.question-content');
    
    // Добавляем обработчики для каждой кнопки
    questionButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Получаем ID вопроса из атрибута data-question
            const questionId = this.getAttribute('data-question');
            
            // Снимаем активный класс со всех кнопок
            questionButtons.forEach(btn => btn.classList.remove('active'));
            
            // Добавляем активный класс нажатой кнопке
            this.classList.add('active');
            
            // Скрываем картинку
            if (questionImage) {
                questionImage.classList.remove('active');
            }
            
            // Скрываем все контенты вопросов
            questionContents.forEach(content => content.classList.remove('active'));
            
            // Показываем нужный контент
            const targetContent = document.getElementById(questionId);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
}

function initCalendar() {
    const calendarEl = document.getElementById('calendar');
    if (!calendarEl) return;

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: '2025-06-01',
        headerToolbar: false,
        locale: 'ru',
        height: 'auto',
        expandRows: true,
        fixedWeekCount: false,
        dayCellDidMount: function(info) {
            const date = info.date;
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
            // Июньские праздники
            if (year === 2025 && month === 6) {
                if (day === 1) {
                    const dayNumberEl = info.el.querySelector('.fc-daygrid-day-number');
                    dayNumberEl.classList.add('holiday-circle', 'green-circle');
                    dayNumberEl.setAttribute('data-holiday', 'День защиты детей');
                    dayNumberEl.style.cursor = 'default';
                }
            }
        },
        events: [
            // Прием документов (длительные события, с понедельника по воскресенье)
            {
                title: 'Прием документов',
                start: '2025-06-02',
                end: '2025-06-09',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            {
                title: 'Прием документов',
                start: '2025-06-09',
                end: '2025-06-16',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            {
                title: 'Прием документов',
                start: '2025-06-16',
                end: '2025-06-23',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            {
                title: 'Прием документов',
                start: '2025-06-23',
                end: '2025-06-30',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            // Отдельные события (с астериском)
            {
                title: 'День открытых дверей',
                start: '2025-06-05T10:00:00',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Мастер-класс для абитуриентов',
                start: '2025-06-12T14:30:00',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Встреча с деканами',
                start: '2025-06-20T11:00:00',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Семинар по поступлению',
                start: '2025-06-25T15:00:00',
                display: 'background',
                classNames: ['event-with-asterisk']
            }
        ],
        eventClick: function(info) {
            // Prevent default navigation action
            info.jsEvent.preventDefault();
            return false;
        }
    });
    calendar.render();
    setTimeout(() => {
        addAsterisksToEvents(calendar);
        addTooltipsToCalendarDays(calendar);
        
        // Disable all links in the calendar after rendering
        disableCalendarLinks();
    }, 100);
    
    function disableCalendarLinks() {
        // Find all links and clickable elements in the calendar
        const calendarLinks = calendarEl.querySelectorAll('a');
        calendarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                return false;
            });
            link.style.cursor = 'default';
            link.removeAttribute('href');
        });
    }
    
    function addAsterisksToEvents(calendar) {
        const events = calendar.getEvents();
        const eventDates = {};
        events.forEach(event => {
            if (event.display === 'background' && event.classNames.includes('event-with-asterisk')) {
                const eventDate = event.startStr.split('T')[0];
                eventDates[eventDate] = true;
            }
        });
        Object.keys(eventDates).forEach(date => {
            const dateCell = document.querySelector(`.fc-daygrid-day[data-date="${date}"]`);
            if (dateCell && !dateCell.classList.contains('has-asterisk')) {
                dateCell.classList.add('has-asterisk');
                if (!dateCell.querySelector('.event-asterisk')) {
                    const asterisk = document.createElement('span');
                    asterisk.className = 'event-asterisk';
                    asterisk.textContent = '*';
                    asterisk.title = 'Есть события в этот день';
                    dateCell.appendChild(asterisk);
                }
            }
        });
    }
    function addTooltipsToCalendarDays(calendar) {
        const events = calendar.getEvents();
        const eventsByDate = {};
        const holidayDates = {
            '2025-06-01': 'День защиты детей'
        };
        events.forEach(event => {
            const eventStart = event.start;
            if (!eventStart) return;
            const dateStr = eventStart.toISOString().split('T')[0];
            if (!eventsByDate[dateStr]) {
                eventsByDate[dateStr] = [];
            }
            eventsByDate[dateStr].push({
                title: event.title,
                type: event.classNames && event.classNames.includes('thin-event') ? 'session' : 'regular',
                time: eventStart.toTimeString().substring(0, 5)
            });
        });
        Object.keys(holidayDates).forEach(dateStr => {
            if (!eventsByDate[dateStr]) {
                eventsByDate[dateStr] = [];
            }
            eventsByDate[dateStr].unshift({
                title: holidayDates[dateStr],
                type: 'holiday'
            });
        });
        Object.keys(eventsByDate).forEach(dateStr => {
            const dayEvents = eventsByDate[dateStr];
            if (dayEvents.length > 0) {
                const dateCell = document.querySelector(`.fc-daygrid-day[data-date="${dateStr}"]`);
                if (dateCell) {
                    dateCell.classList.add('has-tooltip');
                    const tooltip = document.createElement('div');
                    tooltip.className = 'day-tooltip';
                    const date = new Date(dateStr);
                    const formattedDate = date.toLocaleDateString('ru-RU', { day: 'numeric', month: 'long', year: 'numeric' });
                    const tooltipHeader = document.createElement('h4');
                    tooltipHeader.textContent = `События на ${formattedDate}`;
                    tooltip.appendChild(tooltipHeader);
                    const eventsList = document.createElement('ul');
                    dayEvents.forEach(event => {
                        const eventItem = document.createElement('li');
                        eventItem.className = `${event.type}-event`;
                        if (event.time) {
                            eventItem.textContent = `${event.title} (${event.time})`;
                        } else {
                            eventItem.textContent = event.title;
                        }
                        eventsList.appendChild(eventItem);
                    });
                    tooltip.appendChild(eventsList);
                    dateCell.appendChild(tooltip);
                    dateCell.addEventListener('mouseenter', function() {
                        tooltip.style.visibility = 'hidden';
                        tooltip.style.display = 'block';
                        const tooltipRect = tooltip.getBoundingClientRect();
                        const cellRect = dateCell.getBoundingClientRect();
                        const calendarRect = document.getElementById('calendar').getBoundingClientRect();
                        const viewportHeight = window.innerHeight;
                        const viewportWidth = window.innerWidth;
                        const isInLowerHalf = cellRect.top > calendarRect.top + (calendarRect.height / 2);
                        let position = 'bottom';
                        if (isInLowerHalf || (viewportHeight - cellRect.bottom < tooltipRect.height && cellRect.top > tooltipRect.height)) {
                            position = 'top';
                        }
                        let alignment = 'center';
                        if (cellRect.left + (tooltipRect.width / 2) > viewportWidth) {
                            alignment = 'right';
                        } else if (cellRect.left - (tooltipRect.width / 2) < 0) {
                            alignment = 'left';
                        }
                        tooltip.classList.remove('position-top', 'position-bottom', 'align-left', 'align-center', 'align-right');
                        tooltip.classList.add(`position-${position}`, `align-${alignment}`);
                        tooltip.style.visibility = 'visible';
                    });
                    dateCell.addEventListener('mouseleave', function() {
                        tooltip.style.display = 'none';
                    });
                }
            }
        });
    }
    window.addEventListener('resize', function() {
        setTimeout(() => {
            document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
            addAsterisksToEvents(calendar);
            addTooltipsToCalendarDays(calendar);
        }, 100);
    });
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const currentMonthEl = document.getElementById('currentMonth');
    if (prevMonthBtn && nextMonthBtn && currentMonthEl) {
        prevMonthBtn.addEventListener('click', function() {
            calendar.prev();
            updateMonthDisplay();
            setTimeout(() => {
                document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
                addAsterisksToEvents(calendar);
                addTooltipsToCalendarDays(calendar);
            }, 100);
        });
        nextMonthBtn.addEventListener('click', function() {
            calendar.next();
            updateMonthDisplay();
            setTimeout(() => {
                document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
                addAsterisksToEvents(calendar);
                addTooltipsToCalendarDays(calendar);
            }, 100);
        });
        function updateMonthDisplay() {
            const date = calendar.getDate();
            const locale = 'ru';
            const monthName = date.toLocaleString(locale, { month: 'long' });
            const year = date.getFullYear();
            let formattedMonth = monthName.charAt(0).toUpperCase() + monthName.slice(1);
            currentMonthEl.textContent = `${formattedMonth} ${year}`;
        }
        updateMonthDisplay();
    }
}

// Добавляем стили для анимации путей
const styleSheet = document.createElement("style");
styleSheet.textContent = `
@keyframes dashOffset {
    from {
        stroke-dashoffset: 500;
    }
    to {
        stroke-dashoffset: 0;
    }
}

.path-animation {
    stroke-dashoffset: 500;
}
`;
document.head.appendChild(styleSheet); 