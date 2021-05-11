<?php
/**
 * Контроллер главной страницы
 * 
 */


//подключение моделей
include_once '../models/CategoriesModel.php';

function testAction () {
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * 
 */
function indexAction($smarty){
    
    $rsCategories = getAllMainCatsWithChildren();
    
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}