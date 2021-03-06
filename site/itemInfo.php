<?php
require_once 'includes/global.php';

// Error state and message
$error = array(
    'success' => 'false',
    'message' => '',
    'title'   => '',
    'description' => '',
    'imagePath' => '',
    'imageName' => '',
    'imageType' => '',
    'imageSize' => '',
);

// Initialize POST variables
$itemID = $_POST['itemID'];

// Get the iteminfo
$db = new DB();
$queryArgs = array(
    'select' => '*',
    'from'   => 'item',
    'where'  => "id = {$itemID}"
);
$result = $db->select($queryArgs);

$item = $result[0];
$error['success'] = true;
$error['message'] = '';
$error['title'] = $item['name'];
$error['description'] = $item['description'];
$error['imagePath'] = $item['imagePath'];
$error['imageName'] = $item['imageName'];
$error['imageType'] = $item['imageType'];
$error['imageSize'] = SiteTools::bytesToSize($item['imageSize']);
echo json_encode($error);

?>
