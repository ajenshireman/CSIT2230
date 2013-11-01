<?php
/*
 * Class for logging users in and out
 */
require_once 'classes/DB.php';
require_once 'classes/User.php';

class UserTools {
    // Hash a password
    public static function hash ( $password ) {
        return md5($password);
    }
    
    // Log the user in.
    // First check to see if the username and password match a row in the database.
    // If successful, set the session variables and store the user object within.
    public function login ( $username, $password ) {
        $hashedPassword = $this->hash($password);
        $db = new DB();
        
        $queryArgs = array(
            'select' => '*',
            'from' => $_SESSION['userTable'],
            'where' => "username = '$username' and password = '$hashedPassword'"
        );
        $result = $db->select($queryArgs);
        
        if ( count($result) == 1 ) {
            $user = new User($result[0]);
            $_SESSION['user'] = serialize($user);
            $_SESSION['login_time'] = time();
            $_SESSION['logged_in']  = 1;
            return true;
        } else {
            return false;
        }
    }
    
    // Refresh the user information
    public function refreshUser ( $user ) {
        // Referesh the user object
        $id = $user->getUserID();
        $user = $this->get($id);
        
        // Udpate the $_SESSION variable
        $_SESSION['user'] = serialize($user);
        
        // Return the updated user object
        return $user;
    }
    
    // Log the user out. Destroy the session variables
    public function logout () {
        unset($_SESSION['user']);
        unset($_SESSION['login_time']);
        unset($_SESSION['logged_in']);
        session_destroy();
    }
    
    // Check to see if a usename exists
    public function checkUsernameExists ( $username ) {
        $result = mysql_query("select id from {$_SESSION['userTable']} where username = '$username'");
        if ( mysql_num_rows($result) == 0 ) {
            return false;
        } else {
            return true;
        }
    }
    
    // Get a user
    // Returns a User object. Takes the user id
    public function get ( $userID ) {
        $db = new DB();
        $queryArgs = array(
            'from' => $_SESSION['userTable'],
            'where' => "id = '$userID'"
        );
        $result = $db->select($queryArgs);
        $userInfo = $result[0];
        return new User($userInfo);
    }
}
?>