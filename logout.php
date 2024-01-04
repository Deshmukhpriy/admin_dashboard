<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
      
        echo "<script>";
        echo "alert('Logout Successfully!..');";
        echo 'window.location.href="index.php";';
        echo "</script>";
        
    }
?>