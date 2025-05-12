<?php
$page_styles = '<link rel="stylesheet" href="assets/css/template.css">';
$page_scripts = '<script src="assets/js/template.js"></script>';

ob_start();
?>

<!-- BREADCRUMB -->
<div class="custom-breadcrumb">
    <span>Главная страница</span> <span class="breadcrumb-separator">/</span> <span>Корпоративные документы</span>
        </div>
        
<!-- ЦЕНТРАЛЬНЫЙ БЛОК -->
<div class="content">
    <h2>Тестовый текст</h2>
    <table class="test-table">
        <tbody>
            <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>
            <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td></tr>
            <tr><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td></tr>
            <tr><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr>
        </tbody>
    </table>
    <a href="media/blank.pdf" class="file-row">blank.pdf</a>

    <!-- SPOILER BLOCKS -->
    <div class="spoiler">
        <div class="spoiler-title"><div class="spoiler-toggle show-icon"></div>ТЕСТ</div>
        <div class="spoiler-content" style="display: none;">
            <div class="spoiler">
                <div class="spoiler-title"><div class="spoiler-toggle show-icon"></div>ТЕСТ</div>
                <div class="spoiler-content" style="display: none;">
                    <div class="spoiler">
                        <div class="spoiler-title"><div class="spoiler-toggle show-icon"></div>ТЕСТ</div>
                        <div class="spoiler-content" style="display: none;">
                            ТЕСТ
                    </div>
                    </div>
                </div>
            </div>
            <div class="spoiler">
                <div class="spoiler-title"><div class="spoiler-toggle show-icon"></div>ТЕСТ</div>
                <div class="spoiler-content" style="display: none;">
                    ТЕСТ
                </div>
            </div>
        </div>
    </div>

    <!-- TEST BUTTONS -->
    <div class="test-buttons">
        <button class="test-btn" data-img="assets/img/bg-child.jpg">ТЕСТ1</button>
        <button class="test-btn" data-img="assets/img/bg-employer.jpg">ТЕСТ2</button>
        <button class="test-btn" data-img="assets/img/bg-enrollee.jpg">ТЕСТ3</button>
        <button class="test-btn" data-img="assets/img/bg-graduate.jpg">ТЕСТ4</button>
        <button class="test-btn" data-img="assets/img/bg-senior-teaching.jpg">ТЕСТ5</button>
        <button class="test-btn" data-img="assets/img/bg-teaching.jpg">ТЕСТ6</button>
    </div>
    <div id="test-image-block" style="width:100%; min-height:320px; display:none; margin-bottom:24px;"></div>
    <iframe src="media/blank.pdf" width="100%" height="1500" style="border:1px solid #d0d7e2; margin-top:0; border-radius:8px; background:#fff;"></iframe>
</div>

<div style="height: 1000px;"></div>

<?php

$content = ob_get_clean();
 