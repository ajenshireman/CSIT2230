<p id="results">
<?php
require_once 'includes/global.php';

$searchStr = $_POST['searchField'];

$args = array(
    'select' => "concat(firstname, ' ', lastname) as 'Name', firstname, lastname",
    'from'   => 'Contact',
    'where'  => "firstname like '$searchStr%' or lastname like '$searchStr%'"
);
$rowSet = $db->select( $args);

if ( count($rowSet) == 0 ) {
    print 'No Results';
} else if ( strlen($searchStr) == 0 ) {
    
} else {
    foreach ( $rowSet as $row ) {
        print "<div class=\"result\">{$row['Name']}</div>";
    }
}

?>
</p>