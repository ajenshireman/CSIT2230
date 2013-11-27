<?php
$currentPage = '';
$protectedPage = true;
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
            
            <div class="row">
                <nav class="side-nav col-xs-12 col-sm-3">
                    <ul class="nav">
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="veiwCollections" href="#">Veiw Collections</a></li>
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="newCollection" href="#">New Collection</a></li>
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="addItem"href="#">Add Item</a></li>
                    </ul>
                </nav>
                <div class="col-xs-12 col-sm-9">
                    <div id="veiwCollections" class="form-swap">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Collections</h4>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
                    <div id="newCollection" class="form-swap" hidden>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">New Collection</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="newCollectionForm" method="post" action="manageCollection.php">
                                    <div id="newCollectionError" class="message error alert"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control hidden" name="user_id" value="<?php echo $user->getUserID() ?>" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="collectionName" placeholder="Collection Name" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit btn-inline" name="btnCreateCollection" value="Create">Create</button>
                                        <button class="btn btn-cancel btn-inline" name="btnCancelCollection" value="Cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="addItem" class="form-swap" hidden>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Item</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="addItemForm" method="post" action="addItem.php">
                                    <div id="addItemError" class="message error alert"></div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit btn-inline" name="btnAddItem" value="Add">Add</button>
                                        <button class="btn btn-cancel btn-inline" name="btnCancelItem" value="Cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

</body>
</html>
