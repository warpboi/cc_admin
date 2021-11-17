<?php

function url()
{
    if (
        isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    return $protocol  . $_SERVER['HTTP_HOST'];
}

$baseurl = url();
if ($baseurl == 'http://localhost') {
    $baseurl = "http://localhost/cc_admin";
}
define('base_url', $baseurl);


if ($baseurl == 'http://localhost/cc_admin' || $baseurl == 'http://fashion-design.test') {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_fashiondesign');
} else {

    define('DB_HOST', 'botkgkqmgyoiovycsvln-mysql.services.clever-cloud.com');
    define('DB_USER', 'uj1qnl4rlq8uzsk2');
    define('DB_PASS', 'k8BXQj9UHy2OnC8B4GKy');
    define('DB_NAME', 'botkgkqmgyoiovycsvln');
}

session_start();
