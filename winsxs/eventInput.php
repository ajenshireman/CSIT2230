<?php
require_once 'includes/global.php';

// Check if the user got here by pressing 'submit'
if ( !isset($_POST['btnSubmit']) ) {
    // Go to the index
    header('Location: index.php');
    die();
}

// Set up varialbles for submission
$machine = $_POST['input_machine'];
if ( $_POST['input_date'] != "" ) {
    $date = $_POST['input_date'];
} else {
    $date = date('Ymd', time());
}
if ( $_POST['input_time'] != "" ) {
    $time = $_POST['input_time'];
} else {
    $time = date('His', time());
}
$event = $_POST['input_event'];
$size = $_POST['input_size'];
$sizeOnDisk = $_POST['input_sizeOnDisk'];
$files = $_POST['input_files'];
$folders = $_POST['input_folders'];

$phpdate = $date." ".$time;
$timestamp = strtotime($phpdate);
$datetime = date('Y-m-d H:i:s');

$eventDetails = array(
    'machine_id'    => $machine,
    'time'       => "'$datetime'",
    'event'      => "'$event'",
    'size'       => $size,
    'sizeOnDisk' => $sizeOnDisk,
    'files'      => $files,
    'folders'    => $folders
);
$table = 'winsxs';

$insertID = $db->insert($table, $eventDetails);
$query = "select date_format(time, '%Y-%m-%d') as 'Date', date_format(time, '%H:%i') as 'Time', event as'Event', concat(round(size / power(1024,3), 2), 'GB') as 'Size', concat(round(sizeOnDisk / power(1024,3), 2), 'GB') as 'Size On Disk', format(folders, 0) as 'Folders', format(files, 0) as 'Files' from winsxs where id = $insertID";
$query = "select m.name as 'Machine', date_format(w.time, '%Y-%m-%d') as 'Date',date_format(w.time, '%H:%i') as 'Time', w.event as'Event', concat(round(w.size / power(1024,3), 2), 'GB') as 'Size', concat(round(w.sizeOnDisk / power(1024,3), 2), 'GB') as 'Size On Disk', format(w.folders, 0) as 'Folders', format(w.files, 0) as 'Files' from winsxs as w, machine as m where m.id = w.machine_id and w.id = $insertID";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Event Submitted</title>
</head>
<body>
    <h1>Form Submission</h1>
    <?php $db->printTable($query, 'border = 1')?>
    <form method="post" action="index.php">
        <button type="submit" name="btnOK" value="OK">OK</button>
    </form>
</body>
</html>