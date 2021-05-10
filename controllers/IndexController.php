<?php
/**
 * Контроллер главной страницы
 * 
 */
function testAction () {
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * 
 * 
 */

function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'index');
}