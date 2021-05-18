<?php
session_start(); // стартуем сессию

// если в сессии нет массива корзины то создаем его
if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();    
}

include_once '../config/config.php';            //Инициализация настроек
include_once '../config/db.php';
include_once '../library/mainFunctions.php';    //Основный функции

//определяется с каким контроллером будет проводиться работа
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определение функции с которой будет производиться работа
$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';

// инициализируем переменную шаблонизатора количества элементов в корзине
$smarty->assign('cartCntItems', count($_SESSION['cart'])); 

loadPage($smarty, $controllerName, $actionName);