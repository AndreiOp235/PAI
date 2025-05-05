<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $_SESSION['username']='Andrei90';
    $_SESSION['password']='catETC';
}

$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$isLoggedIn = true; // For testing purposes, set to false to simulate a logged-out state

if($isLoggedIn===true)
{
    $con = mysqli_connect("localhost", "root", "");
                if ($con) 
                { 
                    mysqli_select_db($con, "bazapai");

                    $rez = mysqli_query($con, "SELECT * FROM userKarma WHERE username LIKE '" . $_SESSION['username'] . "'");
                    $inreg = mysqli_fetch_array($rez); 
                    $_SESSION['karma']=$inreg['karma'];
                }
}



?>