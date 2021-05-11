<?php
include_once '../config/db.php';
/**
 * Модель для таблицы категорий (categories)
 * 
 */

function getAllMainCatsWithChildren(){
    global $db;
    $sql = 'Select *
            FROM categories
            WHERE parent_id = 0';
    $rs = mysqli_query($db,$sql);
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    return $smartyRs;
}