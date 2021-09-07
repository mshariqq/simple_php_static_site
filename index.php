<?php
/**
 * Welcome
 * @author: MD SHARIQQ AHMED
 * @package: Shariqq Server Store
 * @version: 1.0
 */

// define dir
define("__ROOT__", $_SERVER['DOCUMENT_ROOT']);
define("__APP__", __ROOT__ . "/");
define("__VIEWS__", __APP__ . "views/");
define("__URL__", "http://localhost:8080/");


// define environment for errors level
// production == no errors
// development == full errors
define("ENVIRONMENT", "development");

// errors condition
if(ENVIRONMENT == "production"){
    // ini_set('display_startup_errors', 0);
    // ini_set('display_errors', 0);
    // error_reporting(-1);
    // show no errors
    
}elseif(ENVIRONMENT == "development"){
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    $_ENV['current_error'] = "Debugging Purpose :: ";
}

// set timezone
date_default_timezone_set("Asia/Kolkata");

// route function
function getRoute($path){
    $surl = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if($surl == __URL__ . $path){
        return true;
    }else{
        return false;
    }
}

function getHeader($title = null, $des = null, $kw = null){
    define('__TITLE__', $title);
    define('__DESCRIPTION__', $des);
    define('__KEYWORDS__', $kw);

    return require __VIEWS__ . "header.php";
}

function getFooter(){
    return require __VIEWS__ . "footer.php";
}

function base_url()
{
    return __URL__;
}
// includes / AUTOLOADS
require __DIR__ . "/routes.php";