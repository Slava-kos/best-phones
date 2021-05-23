<?php

/**
 * Админ Контроллер
 *  url /admin
 */
/** Подключение моделей */
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/** Переименование переменных к путям шаблонов */
$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('teplateWebPath', TemplateAdminWebPath);

function indexAction($smarty)
{       
        $smarty->assign('pageTitle', 'Управление сайтом');
        
        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'admin');
        loadTemplate($smarty, 'adminFooter');   
}

