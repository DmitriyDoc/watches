<?php

function debug($arr = null, $die =1){
    echo 'Debug:<br>';
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if ($die) die;
}

function redirect($http = false) {
    if($http) {
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}