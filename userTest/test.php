<?php
require_once 'includes/global.php';
//error_log("Error Logging is Working", 3, 'errorlog.txt');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    This loaded
    <?php
    $query = "select * from contact";
    $db->printTable($query);
    ?>
</body>
</html>