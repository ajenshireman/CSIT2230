<?php
require_once 'includes/global.php';

function processEventInput () {
    if ( isset($_POST['btnSubmit']) ) {
        
    } else {
        echo '<meta http-equiv="Refresh" content="0; url=index.php">';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form role="form" method="post" action="eventInput.php">
        <label for="input_machine">Machine</label>
        <select id="input_machine" name="input_machine">
            <?php
            $args = array (
                'select' => 'id, name',
                'from'   => 'machine'
            );
            $result = $db->select($args);
            foreach ( $result as $row ) {
                $id = $row['id'];
                $name = $row['name'];
                print '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
        <label for="input_date">[Date]</label>
        <input type="text" id="input_date" name="input_date" placeholder="YYYYmmdd" />
        <label for="input_time">[Time]</label>
        <input type="text" id="input_time" name="input_time" placeholder="HHmm[ss]" />
        <label for="input_event">Event</label>
        <input type="text" id="input_event" name="input_event" placeholder="Event" />
        <label for="input_size">Size (Bytes)</label>
        <input type="text" id="input_size" name="input_size" placeholder="Size (Bytes)" />
        <label for="input_sizeOnDisk">Size on Disk (Bytes)</label>
        <input type="text" id="input_sizeOnDisk" name="input_sizeOnDisk" placeholder="Size on Disk (Bytes)" />
        <label for="input_files">Files</label>
        <input type="text" id="input_files" name="input_files" placeholder="Files" />
        <label for="input_folders">Folders</label>
        <input type="text" id="input_folders" name="input_folders" placeholder="Folders" />
        <button type="submit" name="btnSubmit" value="Submit">Submit</button>
        <button type="cancel" name="btnCancel" value="Cancel">Cancel</button>
    </form>
</body>
</html>