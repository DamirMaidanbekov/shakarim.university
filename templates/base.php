<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakarim University</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    
    <!-- Стили для каждой страницы наследующий этот шаблон -->
    <?php if (!empty($page_styles)) echo $page_styles; ?>

    <!-- FullCalendar dependencies -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/ru.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <?= $content ?>
    </main>

    <?php include 'footer.php'; ?>

    <div class="mobile-menu-backdrop"></div>

    <!-- Base scripts -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/footer.js"></script>
    
    <!-- Scripts для каждой страницы наследующий этот шаблон -->
    <?php if (!empty($page_scripts)) echo $page_scripts; ?>
    
</body>
</html>
