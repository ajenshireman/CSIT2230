<?php
require_once 'includes/global.php';

$error = '';
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

if ( empty($username) || empty($password) ) {
    $error = 'Please enter a username and a password';
} else {
    if ( $userTools->login($username, $password) ) {
        // login successful
    } else {
        $error = 'Incorrect username or password. Please try again';
    }
}

echo $error;
?>