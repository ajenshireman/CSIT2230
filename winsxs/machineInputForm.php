<?php
require_once 'includes/global.php';
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form role="form" method="post" action="machineInput.php">
        <label for="input_name">Name</label>
        <input type="text" id="input_name" name="input_name" placeholder="Machine Name" />
        <label for="input_description">Description</label>
        <input type="text" id="input_description" name="input_description" placeholder="Description" />
        <button type="submit" name="btnSubmit" value="Submit">Submit</button>
        <button type="cancel" name="btnCancel" value="Cancel">Cancel</button>
    </form>
</body>
</hmtl>