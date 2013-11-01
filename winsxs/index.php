<?php
require_once 'includes/global.php';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        
    </style>
</head>
<body>
    <?php
    $query = "select name as 'Machine', description as 'Description' from machine";
    $db->printTable($query, 'border=1 cellspacing=0 cellpadding="5"');
    ?>
    <form method = "post" action="machineInputForm.php">
        <button type="submit" name="btnNewMachine"  value="btnNewMachine">New Machine</button>
    </form>
    <h1>Events</h1>
    <?php
    $query = "select m.name as 'Machine', date_format(w.time, '%Y-%m-%d') as 'Date',date_format(w.time, '%H:%i') as 'Time', w.event as'Event', concat(round(w.size / power(1024,3), 2), 'GB') as 'Size', concat(round(w.sizeOnDisk / power(1024,3), 2), 'GB') as 'Size On Disk', format(w.folders, 0) as 'Folders', format(w.files, 0) as 'Files' from winsxs as w, machine as m where m.id = w.machine_id";
    $db->printTable($query, 'border=1 cellspacing=0 cellpadding="5"');
    ?>
    <form method="post" action="eventInputForm.php">
        <button type="submit" name="btnNewEvent" value="New Event">New Event</button>
    </form>
</body>
</html>