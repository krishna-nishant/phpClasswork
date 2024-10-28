<?php
session_start();
session_unset();
session_destroy();

// Redirect to login page
header("Location: 23_login.php");
exit;
?>