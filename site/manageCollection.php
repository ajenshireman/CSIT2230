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
$userID = isset($_POST['userID']) ? $_POST['userID'] : NONE;

// Collection id. Used for EDIT and DELETE
$collectionID = isset($_POST['collectionID']) ? $_POST['collectionID'] : '';

// Collection name. Used for new collection
$collecionName = isset($_POST['collectionName']) ? mysql_real_escape_string($_POST['collectionName']) : '';

// Error state and message
$error = array(
    'success' => 'false',
    'message' => ''
)

/* Make sure required fields are filled out */
if ( $operationType == NONE ) {
    $error['success'] = 'false';
    $error['message'] = 'Operation type not specified';
} else if ( $userID == NONE ) {
    $error['success'] = 'false';
    $error['message'] = 'User not specified';
}
echo $error;
return;

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
        echo $error;
        return;
}

/* Create a new collection */
function createCollection () {
    
}

/* Edit an eisting collection */
function editCollection () {
    
}

/* Delete a collection */
function deleteCollection () {
    
}

?>
