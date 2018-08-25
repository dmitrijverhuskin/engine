<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 24.08.2018
 * Time: 22:14
 */
ini_set('displey errors', 1);
error_reporting(E_ALL);

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}