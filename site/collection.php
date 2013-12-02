<?php
require_once 'includes/global.php';

// Error state and message
$error = array(
    'success' => 'false',
    'message' => '',
    'collectionName' => '',
    'output'  => ''
);

// Initialize POST variables
$collectionID = $_POST['collectionID'];

// Get the contents of the collection
$db = new DB();
$queryArgs = array(
    'select' => "ci.collection_id as 'COLLECTIONID', ci.item_id as 'ITEMID', c.id, c.name as 'COLLECTIONNAME' i.id, i.imagePath as 'PATH'",
    'from'   => 'collection as c, item as i, collection_item as ci',
    'where'  => 'i.id = ci.item_id and c.id = ci.collection_id'
);
echo $db->getSelect($queryArgs);
return;

$result = $db->select($queryArgs);
if ( result ) {
    $output = '';
    foreach ( $result as $item ) {
        $output .= "<div class=\"collection-item\" data-id=\"{$item['ITEMID']}\">\n";
        $output .= "\t<img class=\"itemImageSmall\" src=\"{$item['PATH']}\" />\n";
        $output .= "</div>\n";
    }
    
    $error['success'] = 'true';
    $error['message'] = '';
    $error['collectionName'] = $item['COLLECTIONNAME'];
    $error['output']  = $output;
    echo json_encode($error);
    return;
} else {
    $error['success'] = 'false';
    $error['message'] = 'No Results';
    $error['output']  = '';
    echo json_encode($error);
    return;
}
?>
