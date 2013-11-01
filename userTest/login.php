<?php
require_once 'includes/global.php';

$error = '';
$username = '';
$password = '';

// If the user pressed cancel, return them to the index
if ( isset($_POST['btnCancel']) ) {
    // Go to the index
    header('Location: ./index.php');
    die();
}

// Check to see if the form was submitted
if ( isset($_POST['btnSubmit']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ( $userTools->login($username, $password) ) {
        header("Location: index.php");
    } else {
        $error = 'Incorrect username or password. Please try again.';
        print $error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form id="form_login" role="form" method="post" action="login.php">
        <label for="input_username">Username: </label>
        <input type="text" id="input_username" name="username" placeholder="Username"/>
        <label for="input_password">Password: </label>
        <input type="password" id="input_password" name="password" placeholder=""/>
        <button type="submit" name="btnSubmit" value="Submit">Submit</button>
        <button type="cancel" name="btnCancel" value="Cancel">Cancel</button>
    </form>
</body>
</html>