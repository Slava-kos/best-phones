<?php

include_once '../config/config.php';            //Инициализация настроек
include_once '../config/db.php';
include_once '../library/mainFunctions.php';    //Основный функции

//определяется с каким контроллером будет проводиться работа
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определение функции с которой будет производиться работа
$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);