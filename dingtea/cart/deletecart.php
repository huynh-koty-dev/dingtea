<?php session_start();
if(isset($_GET['id_de'])){
	$id_de=$_GET['id_de'];
	unset($_SESSION['cart'][$id_de]);
}else{
	unset($_SESSION['cart']);
}
header('location:orderdetails.php');
 ?>