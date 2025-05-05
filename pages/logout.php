<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)
    {
        if(isset($POST['lougout']))
        {
            $_SESSION['loggedin'] = false;
            $_SESSION['username'] = '';
            $_SESSION['password'] = '';
            session_unset();
            session_destroy();
        }

    }
?>
