<?php

function debug($arr = null, $die =1){
    echo 'Debug:<br>';
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if ($die) die;
}