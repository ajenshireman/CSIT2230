<?php
require_once 'includes/global.php';
?>
<!DOCTYPE htm>
<html>
<head>
    <title>File Upload Test</title>
    <script src="js/fileUpload.js"></script>
</head>
<body>
    <?php
    
    $queryArgs = array(
        'select' => "*",
        'from'   => 'upload',
    );
    $results = $db->select($queryArgs);
    if ( count($results) > 0 ) {
        foreach ( $results as $result ) {
            $fileLocation = $result['filePath'].$result['fileName'];
            $fileSize = bytesToSize($result['fileSize']);
            echo <<<TABLE
    <div>
        <img src="$fileLocation" />
        <p>Name: {$result['fileName']} Size: {$fileSize} Location: {$result['filePath']}</p>
    </div>
TABLE;
        }
    }
    
    ?>
    
    <form id="uploadForm" enctype="multipart/form-data" method="post" action="upoad.php">
        <div>
            <label for="uploadedFile">Choose a file to upload: </label>
            <input type="file" name="uploadedFile" id="uploadedFile" onchange="fileSelected()"/>
        </div>
        <div id="fileName"></div>
        <div id="fileSize"></div>
        <div id="fileType"></div>
        <div>
            <input type="button" name="btnUpload" value="Upload" onclick="uploadFile()" />
        </div>
        <div id="uploadPercent"></div>
        <div id="uploadResponse"></div>
    </form>
</body>
</html>