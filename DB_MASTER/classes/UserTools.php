<?php
/*
 * Class for logging users in and out
 */
require_once 'lib/password.php';
require_once 'classes/DB.php';
require_once 'classes/User.php';

class UserTools {    
    // Log the user in.
    // First check to see if the username and password match a row in the database.
    // If successful, set the session variables and store the user object within.
    public function login ( $username, $password ) {
        $db = new DB();
        
        // look up the user name in the db
        $queryArgs = array(
            'select' => '*',
            'from' => $_SESSION['userTable'],
            'where' => "username = '$username'"
        );
        $result = $db->select($queryArgs);
        
        // see if the username exists
        if ( count($result) == 1 ) {
            // if the username exists the hashedPassword
            $userData = $result[0];
            
            //  verify the given password against the stored password and salt
            if ( password_verify($password, $userData['password']) ) {
                // if the password is good, create a new User object with the pulled data
                $user = new User($userData);
                $_SESSION['user'] = serialize($user);
                $_SESSION['login_time'] = time();
                $_SESSION['logged_in']  = 1;
                session_regenerate_id();
                return true;
            } else {
                // Wirong password
                return false;
            }
        } else {
            // User not found
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