<?php
session_start();
session_destroy();
// Redirect to the login page:
//header('Location: index.html');
header( "refresh:2; url=index.php" );

echo 'Logout successful'
?>