<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['username'] = $username;
	header("location:index.php");
}else{
	header("location:loginv2.php?idiot=yang_bener_goblok");
}
?>