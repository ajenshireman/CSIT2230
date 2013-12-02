<?php
require_once 'includes/global.php';
$demoMode = false;
$uploadPath = 'items/image/';

$itemTypeID = 1; // $_POST['itemTypeID'];
$collectionID = $_POST['input_collection'];
$title = mysql_real_escape_string($_POST['input_title']);
$description = mysql_real_escape_string($_POST['input_description']);
$file = $_FILES['upload_itemImage'];
$fileName = $file['name'];
$fileSize = SiteTools::bytesToSize($file['size']);
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
    Location: {$fileLocation}<br />
    Title: {$title}<br />
    Description: {$description}<br />
</p>
EOF;
} else {
    if ( move_uploaded_file($file['tmp_name'], $fileLocation) ) {
        // Put the item in the database
        $fileData = array(
            'itemType_id' => $itemTypeID,
            'name'        => "'$title'",
            'description' => "'$description'",
            'imageName'   => "'$fileName'",
            'imageSize'   => $file['size'],
            'imageType'   => "'$fileType'",
            'imagePath'   => "'$uploadPath'",
            'addedOn'     => "'$uploadTime'"
        );
        $db = new DB();
        $itemID = $db->insert('item', $fileData);
        // get the is for the user's main collection
        $mainCollection = SiteTools::getMainColection($user);
        $mainCollectionID = $mainCollection['id'];
        // Put the item in the main collection
        $queryArgs = array(
            'collection_id' => "'$mainCollectionID'",
            'item_id'       => "'$itemID'",
        );
        $db->insert('collection_item', $queryArgs);
        // put the item in the specified colleciton
        if ( $collectionID != $mainCollectionID ) {
            $queryArgs = array(
                'collection_id' => "'$collectionID'",
                'item_id'       => "'$itemID'",
            );
            $db->insert('collection_item', $queryArgs);
        }
        echo <<<EOF
<p>
    Upload of your file, {$fileName}, is complete.<br />
    Size: {$fileSize}<br />
    Type: {$fileType}<br />
    Location: {$fileLocation}<br />
    Title: {$title}<br />
    Description: {$description}<br />
</p>
EOF;
    } else {
        echo <<<ERROR
<p>File upload failed</p>
ERROR;
    }
}

?>