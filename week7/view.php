<?php
require_once('dbConnect.php');

try {
  if ( $isset($_GET['id']) ) {
    throw new Exception('ID not specified');
  }
  
  $id = (int)$_GET['id'];
  
  if ( $id <=0 ) {
    throw new Exception('Invalid ID');
  }
  
  $query = sprintf('select * from movies where id = %d', $id);
  $result = mysql_query($query);
  
  if ( mysql_numrows($result) == 0 ) {
    throw new Exception('Image not found');
  }
  
  $image = mysql_fetch_array($result);
} catch ( Exception $ex ) {
  header('HTTP/1.0 404 Not Found');
  exit;
}

header('Content-type: ' . $image['mime_type']);
header('Content-length: ' . $image['file_size']);

echo $image['file_data'];
?>