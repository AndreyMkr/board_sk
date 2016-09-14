<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.07.2016
 * Time: 0:44
 */


if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['type'])){
    $type = clearData($mysql_link, $_POST['type']);
    $row_name = array_keys($_POST);
    $row_name = clearData($mysql_link, $row_name[1]);
    $id = clearData($mysql_link, $_POST[$row_name], 'i');

    if($type === 'region' or $type === 'city'){
        //todo поправить молдову
        $places = getPlaces($mysql_link, $type, $row_name, $id);
        echo json_encode($places);
    }
}