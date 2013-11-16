<?php
$currentPage = 'register';
require_once 'includes/global.php';

// Initialize variables used in the form
$username = '';
$password = '';
$password_confirm = '';
$email = '';

// Retreive the post variables
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$password_confirm = mysql_real_escape_string($_POST['password_confirm']);
$email = mysql_real_escape_string($_POST['email']);

// Initialize variables for form validation
$success = true;

// Validate that the form was filled out correctly
// Make sure all fields are filed out
if ( empty($username) || empty($password) || empty($password_confirm) || empty($email) ) {
    $error = 'Pease fill out all fields';
    $success = false;
}
// Check to see if the username already exists
if ( $userTools->checkUsernameExists($username) ) {
    $error = 'Username already in use.';
    $success = false;
}
// check to see if the passwords match
else if ( $password != $password_confirm ) {
    $error = 'Passwords do not match.';
    $success = false;
}

if ( $success ) {
    // Package the data for saving in a new user object
    $data = array(
	'username' => $username,
	'password' => password_hash($password, PASSWORD_BCRYPT),
	'email'    => $email
    );
    
    // Create a new user object
    $newUser = new User($data);
    
    // Save the new user to the database
    $newUser->save(true);
    
    // Log them in
    $userTools->login($username, $password);
}

echo $error;
    
?>
