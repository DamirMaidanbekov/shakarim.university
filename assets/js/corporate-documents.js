document.addEventListener('DOMContentLoaded', function() {
    // Инициализация мобильного меню аудитории
    initMobileAudienceMenu();
    
    // Инициализация мобильного мега-меню
    initMobileMegaMenu();

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
    
    // ------------- ВЫБОР ЯЗЫКА -------------
    // Переключение выпадающего списка языков
    const langBtn = document.querySelector('.lang-btn');
    
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
    
    // ------------- КНОПКА ПРОКРУТКИ ВВЕРХ -------------
    // Показ/скрытие кнопки "наверх" при прокрутке
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    
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
    
    // ------------- ИНИЦИАЛИЗАЦИЯ ДОПОЛНИТЕЛЬНЫХ МОДУЛЕЙ -------------
    // Инициализация календаря
    initCalendar();

    // Инициализация поведения шапки при прокрутке
    initHeaderScroll();

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
 * Инициализация и настройка FullCalendar
 * Создает интерактивный календарь с событиями, праздниками и всплывающими подсказками
 */
function initCalendar() {
    // Получаем элемент календаря
    const calendarEl = document.getElementById('calendar');
    
    // Если календарь не найден, прекращаем выполнение
    if (!calendarEl) return;
    
    // Создаем экземпляр календаря с настройками
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // Вид по умолчанию - месяц
        initialDate: '2025-05-01',   // Начальная дата
        headerToolbar: false,        // Отключаем встроенную навигацию, используем свою
        locale: 'ru',                // Локализация
        height: 'auto',              // Автоматическая высота календаря
        expandRows: true,            // Расширяем строки для заполнения всей высоты
        fixedWeekCount: false,       // Позволяем показывать только нужное количество недель
        
        // Обработчик монтирования ячейки дня
        dayCellDidMount: function(info) {
            // Добавляем цветные кружки для праздничных дней
            const date = info.date;
            const day = date.getDate();
            const month = date.getMonth() + 1; // +1 т.к. месяцы начинаются с 0
            const year = date.getFullYear();
            
            // Проверяем праздничные дни
            if (year === 2025 && month === 5) {
                if (day === 1) {
                    // День единства народа Казахстана - зеленый кружок
                    const dayNumberEl = info.el.querySelector('.fc-daygrid-day-number');
                    dayNumberEl.classList.add('holiday-circle');
                    dayNumberEl.classList.add('green-circle');
                    dayNumberEl.setAttribute('data-holiday', 'День единства народа Казахстана');
                    dayNumberEl.style.cursor = 'pointer';
                    dayNumberEl.addEventListener('click', function() {
                        window.location.href = 'https://shakarim.edu.kz/ru/announcement/index';
                    });
                } else if (day === 7) {
                    // День защитника Отечества - синий кружок
                    const dayNumberEl = info.el.querySelector('.fc-daygrid-day-number');
                    dayNumberEl.classList.add('holiday-circle');
                    dayNumberEl.classList.add('blue-circle');
                    dayNumberEl.setAttribute('data-holiday', 'День защитника Отечества');
                    dayNumberEl.style.cursor = 'pointer';
                    dayNumberEl.addEventListener('click', function() {
                        window.location.href = 'https://shakarim.edu.kz/ru/announcement/index';
                    });
                } else if (day === 9) {
                    // День Победы - красный кружок
                    const dayNumberEl = info.el.querySelector('.fc-daygrid-day-number');
                    dayNumberEl.classList.add('holiday-circle');
                    dayNumberEl.classList.add('red-circle');
                    dayNumberEl.setAttribute('data-holiday', 'День Победы');
                    dayNumberEl.style.cursor = 'pointer';
                    dayNumberEl.addEventListener('click', function() {
                        window.location.href = 'https://shakarim.edu.kz/ru/announcement/index';
                    });
                }
            }
        },
        
        // Список событий календаря
        events: [
            // Сессии (длительные события)
            {
                title: 'Сессия',
                start: '2025-05-12',
                end: '2025-05-17', // Дата окончания не включается в FullCalendar
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            {
                title: 'Сессия',
                start: '2025-05-19',
                end: '2025-05-24',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            {
                title: 'Сессия',
                start: '2025-05-26',
                end: '2025-05-31',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                color: '#4285F4',
                classNames: ['thin-event']
            },
            
            // Отдельные события (с астериском)
            {
                title: 'Конференция по искусственному интеллекту',
                start: '2025-05-07T10:00:00',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Мастер-класс по программированию',
                start: '2025-05-07T14:30:00',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Открытая лекция по биотехнологиям',
                start: '2025-05-14T11:00:00',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Семинар по психологии',
                start: '2025-05-15T15:00:00',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                display: 'background',
                classNames: ['event-with-asterisk']
            },
            {
                title: 'Встреча с работодателями',
                start: '2025-05-20T13:00:00',
                url: 'https://shakarim.edu.kz/ru/announcement/index',
                display: 'background',
                classNames: ['event-with-asterisk']
            }
        ]
    });
    
    // Рендерим календарь
    calendar.render();
    
    // После рендеринга добавляем звездочки и всплывающие подсказки
    setTimeout(() => {
        // Добавляем звездочки к датам с событиями
        addAsterisksToEvents(calendar);
        
        // Добавляем всплывающие подсказки к дням
        addTooltipsToCalendarDays(calendar);
    }, 100);
    
    /**
     * Функция для добавления звездочек к датам с событиями
     * @param {Object} calendar - Экземпляр FullCalendar
     */
    function addAsterisksToEvents(calendar) {
        // Получаем все события календаря
        const events = calendar.getEvents();
        const eventDates = {};
        
        // Отмечаем даты, на которые есть события с отметкой event-with-asterisk
        events.forEach(event => {
            if (event.display === 'background' && event.classNames.includes('event-with-asterisk')) {
                const eventDate = event.startStr.split('T')[0];
                eventDates[eventDate] = true;
            }
        });
        
        // Перебираем все отмеченные даты и добавляем звездочки
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
                    
                    asterisk.addEventListener('click', function(e) {
                        e.stopPropagation();
                        window.location.href = 'https://shakarim.edu.kz/ru/announcement/index';
                    });
                }
            }
        });
    }
    
    /**
     * Функция для добавления всплывающих подсказок к дням календаря
     * @param {Object} calendar - Экземпляр FullCalendar
     */
    function addTooltipsToCalendarDays(calendar) {
        // Получаем все события календаря
        const events = calendar.getEvents();
        
        // Группируем события по датам
        const eventsByDate = {};
        
        // Добавляем данные о праздничных днях
        const holidayDates = {
            '2025-05-01': 'День единства народа Казахстана',
            '2025-05-07': 'День защитника Отечества',
            '2025-05-09': 'День Победы'
        };
        
        // Обрабатываем обычные события из календаря
        events.forEach(event => {
            const eventStart = event.start;
            
            // Если нет даты начала, пропускаем
            if (!eventStart) return;
            
            // Форматируем дату в YYYY-MM-DD
            const dateStr = eventStart.toISOString().split('T')[0];
            
            // Инициализируем массив событий для этой даты, если его еще нет
            if (!eventsByDate[dateStr]) {
                eventsByDate[dateStr] = [];
            }
            
            // Добавляем событие в список
            eventsByDate[dateStr].push({
                title: event.title,
                type: event.classNames && event.classNames.includes('thin-event') ? 'session' : 'regular',
                time: eventStart.toTimeString().substring(0, 5) // Формат HH:MM
            });
        });
        
        // Добавляем праздничные дни в общий список событий
        Object.keys(holidayDates).forEach(dateStr => {
            if (!eventsByDate[dateStr]) {
                eventsByDate[dateStr] = [];
            }
            
            // Добавляем праздник в начало списка событий
            eventsByDate[dateStr].unshift({
                title: holidayDates[dateStr],
                type: 'holiday'
            });
        });
        
        // Добавляем всплывающие подсказки ко всем дням с событиями
        Object.keys(eventsByDate).forEach(dateStr => {
            const dayEvents = eventsByDate[dateStr];
            if (dayEvents.length > 0) {
                const dateCell = document.querySelector(`.fc-daygrid-day[data-date="${dateStr}"]`);
                if (dateCell) {
                    dateCell.classList.add('has-tooltip');
                    
                    // Создаем содержимое всплывающей подсказки
                    const tooltip = document.createElement('div');
                    tooltip.className = 'day-tooltip';
                    
                    // Добавляем заголовок с датой
                    const date = new Date(dateStr);
                    const formattedDate = date.toLocaleDateString('ru-RU', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });
                    
                    const tooltipHeader = document.createElement('h4');
                    tooltipHeader.textContent = `События на ${formattedDate}`;
                    tooltip.appendChild(tooltipHeader);
                    
                    // Добавляем список событий
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
                    
                    // Добавляем всплывающую подсказку к ячейке
                    dateCell.appendChild(tooltip);
                    
                    // Добавляем обработчики событий для показа/скрытия подсказки с адаптивным позиционированием
                    dateCell.addEventListener('mouseenter', function() {
                        // Показываем сначала невидимо, чтобы вычислить размеры
                        tooltip.style.visibility = 'hidden';
                        tooltip.style.display = 'block';
                        
                        // Получаем размеры и позиции
                        const tooltipRect = tooltip.getBoundingClientRect();
                        const cellRect = dateCell.getBoundingClientRect();
                        const calendarRect = document.getElementById('calendar').getBoundingClientRect();
                        const viewportHeight = window.innerHeight;
                        const viewportWidth = window.innerWidth;
                        
                        // Для дат в нижней половине календаря приоритетно показываем тултип сверху
                        const isInLowerHalf = cellRect.top > calendarRect.top + (calendarRect.height / 2);
                        
                        // Выбираем вертикальное положение (сверху или снизу)
                        let position = 'bottom';
                        if (isInLowerHalf || (viewportHeight - cellRect.bottom < tooltipRect.height && cellRect.top > tooltipRect.height)) {
                            position = 'top';
                        }
                        
                        // Выбираем горизонтальное положение (по центру, справа или слева)
                        let alignment = 'center';
                        if (cellRect.left + (tooltipRect.width / 2) > viewportWidth) {
                            alignment = 'right';
                        } else if (cellRect.left - (tooltipRect.width / 2) < 0) {
                            alignment = 'left';
                        }
                        
                        // Очищаем предыдущие классы позиционирования
                        tooltip.classList.remove('position-top', 'position-bottom', 'align-left', 'align-center', 'align-right');
                        
                        // Добавляем нужные классы
                        tooltip.classList.add(`position-${position}`, `align-${alignment}`);
                        
                        // Делаем подсказку видимой после настройки позиции
                        tooltip.style.visibility = 'visible';
                    });
                    
                    dateCell.addEventListener('mouseleave', function() {
                        tooltip.style.display = 'none';
                    });
                }
            }
        });
    }
    
    // При изменении размера окна обновляем всплывающие подсказки
    window.addEventListener('resize', function() {
        // Удаляем старые подсказки и создаем новые
        setTimeout(() => {
            document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
            addAsterisksToEvents(calendar);
            addTooltipsToCalendarDays(calendar);
        }, 100);
    });
    
    // Настройка кнопок навигации календаря
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const currentMonthEl = document.getElementById('currentMonth');
    
    if (prevMonthBtn && nextMonthBtn && currentMonthEl) {
        // Переход на предыдущий месяц
        prevMonthBtn.addEventListener('click', function() {
            calendar.prev();
            updateMonthDisplay();
            
            // Обновляем подсказки при смене месяца
            setTimeout(() => {
                document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
                addAsterisksToEvents(calendar);
                addTooltipsToCalendarDays(calendar);
            }, 100);
        });
        
        // Переход на следующий месяц
        nextMonthBtn.addEventListener('click', function() {
            calendar.next();
            updateMonthDisplay();
            
            // Обновляем подсказки при смене месяца
            setTimeout(() => {
                document.querySelectorAll('.day-tooltip').forEach(tooltip => tooltip.remove());
                addAsterisksToEvents(calendar);
                addTooltipsToCalendarDays(calendar);
            }, 100);
        });
        
        /**
         * Функция для обновления заголовка с названием месяца и годом
         */
        function updateMonthDisplay() {
            const date = calendar.getDate();
            const locale = 'ru';
            
            // Форматирование месяца и года
            const monthName = date.toLocaleString(locale, { month: 'long' });
            const year = date.getFullYear();
            
            // Установка заголовка с учетом склонения в русском языке
            let formattedMonth = monthName.charAt(0).toUpperCase() + monthName.slice(1);
            currentMonthEl.textContent = `${formattedMonth} ${year}`;
        }
        
        // Инициализация заголовка при загрузке
        updateMonthDisplay();
    }
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