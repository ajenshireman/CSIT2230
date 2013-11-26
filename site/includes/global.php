<?php
// Include global classes and scripts
require_once 'lib/password.php';
require_once 'classes/DB.php';
require_once 'classes/User.php';
require_once 'classes/UserTools.php';
require_once 'classes/SiteTools.php';

// Setup $args for database connection
$args = array(
    'host'     => 'localhost',
    'user'     => 'username',
    'password' => 'password',
    'name'     => 'database'
);

// Connect to the database
$db = new DB();
$db->connect($args);

// Inititaize a UserTools Object
$userTools = new UserTools();

// Start the session
session_name('c2230a16');
session_start();
$_SESSION['userTable'] = 'user';

// Refresh the session varibles if the user is logged in
if ( isset($_SESSION['logged_in']) ) {
    $user = unserialize($_SESSION['user']);
    $_SESSION['user'] = serialize($userTools->get($user->getUserID()));
} else {
    if ( isset($protectedPage) ) {
        header('Location: index.php');
    }
}

?>