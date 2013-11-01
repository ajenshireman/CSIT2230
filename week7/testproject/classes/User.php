<?php
// Class for handling user data

require_once('./classes/DB.php');

class User {
    
    private $id;
    private $username;
    private $hashedPassword;
    private $email;
    private $joindate;
    
    /* Constructor */
    // takes an associative array with the db row as the argument
    function _construct ( $data ) {
        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->username = (isset($data['username'])) ? $data['username'] : "";
        $this->hashedPassword = (isset($data['hashedPassword'])) ? $data['hashedPassword'] : "";
        $this->email = (isset($data['email'])) ? $data['email'] : "";
        $this->joindate = (isset($data['joindate'])) ? $data['joindate'] : "";
    }
    
    // Save user data to the database
    public function save ( $isNewUser = false ) {
        // create new database object
        $db = new DB();
        
        // user is already registered, we are just updating info
        if ( !isNewUser ) {
            // set the data array
            $data = array(
                /*'username' => "'$this->username'";
                'password' => "'$this->password'";
                'email' => "'$this->email'";*/
            );
            
            $db->update($data, 'users', 'id = ' . $this->id);
            
        } /*else {
            // user is being registered for the first time
            $data = array(
                'username' => "'$this->username'";
                'password' => "'$this->password'";
                'email' => "'$this->email'";
                'join_date' => "'" . date("Y-m-d H:i:s", time()) . "'";
            );
            
            &this->id = $db->insert($data, 'users');
            $this->joindate = time();
        }*/
        return true;
    }
}

?>