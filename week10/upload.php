<?php
require_once 'includes/global.php';
$demoMode = true;
$uploadPath = 'uploads/';

$file = $_FILES['uploadedFile'];
$fileName = $file['name'];
$fileSize = bytesToSize($file['size']);
$fileType = $file['type'];
$fileLocation = $uploadPath.$fileName;
$uploadTime = date('Y-m-d H:i:s');
if ( $demoMode ) {
    echo <<<EOF
<p>**Demo Mode -- File Not Uploaded**</p>
<p>
    Upload of your file, {$fileName}, is complete.<br />
    Size: {$fileSize}<br />
    Type: {$fileType}<br />
    Loacation: {$fileLocation}
</p>
EOF;
} else {
    if ( move_uploaded_file($file['tmp_name'], $fileLocation) ) {
        $fileData = array(
            'fileName' => "'$fileName'",
            'fileSize' => $file['size'],
            'fileType' => "'$fileType'",
            'filePath' => "'$uploadPath'",
            'fileAdded' => "'$uploadTime'"
        );
        $db = new DB();
        $db->insert('upload', $fileData);
        echo <<<EOF
<p>
    Upload of your file, {$fileName}, is complete.<br />
    Size: {$fileSize}<br />
    Type: {$fileType}<br />
    Loacation: {$fileLocation}
</p>
EOF;
    } else {
        echo <<<ERROR
<p>File upload failed</p>
ERROR;
    }
}

?>