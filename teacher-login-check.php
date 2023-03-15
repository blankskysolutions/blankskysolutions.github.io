<?php
include "connection.php";
session_start();
if ( !empty($_POST)) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $class = $_POST['class'];
    $check = mysqli_query( $conn,"SELECT * FROM teacher_login WHERE email='$email' and password='$password' and class='$class'");
    if ($check) {
        
        if (mysqli_num_rows($check)>0) {
            echo "<script>alert('Successfully logged in!')</script>";

            $teacher = mysqli_fetch_assoc( $check );
            $_SESSION['teacher'] = $teacher;
            
            header("Location: teacher.php");
        }
        else{
            echo "<script>alert('Record Not Found')</script>";
            // header("Refresh: 2; url= teacher-login.php");
        }
        
    }
    else{
            echo "<script>alert('Wrong email/password!')</script>";

        header("Refresh: 2; url=teacher-login.php");
    }
    
}
?>