<?php
/**
 * manageCollection.php
 *
 * script for handing collections.
 * create, delete and edit.
 * 
 * @package
 */

require_once 'includes/global.php';

/**
 * Constants to control opertions
 */
// No operation. Return error
define ('NONE', 0);

// Create a new collection
define ('CREATE', 1);

// Edit an existing collection
define ('EDIT', 2);

// Delete a collecion
define ('DELETE', 3);

/* Initialize variables and get the POST data */
// Type of operation to perform
$operationType = isset($_POST['operationType']) ? $_POST['operationType'] : NONE;

// User id
$userID = $user->getUserID();

// Collection name. Used for new collection
$collectionName = !empty($_POST['collectionName']) ? mysql_real_escape_string($_POST['collectionName']) : '';

// Collection id. Used for EDIT and DELETE
$collectionID = isset($_POST['collectionID']) ? $_POST['collectionID'] : '';

// Error state and message
$error = array(
    'success' => 'false',
    'message' => ''
);

/* Make sure required fields are filled out */
if ( $operationType == NONE ) {
    $error['success'] = 'false';
    $error['message'] = 'Operation type not specified';
    echo json_encode($error);
    return;
} if ( $userID == NONE ) {
    $error['success'] = 'false';
    $error['message'] = 'User not specified';
    echo json_encode($error);
    return;
}

/* Decide what to do */
switch ( $operationType ) {
    case CREATE:
        createCollection();
        break;
    case EDIT:
        editCollection();
        break;
    case DELETE:
        deleteCollection();
        break;
    default:
        $error['success'] = 'false';
        $error['message'] = 'Something went wrong';
        echo json_encode($error);
        return;
}

/* Create a new collection */
function createCollection () {
    if ( empty($_POST['collectionName']) ) {
        $error['success'] = 'false';
        $error['message'] = 'Please enter a name for your collection';
        echo json_encode($error);
        return;
    }
    $collectionName = $_POST['collectionName'];
    //SiteTools::createCollection($user, array('name' => "'$collectionName'"))
    $error['success'] = 'true';
    $error['message'] = "Created Collection: $collectionName";
    echo json_encode($error);
    return;
}

/* Edit an eisting collection */
function editCollection () {
    $error['success'] = 'true';
    $error['message'] = 'Edit Collection';
    echo json_encode($error);
    return;
}

/* Delete a collection */
function deleteCollection () {
    $error['success'] = 'true';
    $error['message'] = 'Delete Collection';
    echo json_encode($error);
    return;
}

?>
