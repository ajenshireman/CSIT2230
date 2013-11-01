<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <table border="1">
    <?php
    $start = $_POST["start"];
    $end = $_POST["end"];
    for ($i = $start; $i <= $end; $i++)
      print("<tr><td>" . $i . "</td></tr>");
    ?>
  </table>
</body>
</html>