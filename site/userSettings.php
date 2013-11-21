<?php
$currentPage = 'settings';
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
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="details" href="#">Account Details</a></li>
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="changeEmail"href="#">Change e-mail</a></li>
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="changePassword" href="#">Change Password</a></li>
                    </ul>
                </nav>
                <div class="col-xs-12 col-sm-9">
                    <div id="details" class="form-swap">
                        <p>username: <?php echo $user->getUsername(); ?></p>
                        <p>email: <?php echo $user->getEmail(); ?></p>
                    </div>
                    <div id="changeEmail" class="form-swap" hidden>
                        <form role="form" id="emailForm" method="post" action="changeEmail.php">
                            <div id="emailError" class="message error"></div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="newEmail" placeholder="New e-mail" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="emailPassword" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-submit btn-inline" name="btnChangeEmail" value="Change">Change</button>
                                <button class="btn btn-cancel btn-inline" name="btnCancelEmail" value="Cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div id="changePassword" class="form-swap" hidden>
                        <form role="form" id="passwordForm" method="post" action="changePassword.php">
                            <div id="passwordError" class="message error"></div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="currentPassword" placeholder="Current Password" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="newPassword" placeholder="New Password" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="confirmPassword" placeholder="Confirm Password" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-submit btn-inline" name="btnChangeEmail" value="Change">Change</button>
                                <button class="btn btn-cancel btn-inline" name="btnCancelPassword" value="Cancel">Cancel</button>
                            </div>
                        </form>
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
    <script type="text/javascript" src="js/userSettings.js"></script>
</body>
</html>
