<?php
include "connection.php";
session_start();
if ( !empty($_POST)) {
    
    $std_email = $_POST['std_email'];
    $std_password = $_POST['std_password'];
    $check = mysqli_query( $conn,"SELECT * FROM std_login WHERE email='$std_email' and password='$std_password'" );
    if ($check) {
        
        if (mysqli_num_rows($check)>0) {

            $student = mysqli_fetch_assoc( $check );
            $_SESSION['student'] = $student;
            
            header("Location:student.php");
        }
        else{
            echo "<script>alert('Record Not Found')</script>";
            header("Location:std-login.php");
        }
        
    }
    else{
        header("Location: std-login.php");
    }
    
}
?>