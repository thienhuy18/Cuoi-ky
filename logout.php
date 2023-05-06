<?php 
    session_start();
    session_destroy();
    $_SESSION = array();

    echo "<script>alert('Log out successfully, redirecting to homepage.')</script>";
    header('refresh:1;url=/cuoiki/index.html')
?>