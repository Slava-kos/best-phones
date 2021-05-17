<?php

/* 
 * Модель для таблицы продукции (products)
 * 
 */

/**
 * Получаем последние добавленные файлы
 * 
 * @param type $limit лимит товаров
 * @return type массив товаров
 */
function getLastProducts($limit = null)
{   global $db;
    $sql = "SELECT *
            FROM `products`
            ORDER BY `id` DESC";
    if($limit){
        $sql.= " LIMIT {$limit}";
    }
   
    $rs = mysqli_query($db,$sql);
    
    return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemId
 * 
 * @param integer $itemId ID категории
 * @return array массив продуктов 
 */
function getProductsByCat($itemId)
{   global $db;
   $itemId = intval($itemId);
   $sql = "SELECT * 
            FROM products
            WHERE category_id = '{$itemId}'";
   
   $rs = mysqli_query($db,$sql); 
   
   return createSmartyRsArray($rs);   
}

/**
 * Получить данные продукта по ID 
 * 
 * @param integer $itemId ID продукта
 * @return array массив данных продукта 
 */
function getProductById($itemId)
{  global $db;
   $itemId = intval($itemId);
   $sql = "SELECT * 
            FROM products
            WHERE id = '{$itemId}'";
   
   $rs = mysqli_query($db,$sql); 
   return mysqli_fetch_assoc($rs);   
}