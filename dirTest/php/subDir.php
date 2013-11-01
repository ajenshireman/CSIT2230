<?php
echo 'basename(__FILE__):<br />'.basename(__FILE__).'<br />';
echo '$_SERVER[\'DOCUMENT_ROOT\']:<br />'.$_SERVER['DOCUMENT_ROOT'].'<br />';
echo 'dirname(__FILE__):<br />'.dirname(__FILE__).'<br />';
echo 'including /php/includes/global.php<br />';
echo '<br />';
include '/php/includes/global.php';
echo 'including dirname(__FILE__).\'/includes/global.php\'<br />';
include dirname(__FILE__).'/includes/global.php';
?>
<html>
<head>
    
</head>
<body>
    <a href="../index.php">../index.php</a>
</body>
</html>