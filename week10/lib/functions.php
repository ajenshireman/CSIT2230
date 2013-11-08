<?php
function bytesToSize ( $bytes, $precision = 2 ) {
    $unit = array('B', 'KB', 'MB', 'GB');
    $i = floor(log($bytes, 1204));
    return @round($bytes / pow(1024, $i), $precision).' '.$unit[$i];
}


?>