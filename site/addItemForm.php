<?php
$currentPage = '';
require_once 'includes/global.php';

require_once 'includes/head.php';
?>
<body>
    <!-- Wrapper for page content -->
    <div id="wrap">
        <!-- Navbar, fixed to top of screen -->
        <?php include 'includes/topnav.php'; ?>
        <!-- /navbar -->
          
        <!-- Begin page content -->
        <div class="container" id="body">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Item</h4>
                </div>
                <div class="panel-body">
                    <form role="form" id="addItemForm" enctype="multipart/form-data" method="post" action="addItem.php">
                        <div id="addItemError" class="message error alert" hidden></div>
                        <div class="form-group">
                            <select class="form-control" name="input_collection">
                                <!-- Select user's collections -->
                                <?php
                                $args = array (
                                    'select' => 'id, name',
                                    'from'   => 'collection',
                                    'where'  => "user_id = {$user->getUserID()}"
                                );
                                $result = $db->select($args);
                                foreach ( $result as $row ) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    print '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="input_title" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="input_description" placeholder="Description" />
                        </div>
                        <div class="form-group">
                            <label for="upload_itemImage">Item image: </label>
                            <input type="file" name="upload_itemImage" id="upload_itemImage" onclick="fileSelected()" />
                        </div>
                        <div class="fileInfo">
                            <div id="fileName"></div>
                            <div id="fileSize"></div>
                            <div id="fileType"></div>
                        </div>
                        <div class="uploadProgress">
                            <div id="uploadPercent"></div>
                            <div id="uploadResponse"></div>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="upload_itemFile">Select file to upload: </label>
                            <input type="file" name="upload_itemFile" />
                        </div>
                        -->
                        <div class="form-group">
                            <!--
                            <button class="btn btn-submit btn-inline" name="btnAddItem" value="Add">Add</button>
                            <button class="btn btn-cancel btn-inline" name="btnCancelItem" value="Cancel">Cancel</button>
                            <!-- -->
                            <input type="button" class="btn btn-submit btn-inline" name="btnAddItem" value="Add" />
                            <input type="button"  class="btn btn-cancel btn-inline" name="btnCancelItem" value="Cancel" />
                            <!-- -->
                        </div>
                    </form>
                </div>
            </div>
            
        </div><!-- /.container -->
        <!-- /content -->
    </div>
    <!-- /wrapper -->
        
    <!-- Footer, stuck to bottom of content or bottom of page if content is shorter than window height -->
    <?php include 'includes/pagefooter.php'; ?>
    <!-- /footer -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/fileUpload.js"></script>

</body>
</html>
