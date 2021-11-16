<?php
$connectionString = 'mysql:host=127.0.0.1;dbname=db_fashiondesign';
try {
    $pdo_conn = new PDO($connectionString, 'root', '');
    $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
}
