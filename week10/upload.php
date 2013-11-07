<?php
$uploadPath = 'uploads/';

function bytesToSize ( $bytes, $precision = 2 ) {
    $unit = array('B', 'KB', 'MB', 'GB');
    $i = floor(log($bytes, 1204));
    return @round($bytes / pow(1024, $i), $precision).' '.$unit[$i];
}

$file = $_FILES['uploadedFile'];
$fileName = $file['name'];
$fileSize = bytesToSize($file['size']);
$fileType = $file['type'];
$fileLocation = $uploadPath.$fileName;

//move_uploaded_file($file['tmp_name'], $fileLocation);

echo <<<EOF
<p>Upload of your file, {$fileName}, is complete.</p>
<p>Size: {$fileSize}</p>
<p>Type: {$fileType}</p>
<p>Loacation: {$fileLocation}</p>
EOF
?>