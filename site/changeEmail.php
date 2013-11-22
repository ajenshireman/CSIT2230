<?php
require_once 'includes/global.php';

$email = mysql_real_escape_string($_POST['email']);
$enteredPassword = mysql_real_escape_string($_POST['password']);
$result = array(
    'success' => 'false',
    'message' => ''
);

// Make sure the fields have been filled out
if ( empty($email) ) {
    $result['success'] = 'false';
    $result['message'] = 'Please enter a valid e-mail address.';
    echo json_encode($result);
    return;
} else if ( empty($enteredPassword) ) {
    $result['success'] = 'false';
    $result['message'] = 'Please enter your password.';
    echo json_encode($result);
    return;
}

// Get the user's pw from the db and compare to the entered password
if ( $userTools->verifyUser ($user, $enteredPassword) ) {
    $user->setEmail($email);
    $user->save();
    $userTools->refreshUser($user);
    $result['success'] = 'true';
    $result['message'] = 'Your e-mail has been changed';
    echo json_encode($result);
    return;
} else {
    $result['success'] = 'false';
    $result['message'] = 'Incorrect password';
    echo json_encode($result);
    return;
}
?>
