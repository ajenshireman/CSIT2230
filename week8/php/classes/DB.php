<?php
/* Class for handling database collections
 *  Also provides some methods for building and excuting basic queries
 *
 */

class DB {   
    private $db_host;     // MySQL server location
    private $db_user;     // Username
    private $db_password; // User's Password
    private $db_name;     // Name of the database to connect to
    
    // Connect to the specified database server
    function connect ( $args = array() ) {
        $defaults = array(
            'host'     => 'localhost',
            'user'     => 'username',
            'password' => 'password',
            'name'     => 'database',
        );
        
        $config = array_merge($defaults, $args);
      
        $this->db_host = $config['host'];
        $this->db_user = $config['user'];
        $this->db_password = $config['password'];
        
        $connection = mysql_connect($this->db_host, $this->db_user, $this->db_password);
        if ( !$connection ) {
            echo 'Error - Could not connect to database server.';
            exit;
        }
        
        $db = $this->selectDB($config['name']);
        if ( !$db ) {
            echo 'Error - Could not connect to database';
            exit;
        }
        return true;
    } 
    
    // select the specified database
    function selectDB ( $db_selection ) {
        if ( $db_selection != "" ) {
            $this->db_name = $db_selection;
            if ( mysql_select_db($this->db_name) ) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
    
    // execute the query. returns the result if the query succeeds, otherwise returns an error
    function query ( $query ) {
        $result = mysql_query($query) or die(mysql_error());
        return $result;
    }
    
    // Takes the result of a qury and returns an assocciative array with the field names as the keys
    function proccessQueryResult ( $result ) {
        $resultArray = array();
        while ( $row = mysql_fetch_assoc($result) ) {
            array_push($resultArray, $row);
        }
        return $resultArray;
    }
    
    // Outputs the result of a query to a table. the second argument is a string  of html attributes e.x. 'class="myClass"'
    function getTable ( $query, $attributes = false ) {
        $result = $this->query($query);
        $rowSet = $this->proccessQueryResult($result);
        $fields = array_keys($rowSet[0]);
        $table = '<table';
        if ( $attributes) { $table .= " $attributes"; }
        $table .= '><tr>';
        foreach ( $fields as $fieldName ) {
            $table .= "<th>$fieldName</th>";
        }
        $table .= '</tr>';
        foreach ( $rowSet as $row ) {
            $table .= '<tr>';
            foreach ( $row as $value ) {
                $table .= "<td>$value</td>";
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        
        return $table;
    }
    
    // Gets the results of a query as a table and outputs it to the page
    function printTable ( $query, $attributes= false ) {
        $table = $this->getTable($query, $attributes);
        print $table;
    }
    
}
?>