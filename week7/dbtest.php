<!DOCTYPE html>
<?php require_once('./php/DB.php') ?>
<html>
<head>
    <title>dbtest.php</title>
    <style>
        .testTable {
            border: 2px solid red;
            
        }
    </style>
</head>
<body>
    <h1>DB connection Test</h1>
    <?php
    $db = new DB();
    $db->connect();
    echo 'Connected to database<br />';
    
    echo 'All code in script';
    $query = "select lastName, firstName, phone from Contact order by lastName";
    $result = mysql_query($query);
    if ( !$result ) {
      echo 'Error - query could not be processed.<br />';
      $error = mysql_error();
      echo $error;
      exit;
    }
    $numRows = mysql_num_rows($result);
    echo "<table border=1><tr><th>Last Name</th><th>First Name</th><th>Phone</th></tr>";
    for ( $i = 0; $i < $numRows; $i++ ) {
        $row = mysql_fetch_row($result);
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo '</table>';
    
    print ' Query in function';
    $query = "select lastName as 'Last Name', firstName as 'First Name', phone as 'Phone' from Contact order by lastName";
    $result = $db->query($query);
    $numRows = mysql_num_rows($result);
    $numFields = mysql_num_fields($result);
    print '<table border=1><tr>';
    for ( $i = 0; $i < $numFields; $i++ ) {
        $fieldName = mysql_field_name($result, $i);
        print '<th>'.$fieldName.'</th>';
    }
    print '</tr>';
    for ( $i = 0; $i < $numRows; $i++ ) {
        print '<tr>';
        $row = mysql_fetch_row($result);
        for ( $j = 0; $j < count($row); $j++ ) {
            print'<td>'.$row[$j].'</td>';
        }
        print '</tr>';
    }
    print '</table>';
    
    print 'Table built in function';
    $query = "select lastName as 'Last Name', firstName as 'First Name', phone as 'Phone' from Contact order by lastName";
    $table = $db->getTable($query, 'style="border: 2px dashed red"');
    print $table;
    
    print 'Table built from query using proccessRows()';
    $query = "select lastName as 'Last Name', firstName as 'First Name', phone as 'Phone' from Contact order by lastName";
    $db->printTable($query, 'style="border: 2px dashed red"');
    
    print 'This is after the third table. Is it working?';
    
    $query = "select date_format(time, '%Y-%m-%d') as 'Date', date_format(time, '%H:%i') as 'Time', event as'Event', concat(round(size / power(1024,3), 2), 'GB') as 'Size', concat(round(sizeOnDisk / power(1024,3), 2), 'GB') as 'Size On Disk', format(folders, 0) as 'Folders', format(files, 0) as 'Files' from winsxs";
    $db->printTable($query, 'border=1');
    
    $query = "select * from winsxs";
    $result = $db->query($query);
    $numRows = mysql_num_rows($result);
    $numFields = mysql_num_fields($result);
    print '<table border=1><tr>';
    for ( $i = 0; $i < $numFields; $i++ ) {
        $fieldName = mysql_field_name($result, $i);
        print '<th>'.$fieldName.'</th>';
    }
    print '</tr>';
    for ( $i = 0; $i < $numRows; $i++ ) {
        print '<tr>';
        $row = mysql_fetch_row($result);
        for ( $j = 0; $j < count($row); $j++ ) {
            print'<td>'.$row[$j].'</td>';
        }
        print '</tr>';
    }
    
    ?>
</body>
</html>