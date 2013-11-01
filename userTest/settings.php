<?php
require_once 'includes/global.php';

// Check to see if the user is logged in
if ( !isset($_SESSION['logged_in']) ) {
    header('Location: index.php');
    die();
}

// Get the user object from the session
$user = unserialize($_SESSION['user']);

// If the user hit cancel, discard the changes
if ( isset($_POST['btnCancel']) ) {
    
}

// Check to see if the form has been submitted
if ( isset($_POST['btnSubmit']) ) {
    // Retrieve the $_POST variables
    $email = $_POST['email'];
    
    $user->setEmail($email);
    $user->save();
    
    $message = 'Settings saved.';
    
    // Referesh the user object
    $id = $user->getUserID();
    $user = $userTools->get($id);
    
    // Udpate the $_SESSION variable
    $_SESSION['user'] = serialize($user);
    
}

// Initialize the php variables in the form
$email = $user->getEmail();
$message = '';

// If the form wasn't submitted, or didn't validate, show the form again


?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <div>
        <a href="index.php">Home</a> <a href="logout.php">Log Out</a>
    </div>
    <div>
        Email: <?php print $email ?>
    </div>
    <form id="form_settings" role="form" method="post" action="settings.php">
        <label for="email">New email: </label>
        <input type="text" id="input_email" name="email" placeholder=""/>
        <button type="submit" name="btnSubmit" value="Submit">Submit</button>
        <button type="cancel" name="btnCancel" value="Cancel">Cancel</button>
    </form>
</body>
</html>