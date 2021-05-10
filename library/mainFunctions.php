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