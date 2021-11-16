<?php

require_once("koneksi.php");
if (!empty($_POST["save_record"])){
    $pdo_statement = $pdo_conn->prepare(
        "update user set nama='". $_POST['nama']."', username='".$_POST['username']."', password='".$_POST['password']."', gender='".$_POST['gender']."'"
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:user.php');
    }
}

?>