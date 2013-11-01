<?php
require_once 'includes/global.php';
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php
    
    if ( isset($_SESSION['logged_in']) ) {
        $user = unserialize($_SESSION['user']); ?>
        Hello <?php print $user->getUserName() ?>. You are logged in. <a href="settings.php">Settings</a> <a href="logout.php">Log Out</a><br />
    <?php
        $args = array(
            'select' => "id as ' User ID', username as 'Username', email as 'e-mail'",
            'from'   => $_SESSION['userTable'],
        );
        if ( $user->getUsername() != 'admin' ) {
            $args['where'] = "id = '".$user->getUserID()."'";
        }
        $query = $db->getSelect($args);
        $db->printTable($query, 'border=1');
    } else { ?>
        You are not logged in. <a href="login.php">Log In</a> <a href="register.php">Register</a><br />
    <?php }
    ?>
</body>
</html>