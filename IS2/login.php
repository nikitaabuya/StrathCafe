<?php
session_start();
session_destroy();
// Redirect to the login page:
//header('Location: index.html');
header( "refresh:2; url=home.php" );

echo 'Log in successful'
?>