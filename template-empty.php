<?php
$page_styles = '<link rel="stylesheet" href="assets/css/history-university.css">';
$page_scripts = '<script src="assets/js/history-university.js"></script>';

ob_start();
?>

<!-- BREADCRUMB -->
<div class="custom-breadcrumb">
    <span>Главная страница</span> <span class="breadcrumb-separator">/</span> <span>template-empty</span>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
</div>

<?php

$content = ob_get_clean();
 