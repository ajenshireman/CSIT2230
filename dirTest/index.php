<?php
$GLOBALS['workingDir'] = dirname(__FILE__);
echo 'Working Directory: '.$GLOBALS['workingDir'].'<br />';
echo 'basename(__FILE__):<br />'.basename(__FILE__).'<br />';
echo '$_SERVER[\'DOCUMENT_ROOT\']:<br />'.$_SERVER['DOCUMENT_ROOT'].'<br />';
echo 'dirname(__FILE__):<br />'.dirname(__FILE__).'<br />';
echo 'Including php/includes/global.php<br />';
echo '<br />';
include 'php/includes/global.php';
?>
<html>
<head>
    
</head>
<body>
    <p>
        <a href="php/subDir.php">php/subDir.php</a>
    </p>
</body>
</html>