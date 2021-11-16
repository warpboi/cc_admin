<?php
require_once("koneksi.php");
$stmt=$pdo_conn->prepare("delete from user where id_user='" . $_GET['id_user']."'");
$stmt->execute();
header('location:user.php');
?>