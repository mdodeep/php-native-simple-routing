<?php

$default_index = 'dashboard'; // Variable declaration for the default index.
$notif = '';

if (isset($_GET['url'])) { // This function is to retrieve the 'url' parameter, which will be split into an array.
    $url = rtrim($_GET['url'], '/'); // This function is to cut or separate what is inputted in 'url' with the limiter being '/'.
    $url = filter_var($url, FILTER_SANITIZE_URL); // This function is to clean the inputted 'url'.
    $url = explode('/', $url); // This function is for converting strings into arrays.
}

if (isset($url[0])) {
    if (file_exists('app/page/' . $url[0] . '.php')) { // Search if there is a file that is the same as what is entered in the 'main index' in the url.
        if (isset($url[1])) { // Search if there is a 'method' after the 'main index'.
            $_GET['method'] = $url[1];
            $method = $_GET['method'];
            unset($url[1]);

            if (isset($url[2])) { // Search if there is a 'parameter' after 'method' and 'main index'
                $_GET['param'] = $url[2];
                $action = $_GET['param'];
                unset($url[2]);
            }
        }
        require_once 'app/page-function/' . $url[0] . '.php';
        require_once 'app/page/' . $url[0] . '.php';
        unset($url[0]);
    } else {
        require_once 'app/page-function/' . $default_index . '.php';
        require_once 'app/page/' . $default_index . '.php';
        unset($url[0]);
    }
} else { // If there is no 'main index' in the url, then this code will be executed.
    require_once 'app/page-function/' . $default_index . '.php';
    require_once 'app/page/' . $default_index . '.php';
}
