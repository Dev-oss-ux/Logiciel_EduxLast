<?php
session_start();

// Unset the specific session variable 'user'
unset($_SESSION['user']);

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: login.php");
exit();
?>
