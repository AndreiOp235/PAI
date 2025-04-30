<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$isLoggedIn = true; // For testing purposes, set to false to simulate a logged-out state
?>