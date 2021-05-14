<?php

ini_set('display_errors', 0);
require_once (dirname(__FILE__,2). '\\src\\config\\config.php');

// echo $_SERVER['REQUEST_URI'];

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
//$uri = substr($uri, 1);
// $uri .= "\\public";
// echo $uri;
// echo substr($uri, 1);
if($uri == '/' || $uri == '' || $uri == "\\index.php"){
    $uri = "\\day_records.php";
}

require_once(CONTROLLER_PATH."\\{$uri}");