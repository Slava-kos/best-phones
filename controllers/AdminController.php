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
    global $db;
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

function categoryAction($smarty) {
    $rsCategories = getAllCategories();
    $rsMainCategories = getAllMainCategories();
    //d($rsMainCategories);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsMainCategories', $rsMainCategories);
    $smarty->assign('pageTitle', 'Управление сайтом - Категории');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
    loadTemplate($smarty, 'adminFooter');
}

function updatecategoryAction() {
    global $db;
    $itemId =  $_POST['itemId'];
    $parenId = $_POST['parentId'];
    $newName = $_POST['newName'];

    $res = updateCategoryData($itemId, $parenId, $newName);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Категория обновлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных категории';
    }
    
    echo json_encode($resData);
    return;
}
function productsAction($smarty) {
    $rsCategories = getAllCategories();
    $rsProducts = getProducts();

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('pageTitle', 'Управление сайтом - продукты');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminProducts');
    loadTemplate($smarty, 'adminFooter');
}
//добавление продукта в БД
function addproductAction() {
    global $db;
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];
    
    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
    echo json_encode($resData);
    return;
}

function updateproductAction(){
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemStatus = $_POST['itemStatus'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];

    $res = updateProduct($itemId, $itemName, $itemPrice, 
                         $itemStatus, $itemDesc, $itemCat);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
    echo json_encode($resData);
    return;
}

function uploadAction(){
    $itemId = $_POST['itemId'];
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    $newFileName = $itemId . '.' . $ext;
    
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){
      $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName); 
      if($res){
          $res = updateProductImage($itemId, $newFileName);
          if ($res){
              redirect('/admin/products/');
          }
      }
      
    }
     else {
            echo "Ошибка загрузки ";
    }
}

function ordersAction($smarty){
    
    $rsOrders = getOrders();
    
    $smarty->assign('rsOrders', $rsOrders);
    $smarty->assign('pageTitle', 'Заказы');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminOrders');
    loadTemplate($smarty, 'adminFooter');
}

function setorderstatusAction(){
    $itemId = $_POST['itemId'];
    $status = $_POST['status'];

    $res = updateOrderStatus($itemId, $status);
    
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Статус был обновлен';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка обновления статуса';
    }
    echo json_encode($resData);
    return;
}


function setorderdatepaymentAction(){
    $itemId = $_POST['itemId'];
    $datePayment = $_POST['datePayment'];

    $res = updateOrderDatePayment($itemId, $datePayment);
    
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Статус был обновлен';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка установки статуса';
    }
    echo json_encode($resData);
    return;
}