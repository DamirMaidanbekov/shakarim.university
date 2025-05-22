<?php
$page_styles = '<link rel="stylesheet" href="./assets/css/index.css">';
$page_scripts = '<script src="./assets/js/index.js"></script>';

ob_start();
?>

<!-- BREADCRUMB -->
<div class="custom-breadcrumb">
    <span>Главная страница</span> <span class="breadcrumb-separator">/</span> <span>Новости</span>
        </div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
  <div class="news-layout">
    <div class="news-main">
      <div class="news-grid">
        <div class="news-item news-item-large">
          <div class="news-img" style="background-image:url('assets/img/6c233af0a9cadd2a447268f170a3a4cf.jpeg')"></div>
          <div class="news-overlay"></div>
          <div class="news-content">
            <a href="shakarim-zhoghary-kolledzhi-ongirlik-chempionat-uzdikterining-qatarynda" class="news-title">ШӘКӘРІМ ЖОҒАРЫ КОЛЛЕДЖІ - ӨҢІРЛІК ЧЕМПИОНАТ ҮЗДІКТЕРІНІҢ ҚАТАРЫНДА</a>
            <div class="news-meta">21 май 2025</div>
          </div>
        </div>
        <div class="news-item news-item-small">
          <div class="news-img" style="background-image:url('assets/img/4e15b4033483600bdd34f88e62f79335.jpeg')"></div>
          <div class="news-overlay"></div>
          <div class="news-content">
            <a href="#" class="news-title">В НАО «Шәкәрім университет» проходит специализированная аккредитация</a>
            <div class="news-meta">20 май 2025</div>
          </div>
        </div>
        <div class="news-item news-item-small">
          <div class="news-img" style="background-image:url('assets/img/58bf27d74daf02ef0582e25b0d8758a7.jpeg')"></div>
          <div class="news-overlay"></div>
          <div class="news-content">
            <a href="#" class="news-title">КУЛЬТУРНОЕ ПОЗНАНИЕ – ПРЕЕМСТВЕННОСТЬ НАУКИ И ДУХОВНОСТИ</a>
            <div class="news-meta">19 май 2025</div>
          </div>
        </div>
      </div>
    </div>
    <aside class="news-sidebar">
      <div class="sidebar-block">
        <ul class="sidebar-categories">
          <li><a href="all-news"><div class="sidebar-title">Все новости</div></a></li>
          <li><a href="#">Наука</a></li>
          <li><a href="#">Звездные выпускники</a></li>
          <li><a href="#">Профсоюз</a></li>
          <li><a href="#">Молодежная политика</a></li>
          <li><a href="#">Образование</a></li>
          <li><a href="#">Новости</a></li>
          <li><a href="#">Поздравление</a></li>
          <li><a href="#">Объявление</a></li>
          <li><a href="#">СМИ о нас</a></li>
          <li><a href="#">Колледж</a></li>
          <li><a href="#">Выпускники</a></li>
          <li><a href="#">референдум</a></li>
          <li><a href="#">Соболезнование</a></li>
          <li><a href="#">Послание</a></li>
        </ul>
      </div>
    </aside>
  </div>
  
  <!-- БЛОК ВИДЕО -->
  <div class="video-section">
    <div class="section-header">
      <h2 class="section-title">Видео</h2>
      <div class="nav-buttons">
        <button type="button" class="nav-btn prev-btn" onclick="moveVideos('prev')">&#10094;</button>
        <button type="button" class="nav-btn next-btn" onclick="moveVideos('next')">&#10095;</button>
      </div>
    </div>
    
    <div class="video-carousel">
      <div class="video-track" id="videoTrack">
        <!-- Видео 1 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=ijHIUA5Hsd8" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/ijHIUA5Hsd8/maxresdefault.jpg" alt="Видео 1">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">"Шәкәрім" университетінің ректоры Думан Орынбековпен сұхбат.</h3>
          <div class="video-date">24 февр. 2024</div>
        </div>
        
        <!-- Видео 2 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=Go6w87JoWkk" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/Go6w87JoWkk/maxresdefault.jpg" alt="Видео 2">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">РЕКТОР ВСТРЕТИЛСЯ С АБИТУРИЕНТАМИ</h3>
          <div class="video-date">19 июл. 2023</div>
        </div>
        
        <!-- Видео 3 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=6QaiOBcrgP4" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/6QaiOBcrgP4/maxresdefault.jpg" alt="Видео 3">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">НЕДЕЛЯ НАУКИ В SHAKARIM UNIVERSITY</h3>
          <div class="video-date">18 апр. 2023</div>
        </div>
        
        <!-- Видео 4 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=yCGNv0nYs_c" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/yCGNv0nYs_c/maxresdefault.jpg" alt="Видео 4">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">Университет имени Шакарима организовал пресс-тур для журналистов</h3>
          <div class="video-date">30 мар. 2023</div>
        </div>
        
        <!-- Видео 5 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=eqnnHiDBIIA" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/eqnnHiDBIIA/maxresdefault.jpg" alt="Видео 5">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">КЕЛЕСІ ЖЫЛҒА СӘТТІЛІК: БАУЫРЖАН ЕРДЕМБЕКОВ</h3>
          <div class="video-date">30 дек. 2022</div>
        </div>
        
        <!-- Видео 6 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=QVE41FfNMA8" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/QVE41FfNMA8/maxresdefault.jpg" alt="Видео 6">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">«АВТОМАТИЗАЦИЯ И УПРАВЛЕНИЕ»: SHAKARIM UNIVERSITY</h3>
          <div class="video-date">11 нояб. 2022</div>
        </div>
        
        <!-- Видео 7 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=sVCzluQQRFk" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/sVCzluQQRFk/maxresdefault.jpg" alt="Видео 7">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">ЕЛ ТІРЕГІ – ҰЛЫЛАР МЕКЕНІНІҢ ЖАЛЫНДЫ ЖАСТАРЫ!</h3>
          <div class="video-date">3 нояб. 2022</div>
        </div>
        
        <!-- Видео 8 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=8BwPLFkZMDM" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/8BwPLFkZMDM/maxresdefault.jpg" alt="Видео 8">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">НОВЫЕ ТЕХНОЛОГИИ В ВУЗЕ</h3>
          <div class="video-date">3 нояб. 2022</div>
        </div>
        
        <!-- Видео 9 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=AJHLEN_9Em4" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/AJHLEN_9Em4/maxresdefault.jpg" alt="Видео 9">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">ШАМ: ФАРИЗАҒА</h3>
          <div class="video-date">10 нояб. 2022</div>
        </div>
        
        <!-- Видео 10 -->
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=Szggj2E5C8g" class="video-thumb" target="_blank">
            <img src="https://img.youtube.com/vi/Szggj2E5C8g/maxresdefault.jpg" alt="Видео 10">
            <div class="play-btn"></div>
          </a>
          <h3 class="video-title">МИНИСТР НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ В SHAKARIM UNIVERSITY</h3>
          <div class="video-date">22 окт. 2022</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

$content = ob_get_clean();
 