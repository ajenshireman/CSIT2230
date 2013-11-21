<?php
require_once 'includes/global.php';

$error = '';
$currentPassword = mysql_real_escape_string($_POST['currentPassword']);
$newPassword = mysql_real_escape_string($_POST['newPassword']);
$confirmPassword = mysql_real_escape_string($_POST['confirmPassword']);

//echo $confirmPassword;
//return;

// Make sure the fields have been filled out
if ( empty($currentPassword) ) {
    echo 'Please enter your password.';
    return;
} else if ( empty($newPassword) ) {
    echo 'Please enter a new password.';
    return;
}

// Get the user's pw from the db and compare to the entered password
if ( $userTools->verifyUser ($user, $currentPassword) ) {
    if ( $newPassword == $confirmPassword ) {
        $user->setPassword(password_hash($newPassword, PASSWORD_BCRYPT));
        $user->save();
        $userTools->refreshUser($user);
        echo 'Your Password has been changed';
        return;
    } else {
        echo 'Passwords do not match.';
        return;
    }
} else {
    echo 'Incorrect password';
    return;
}
?>
