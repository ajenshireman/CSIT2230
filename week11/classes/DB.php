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
    public function connect ( $args = array() ) {
        $defaults = array(
            'host'     => 'localhost',
            'user'     => 'username',
            'password' => 'password',
            'name'     => 'database'
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
    public function selectDB ( $db_selection ) {
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
    public function query ( $query ) {
        $result = mysql_query($query) or die(mysql_error());
        return $result;
    }
    
    // Takes the result of a query and returns an assocciative array with the field names as the keys
    public function proccessQueryResult ( $result ) {
        $resultArray = array();
        while ( $row = mysql_fetch_assoc($result) ) {
            array_push($resultArray, $row);
        }
        return $resultArray;
    }
    
    // Outputs the result of a query to a table. the second argument is a string  of html attributes e.x. 'class="myClass"'
    public function getTable ( $query = array(), $attributes = false ) {
        $result = $this->query($query);
        $rowSet = $this->proccessQueryResult($result);
        if ( !$rowSet ) { return 'No Results'; }
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
    public function printTable ( $query = array(), $attributes = false ) {
        $table = $this->getTable($query, $attributes);
        print $table;
    }
    
    // Insert values into a table. Takes a table and an associative array with the field names as the keys. Returns the id of the inserted row.
    public function insert ( $table, $data = array() ) {
        $query = $this->getInsert($table, $data);
        $this->query($query);
        return mysql_insert_id();
    }
    
    // Builds and INSERT statement. Takes a table and an associative array with the field names as the keys.
    public function getInsert ( $table, $data = array() ) {
        // Get the fied names and store them in an array
        $fieldsArray = array_keys($data);
        
        // Print the field names and values to a string
        $fields = "";
        $values = "";
        foreach ( $data as $field => $value ) {
            $fields .= ($fields == "") ? "" : ", ";
            $fields .= $field;
            $values .= ($values == "") ? "" : ", ";
            $values .= $value;
        }
        
        // Build the query
        $query = "insert into $table ($fields) values ($values)";
        
        return $query;
    }
    
    // Select data from the database. Takes an associative array with SELECT statment arguments as keys. Returns and associative array with field names as keys.
    public function select ( $args = array() ) {
        $query = $this->getSelect($args);
        $result = $this->query($query);
        $rowSet = $this->proccessQueryResult($result);
        
        return $rowSet;
    }
    
    // Builds a SELECT statment. Takes an associative array with SELECT statment arguments as keys.
    public function getSelect ( $args = array() ) {
        $query = 'select ';
        $query .= isset($args['select'])   ? $args['select']                : '*';
        $query .= isset($args['from'])     ? ' from '.$args['from']         : '';
        $query .= isset($args['where'])    ? ' where '.$args['where']       : '';
        $query .= isset($args['group by']) ? ' group by '.$args['group by'] : '';
        $query .= isset($args['having'])   ? ' having '.$args['having']     : '';
        $query .= isset($args['order by']) ? ' order by '.$args['order by'] : '';
        $query .= isset($args['limit'])    ? ' limit '.$args['limit']       : '';
        
        return $query;
    }
    
    // Updates rows in the database. Takes a table, and associative array with the fields to be updated as keys, and an optional where clause.
    public function update ( $table, $data = array(), $where  = false ) {
        $query = $this->getUpdate($table, $data, $where);
        $this->query($query);
    }
    
    // Builds an UPDATE statment. Takes a table, and associative array with the fields to be updated as keys, and an optional where clause.
    public function getUpdate ( $table, $data = array(), $where  = false ) {
        $query = "update $table";
        $numFields = 0;
        foreach ( $data as $field => $value ) {
            $query .= ($numFields == 0) ? " set $field = $value" : ", $field = $value";
            $numFields++;
        }
        $query .= ($where) ? " where $where" : "";
        
        return $query;
    }
}
?>