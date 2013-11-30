<?php
/*
 * Class for preforming various site functions
 * 
 */

require_once 'classes/DB.php';
require_once 'classes/User.php';
require_once 'classes/UserTools.php';

class SiteTools {
    /** 
     * Create a new collection. Takes a User object and an array of options.
     * 
     * $options = array():
     *     isMain: whether ot not the collection is a user's main collection. If this is set to true, the other options are ignored.
     *     name: Name of the collection
     *     type: Type of itmes in the collection. Not currently implemented
     */  
    static function createCollection ( $user, $options = array() ) {
        // Create a database connection object
        $db = new DB();
        
        // Set common variables
        $userID = $user->getUserID();
        
        if ( $options['isMain'] == true ) {
            // Collection is a main collection
            $queryArgs = array(
                'user_id' => "'$userID'",
                'name'    => "'Main Collection'",
                'isMain'  => 'true'
            );
            //echo $db->getInsert('collection', $queryArgs);
            $db->insert('collection', $queryArgs);
        } else {
            // Collection is user created
            $name = $options['name'];
            $queryArgs = array(
                'user_id' => "'$userID'",
                'name'    => "'$name'",
                'isMain'  => 'false'
            );
            //echo $db->getInsert('collection', $queryArgs);
            $db->insert('collection', $queryArgs);
        }
    }
}
?>
