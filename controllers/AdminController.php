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
        $rsCategories = getAllMainCategories();
        //d($rsCategories);   
        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('pageTitle', 'Управление сайтом');
        
        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'admin');
        loadTemplate($smarty, 'adminFooter');   
}

function addnewcatAction() {

    $catName = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    $res = insertCat($catName, $catParentId);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка добавления категории';
    }
    echo json_encode($resData);
    return;
}

