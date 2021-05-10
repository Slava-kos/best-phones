<?php

//определяется с каким контроллером будет проводиться работа
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Подключаемый php файл (Контроллер) = ' . $controllerName . '<br />';

//определение функции с которой будет производиться работа
$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';

echo 'функция формирующая страницу (Экшн) = ' . $actionName . '<br />';