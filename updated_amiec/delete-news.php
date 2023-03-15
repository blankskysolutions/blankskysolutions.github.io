<?php include 'connection.php';?>
<?php
session_start();
if ( !isset($_SESSION['user']) ) {
    header("Location:login.php");
}
?>
<?php 	
$id = $_GET['id'];

$del = "DELETE from news where id = '$id'";
$result = mysqli_query($conn, $del);
if($result){
	header("location: admin.php");
}else{
	echo" record not deleted";
}
?>