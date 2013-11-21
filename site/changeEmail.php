<?php
require_once 'includes/global.php';

$error = '';
$email = mysql_real_escape_string($_POST['email']);
$enteredPassword = mysql_real_escape_string($_POST['password']);

// Make sure the fields have been filled out
if ( empty($email) ) {
    echo 'Please enter a valid e-mail address.';
    return;
} else if ( empty($enteredPassword) ) {
    echo 'Please enter your password.';
    return;
}

// Get the user's pw from the db and compare to the entered password
if ( $userTools->verifyUser ($user, $enteredPassword) ) {
    //echo 'Password Correct';
    $user->setEmail($email);
    $user->save();
    $userTools->refreshUser($user);
    echo 'Your Password has been changed';
    return;
} else {
    echo 'Incorrect password';
    return;
}
?>
