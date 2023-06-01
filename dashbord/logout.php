
<?php
include '../incloud/conn.php';
include '../incloud/file.php';

// Start the session
session_start();


// Destroy the session.
session_destroy();



header('location:../login/login.php');
exit;
?>