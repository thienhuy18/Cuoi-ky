<?php 
    session_start();
    session_destroy();
    $_SESSION = array();

    echo "<script>alert('Log out successfully, redirecting to homepage.')</script>";
    header('location:index.html')
?>