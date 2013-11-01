<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php
  $msg = "OMGWFTBBQ";
  echo "This is echoed<br />";
  print("This is \"printed\"");
  echo "<p><h1>", $msg, "</h1></p>";
  ?>
  
  <form method="post" action="numbers.php">
  <table>
  <tr align="center"><td>Start: <input type="text" name="start"></td></tr>
  <tr align="center"><td>End: <input type="text" name="end"></td></tr>
  <tr align="center"><td><input type="submit" value="GO!"></td></tr>
  </table>
  </form>

</body>
</html>