

<html>
<body>

<?php
//
// 1. Connect to local mySQL installation. User and password provided.
//
$db = mysql_connect("localhost","username","password");
if (!$db)
   exit("Error - Could not connect to MySQL");
//
// 2. Select the database to use.
//
$er = mysql_select_db("c2230a16test");
if (!$er)
   exit("Error - Could not select the database!");
//
// 3. Issue SQL request.
//
$query = "select firstName, lastName, phone from Contact";
$result = mysql_query($query);
if (!$result) {
   print "Error - query cannot be processed: ";
   $error = mysql_error();
   print "$error";
   exit;
}
//
// 4. Process the result.
//
$num_rows = mysql_num_rows($result);
echo 'num_rows: ', $num_rows;
print "<TABLE BORDER=1><TR><TH>First Name</TH><TH>Last Name</TH><TH>Phone</TH></TR>";
for ($i = 0; $i < $num_rows; $i++) {
   $row = mysql_fetch_row($result);
   print "<TR><TD>$row[0]</TD><TD>$row[1]</TD><TD>$row[2]</TD></TR>";
}
print "</TABLE>";
?>

</body>
</html>
