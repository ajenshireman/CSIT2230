<?php
require_once 'includes/global.php';

$result = array(
    'success' => 'false',
    'message' => ''
);
$currentPassword = mysql_real_escape_string($_POST['currentPassword']);
$newPassword = mysql_real_escape_string($_POST['newPassword']);
$confirmPassword = mysql_real_escape_string($_POST['confirmPassword']);

// Make sure the fields have been filled out
if ( empty($currentPassword) ) {
    $result['success'] = 'false';
    $result['message'] = 'Please enter your password.';
    echo json_encode($result);
    return;
} else if ( empty($newPassword) ) {
    $result['success'] = 'false';
    $result['message'] = 'Please enter a new password.';
    return;
}

// Get the user's pw from the db and compare to the entered password
if ( $userTools->verifyUser ($user, $currentPassword) ) {
    if ( $newPassword == $confirmPassword ) {
        $user->setPassword(password_hash($newPassword, PASSWORD_BCRYPT));
        $user->save();
        $userTools->refreshUser($user);
        $result['success'] = 'true';
        $result['message'] = 'Your Password has been changed';
        echo json_encode($result);
        return;
    } else {
        $result['success'] = 'false';
        $result['message'] = 'Passwords do not match.';
        echo json_encode($result);
        return;
    }
} else {
    $result['success'] = 'false';
    $result['message'] = 'Incorrect password';
    echo json_encode($result);
    return;
}
?>
