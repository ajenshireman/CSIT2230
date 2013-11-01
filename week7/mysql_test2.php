<?php
require_once('dbConnect2.php')

?>

<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <?php
    $db = new DB();
    $db->connect();
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
      print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    print "</table>";
    ?>
</body>
</html>