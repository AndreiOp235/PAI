<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)
    {
        $_SESSION['loggedin'] = false;
            $_SESSION['username'] = '';
            $_SESSION['password'] = '';
            session_unset();
            session_destroy();
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
    }
?>
