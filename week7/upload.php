<?php
require_once('dbConnect.php');
?>
<html>
<head>
  
</head>
<body>
  <div>
    <h1>Upload an image</h1>
    <p><a href="./">View uploaded images</a></p>
    <form method="post" action="process.php" enctype="multipart/formdata">
      <div>
        <input type="file" name="image" />
        <input type="submit" name="submit" value="Upload Image" />
      </div>
    </form>
  </div>
</body>
</html>