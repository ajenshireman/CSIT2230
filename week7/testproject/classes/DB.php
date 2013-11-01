<?php
// Class for handling database connections and queries

class DB {
    private $db_name = 'datbase';
    private $db_user = 'username';
    private $db_password = 'password';
    private $db_host = 'localhost';
    
    // open a connection to the database
    public function connect () {
        $connection = mysql_connect($this->db_host, $this->db_user, $this->db_password);
        mysql_select_db($this->db_name);
    }
    
    // takes a mysql row set and returns an associative array, where the keys are the column names
    public function processRowSet ( $rowSet, $singleRow = false ) {
        $resultArray = array();
        while ( $row = mysql_fetch_assoc($rowSet) ) {
            array_push($resultArray, $row);
        }
        
        if ( $singleRow ) {
            return $resultArray[0];
        }
        
        return $resultArray;
    }
    
    // select rows
    function select ( $from, $where ) {
        $query = "select * from $from where $where";
        $result = mysql_query($query);
        
        if ( mysql_num_rows($result) == 1 ) {
            return $this->processRowSet($result, true);
        } else {
            return $this->processRowSet($result);
        }
        
    }
    
    // Updates a current row in the database
    function update ( $data, $table, $where ) {
        foreach ( $data as $column=>$value ) {
            $query = "Update $table set $column = $value where $where";
            mysql_query($query) or die(mysql_error());
        }
        
        return true;
    }
    
    // Inserts a new row into the database
    function insert ( $data, $table ) {
        $columns = "";
        $values = "";
        
        foreach ( $data as $column=>$value ) {
            $columns .= ($columns == "") ? "" : ", ";
            $columns .= $column;
            $values .= ($values == "") ? "": ", ";
            $values .= $value;
        }
        
        $query = "insert into $table ($columns) values ($values)";
        mysql_query($query) or die(mysql_error());
        
        // return the id of the user in the database
        return mysql_insert_id();
    }
    
}

?>