<?php
    $db = mysql_connect('localhost', 'username', 'password');
 
    if (!$db) {
        echo "Unable to establish connection to database server";
        exit;
    }
 
    if (!mysql_select_db('c2230a16test', $db)) {
        echo "Unable to connect to database";
        exit;
    }
?>