<?php
require_once 'includes/global.php';

$enteredPassword = mysql_real_escape_string($_POST['password']);
$result = array(
    'success' => 'false',
    'message' => ''
);

// Make sure the fields have been filled out
if ( empty($enteredPassword) ) {
    $result['success'] = 'false';
    $result['message'] = 'You must enter your password to delete your account.';
    echo json_encode($result);
    return;
}

// Get the user's pw from the db and compare to the entered password
if ( $userTools->verifyUser ($user, $enteredPassword) ) {
    $userID = $user->getUserID();
    if ( $db->query("delete from user where id = '$userID' limit 1") ) {
        $result['success'] = 'true';
        $result['message'] = 'Your account has been deleted.';
        echo json_encode($result);
        $userTools->logout();
        return;
    } else {
        $result['success'] = 'false';
        $result['message'] = 'There was an error deleting your account.';
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
