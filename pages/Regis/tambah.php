<?php
if (!empty($_POST["add_record"])) {
    require_once("Koneksi.php");
    $sql = "INSERT INTO regist (nama, username, password, gender,) VALUES (:name,:username,:password,:gender)";
    $stmt = $pdo_conn->prepare($sql);
    $result = $stmt->execute(array(':nama' => $_POST['name'], ':username' => $_POST['username'], ':password' => $_POST['password'], ':gender' => $_POST['gender']));
}
