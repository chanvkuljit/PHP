<?php
// Starting the session
session_start();

// Storing session data
$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john_doe@example.com';

echo 'Session is created and data is set.';
?>
