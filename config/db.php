<?php


/**
 * Инициализация подключение к БД
 * 
 */

$dblocation = "127.0.0.1";
$dbname = "best-phones";
$dbuser = "root";
$dbpasswd = "";

//соединяемся с БД
$db = mysqli_connect($dblocation,$dbuser,$dbpasswd);

if(! $db){
    echo "Ошибка доступа к MySql";
    exit();
}

//устанавливаем кодировку по умолчанию для текущего соединения
mysqli_set_charset($db,'utf8');

if( ! mysqli_select_db($db, $dbname) ){
 echo "Ошибка доступа к базе данных: {$dbname}";   
}