<?php
require_once 'includes/global.php';

// Check if the user got here by pressing 'submit'
if ( !isset($_POST['btnSubmit']) ) {
    // Go to the index
    header('Location: index.php');
    die();
}

// Package variables for submission
$name        = $_POST['input_name'];
$description = $_POST['input_description'];
print "Machine Name: $name<br />Description: $description<br />";
$machineDetails = array(
    'name'        => "'$name'",
    'description' => "'$description'"
);
$table = 'machine';

$insertID = $db->insert($table, $machineDetails);
$query = "select name as 'Machine', description as 'Description' from machine where id = $insertID";

?>
<html>
<head>
    
</head>
<body>
    <h1>Form Submission</h1>
    <?php $db->printTable($query, 'border = 1')?>
    <form method="post" action="index.php">
        <button type="submit" name="btnOK" value="OK">OK</button>
    </form>
</hmtl>