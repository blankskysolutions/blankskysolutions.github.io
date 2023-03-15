<?php
include "connection.php";
session_start();
if ( !empty($_POST)) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = mysqli_query( $conn,"SELECT * FROM login WHERE (email='$email' and password='$password')" );
    if ($check) {
        
        if (mysqli_num_rows($check)>0) {

            $user = mysqli_fetch_assoc( $check );
            $_SESSION['user'] = $user;
            
            header("Location:admin.php");
        }
        else{
            echo "<script>alert('Record Not Found')</script>";
            header("Location:login.php");
        }
        
    }
    
}
?>