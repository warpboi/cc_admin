<?php
if(!empty($_POST["save_record"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO user (nama, username, password, gender) VALUES (:nama,:username,:password,:gender)";
	$stmt = $pdo_conn->prepare($sql);
	$result = $stmt->execute( array(':nama'=>$_POST['nama'],':username'=>$_POST['username'], ':password'=>$_POST['password'], ':gender'=>$_POST['gender']) );
	if (!empty($result) ){
        header('location:user.php');
      }else{
          echo'Gagal menambahkan user';
      }
}
?>