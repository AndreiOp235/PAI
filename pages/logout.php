<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['loggedin']))
    {
        $_SESSION['loggedin'] = false;
            $_SESSION['username'] = '';
            $_SESSION['password'] = '';
            session_unset();
            session_destroy();
            echo "<script>alert('Logout successful!');</script>";
            echo "<script>window.location.href = '../index.php';</script>";
            exit();
    }
    echo "<script>alert('Logout failed!');</script>";
?>
