<html>
<head></head>
<body>
  <?php
  $db = mysqli_connect('localhost', 'username', 'passwrord', 'database');
  if ( mysqli_connect_errno($db) ) {
    echo 'failed to connect to MySQL: ' . mysqli_connect_error();
  }
  
  $query = 'select lastName, firstName, phone from Contact order by lastName';
  $result = mysqli_query($db, $query);
  $row = mysqli_fe($result);
  echo $row['_msg'];
  ?>
</body>
</html>