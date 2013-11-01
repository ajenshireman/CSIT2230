<?php
$db = mysql_connect('localhost', 'username', 'password');
if ( !$db ) {
  echo 'Unable to connect to database server';
  exit;
}
if ( !mysql_select_db('database') ) {
  echo 'Unable to connet to database';
  exit;
}
?>