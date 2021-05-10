<?php
/*
 * 
 * файл настроек 
 * 
 */
//оптимизация, констатанты для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');




//> используется щаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");
//<

//> инициазиация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/lexer');

$smarty->assign('teplateWebPath', TemplateWebPath);
//<