<?php
$page_styles = '<link rel="stylesheet" href="assets/css/template-structure.css">';
$page_scripts = '<script src="assets/js/template-structure.js"></script>';

ob_start();
?>

<!-- BREADCRUMB -->
<div class="custom-breadcrumb">
    <span>Главная страница</span> <span class="breadcrumb-separator">/</span> <span>Структура университета</span> <span class="breadcrumb-separator">/</span> <span>Тест</span>
</div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <h2>Тест Тест Тест</h2>
    
    <div class="department-container">
        <!-- Левая колонка - Руководитель -->
        <div class="department-head">
            <div class="head-photo" style="text-align: center; margin-bottom: 15px;">
                <img src="assets/img/template.png" alt="Тест" style="width: 180px; height: 240px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="head-info" style="text-align: center;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 5px;">Тест Тест Тест</h3>
                <p style="font-size: 16px; color: #666; margin-bottom: 20px;">Тест Тест</p>
            </div>
            <div class="contact-info" style="background: #fff; padding: 15px; border-radius: 8px;">
                <div class="contact-item" style="margin-bottom: 10px;">
                    <strong>Тест:</strong> ТЕСТ ТЕСТ
                </div>
                <div class="contact-item" style="margin-bottom: 10px;">
                    <strong>Тест:</strong> ТЕСТ@ТЕСТ.ТЕСТ
                </div>
                <div class="contact-item">
                    <strong>Тест:</strong> ТЕСТ-ТЕСТ-ТЕСТ
                </div>
            </div>
        </div>
        
        <!-- Правая колонка - Информация и сотрудники -->
        <div class="department-info">
            <!-- Информация об отделе -->
            <div class="info-block" style="background: #f7f9fc; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 15px;">Тест Тест Тест:</h3>
                <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 0;">
                    <li>Тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест;</li>
                    <li>Тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест;</li>
                    <li>Тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест.</li>
                </ul>
            </div>
            
            <!-- Сотрудники -->
            <div class="staff-block" style="background: #f7f9fc; padding: 20px; border-radius: 8px;">
                <h3 style="font-size: 18px; color: #333; margin-bottom: 15px;">Тест</h3>
                <div class="staff-grid" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <!-- Сотрудник 1 -->
                    <div class="staff-card" style="width: 48%; display: flex; margin-bottom: 20px;">
                        <div class="staff-photo" style="margin-right: 15px;">
                            <img src="assets/img/template.png" alt="Тест" style="width: 100px; height: 133px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <div class="staff-info">
                            <h4 style="font-size: 16px; color: #333; margin-bottom: 5px;">Тест Тест Тест</h4>
                            <p style="font-size: 14px; color: #666;">Тест Тест Тест</p>
                        </div>
                    </div>
                    
                    <!-- Сотрудник 2 -->
                    <div class="staff-card" style="width: 48%; display: flex; margin-bottom: 20px;">
                        <div class="staff-photo" style="margin-right: 15px;">
                            <img src="assets/img/template.png" alt="Тест" style="width: 100px; height: 133px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <div class="staff-info">
                            <h4 style="font-size: 16px; color: #333; margin-bottom: 5px;">Тест Тест Тест</h4>
                            <p style="font-size: 14px; color: #666;">Тест Тест Тест</p>
                        </div>
                    </div>
                    
                    <!-- Сотрудник 3 -->
                    <div class="staff-card" style="width: 48%; display: flex; margin-bottom: 20px;">
                        <div class="staff-photo" style="margin-right: 15px;">
                            <img src="assets/img/template.png" alt="Тест" style="width: 100px; height: 133px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <div class="staff-info">
                            <h4 style="font-size: 16px; color: #333; margin-bottom: 5px;">Тест Тест Тест</h4>
                            <p style="font-size: 14px; color: #666;">Тест Тест Тест</p>
                        </div>
                    </div>
                    
                    <!-- Сотрудник 4 -->
                    <div class="staff-card" style="width: 48%; display: flex; margin-bottom: 20px;">
                        <div class="staff-photo" style="margin-right: 15px;">
                            <img src="assets/img/template.png" alt="Тест" style="width: 100px; height: 133px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <div class="staff-info">
                            <h4 style="font-size: 16px; color: #333; margin-bottom: 5px;">Тест Тест Тест</h4>
                            <p style="font-size: 14px; color: #666;">Тест Тест Тест</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: 1000px;"></div>

<?php

$content = ob_get_clean();
 