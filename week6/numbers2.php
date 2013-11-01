<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php
  $start = $_POST["start"];
  if ( $start == null ) {
    print '<form method="post" action="numbers2.php">';
    print '<table>';
    print '<tr align="center"><td>Start: <input type="text" name="start"></td></tr>';
    print '<tr align="center"><td>End: <input type="text" name="end"></td></tr>';
    print '<tr align="center"><td><input type="submit" value="Run"></td></tr>';
    print '</table>';
    print '</form>';
  } else {
    print '<table border="1">';
    $start = $_POST["start"];
    $end = $_POST["end"];
    for ($i = $start; $i <= $end; $i++)
      print("<tr><td>" . $i . "</td></tr>");
    print '</table>';
  }
  ?>
</body>
</html>