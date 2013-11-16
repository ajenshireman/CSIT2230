<?php
/* Class for managing user information
 *
 */

require_once 'classes/DB.php';

class User {
    private $id;       // 
    private $username; // 
    private $hashedPassword; // Hashed password
    private $email;    // 
    private $joindate; //
    
    /* Constructor */
    // Takes an associative array with the DB row as an argument
    public function __construct ( $data ) {
        $this->id             = ( isset($data['id']) )       ? $data['id']       : "";
        $this->username       = ( isset($data['username']) ) ? $data['username'] : "";
        $this->hashedPassword = ( isset($data['password']) ) ? $data['password'] : "";
        $this->email          = ( isset($data['email']) )    ? $data['email']    : "";
        $this->joindate       = ( isset($data['joindate']) ) ? $data['joindate'] : "";
    }
    
    // Functions for retieving user information
    public function getUserID () {
        return $this->id;
    }
    
    public function getUsername () {
        return $this->username;
    }
    
    public function getPassword () {
        return $this->hashedPassword;
    }
    
    public function getEmail () {
        return $this->email;
    }
    
    public function getJoindate () {
        return $this->joindate;
    }
    
    // functions for setting user information
    // username and joindate cannot be changed, only password and email
    public function setPassword ( $newPassword ) {
        $this->hashedPassword = $newPassword;
    }
    
    public function setEmail ( $newEmail ) {
        $this->email = $newEmail;
    }
    
    // Saves the user information to the database.
    public function save ( $isNewUser = false ) {
        $db = new DB();
        
        // If the user is already registered, just update their info
        if ( !$isNewUser ) {
            $data = array (
                'password' => "'$this->hashedPassword'",
                'email'    => "'$this->email'"
            );
            $db->update($_SESSION[userTable], $data, "id = '".$this->id."'");
        }
        // else register the user
        else {
            $data = array (
                'username' => "'$this->username'",
                'password' => "'$this->hashedPassword'",
                'email'    => "'$this->email'",
                'joindate' => "'".date("Y-m-d H:i:s")."'"
            );
            $this->id = $db->insert($_SESSION['userTable'], $data);
            $this->joindate = time();
        }
    }
}


?>