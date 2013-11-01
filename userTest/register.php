<?php
require_once 'includes/global.php';

// Initialize variables used in the form
$username = '';
$password = '';
$password_confirm = '';
$email = '';

// If the user pressed cancel, return them to the index
if ( isset($_POST['btnCancel']) ) {
    // Go to the index
    header('Location: ./index.php');
    die();
}

// Check to see if the form has been submitted
if ( isset($_POST['btnSubmit']) ) {
    // Retreive the post variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];
    
    // Initialize variables for form validation
    $success = true;
    //$userTools = new UserTools();
    
    // Validate that the form was filled out correctly
    // Check to see if the username already exists
    if ( $userTools->checkUsernameExists($username) ) {
        $error = "Username already in use.<br /> \n\r";
        $success = false;
    }
    
    // check to see if the passwords match
    if ( $password != $password_confirm ) {
        $error = "Passwords do not match.<br /> \n\r";
    }
    
    if ( $success ) {
        // Package the data for saving in a new user object
        $data = array(
            'username' => $username,
            'password' => UserTools::hash($password),
            'email'    => $email
        );
        
        // Create a new user object
        $newUser = new User($data);
        
        // Save the new user to the database
        $newUser->save(true);
        
        // Log them in
        $userTools->login($username, $password);
        
        // Redirect them to the index
        header("Location: index.php");
        //print '<a href="index.php">index</a> <a href="logout.php">Log Out</a>';
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form role="form" method="post" action="register.php">
        <label for="input_username">Username: </label>
        <input type="text" id="input_username" name="username" placeholder="Username"/>
        <label for="input_password">Password: </label>
        <input type="password" id="input_password" name="password" placeholder=""/>
        <label for="confirm_password">Re-type Password: </label>
        <input type="password" id="confirm_password" name="password_confirm" placeholder=""/>
        <label for="input_email">Email: </label>
        <input type="text" id="input_email" name="email" placeholder="Email"/>
        <button type="submit" name="btnSubmit" value="Submit">Submit</button>
        <button type="cancel" name="btnCancel" value="Cancel">Cancel</button>
    </form>
</body>
</html>