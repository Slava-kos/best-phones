<?php
include_once '../config/db.php';
/**
 * Модель для таблицы категорий (categories)
 * 
 */


/**
 *Получить дочернии категории для категории $catId
 *
 *@param integer $catId ID категории 
 *rs - record set 
 */

function getChildrenForCat($catId)
{
   global $db;
    $sql = "Select *
            FROM categories
            WHERE 
            parent_id = '{$catId}'";
    $rs = mysqli_query($db,$sql);
    
    return createSmartyRsArray($rs);
    
}


/**
 * получить главные категории с привязками дочерних
 * @global type $db
 * @return array массив категорий
 */
function getAllMainCatsWithChildren(){
    global $db;
    $sql = 'Select *
            FROM categories
            WHERE parent_id = 0';
    
    $rs = mysqli_query($db,$sql);
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        
        $rsChildren = getChildrenForCat($row['id']);
        
        if($rsChildren) {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}