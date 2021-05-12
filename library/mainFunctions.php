<?php
/*
 * 
 * Основный функции
 * 
 * 
 * 
 */

/**
 * Формирование запрашиваемой страницы
 * @param type $controllerName  название контроллера
 * @param type $actionName название функции обработки страницы 
 */
function loadPage ($smarty, $controllerName, $actionName = 'index') {
    
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $function = $actionName . 'Action'; 
    $function($smarty);
}

/**
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название шаблона файла
 */
function loadTemplate($smarty, $templateName)
{   
    $smarty->display($templateName . TemplatePostfix);
}


/**
 * Функция отладки, выводит значение переменной value
 * @param type $value переменная для выводы ее на страницц
 * 
 * 
 */
function d($value = null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 * 
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($rs)
{
    if (! $rs) return false;
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}