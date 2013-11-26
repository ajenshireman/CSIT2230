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
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="addItem"href="#">Add Item</a></li>
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="newCollection" href="#">New Collection</a></li>
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
                    <div id="addItem" class="form-swap">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Item</h4>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
                    <div id="newCollection" class="form-swap">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">New Collection</h4>
                            </div>
                            <div class="panel-body">
                                
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
