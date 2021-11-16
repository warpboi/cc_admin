<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();


if (isset($_POST["add_record"])) {
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO user (nama, username, password, gender) VALUES (:name,:username,:password,:gender)";
    $DB->query($query);
    $DB->bind('name', $name);
    $DB->bind('username', $uname);
    $DB->bind('password', $password);
    $DB->bind('gender', $gender);
    $DB->execute();
    if ($DB->rowCount() > 0) {
        $_SESSION['uname'] = $uname;
        header('Location: ' . base_url);
    }
    // $sql = "INSERT INTO regist (nama, username, password, gender,) VALUES (:name,:username,:password,:gender)";
    // $stmt = $pdo_conn->prepare($sql);
    // $result = $stmt->execute(array(':nama' => $_POST['name'], ':username' => $_POST['username'], ':password' => $_POST['password'], ':gender' => $_POST['gender']));
}
