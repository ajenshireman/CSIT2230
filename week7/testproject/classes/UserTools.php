<?php
// Class for defining operations done to Users

require_once('./classes/DB.php');
require_once('./classes/User.php');

class UserTools {
    // log the user in
    public function login ( $username, $password ) {
        $hashedPassword = md5($password);
        $result = mysql_query("select * from users where username = $username and password = $hashedPassword;")
        
        if ( mysql_num_rows($result) == 1 ) {
            $_SESSION['user'] = serialize(new User(mysql_fetch_assoc($result)));
            $_SESSION['login_time'] = time();
            $_SESSION['logged_in'] = 1;
            return true;
        } else {
            return false;
        }
    }
    
    // log the user out
    public function logout () {
        unset($_SESSION['user']);
        unset($_SESSION['login_time']);
        unset($_SESSION['logged_in']);
        session_destroy();
    }
    
    // check to see if a username exists
    public function checkUsernaemExists ( $username ) {
        $result = mysql_query("select id from users where username = $username;");
        if ( mysql_num_rows($result) == 0 ) {
            return false;
        } else {
            return true;
        }
    }
    
    // get a user
    public function get ( $id ) {
        $db = nre DB();
        $result = $db->select('users', "id = $id");
        
        return new User($result);
    }
}
?>