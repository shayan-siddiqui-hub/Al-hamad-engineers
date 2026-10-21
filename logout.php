
<?php
session_start();

// Remove all session variables
$_SESSION = [];

// Destroy the current session
session_destroy();

// Redirect user to the login page
header("Location: login.php");
exit();
?>
