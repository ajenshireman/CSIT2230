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
                        <li class="nav nav-pill nav-stacked"><a class="swap" data-target="deleteAccount" href="#">Delete Account</a></li>
                    </ul>
                </nav>
                <div class="col-xs-12 col-sm-9">
                    <div id="details" class="form-swap">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Account Details</h4>
                            </div>
                            <div class="panel-body">
                                <p>username: <span class="currentUsername"><?php echo $user->getUsername() ?></span></p>
                                <p>email: <span class="currentEmail"><?php echo $user->getEmail() ?></span></p>
                                <p>Joined: <span class="joinDate"><?php echo $user->getJoindate() ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div id="changeEmail" class="form-swap" hidden>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Change e-mail</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="emailForm" method="post" action="changeEmail.php">
                                    <div id="emailError" class="message error alert"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="newEmail" placeholder="New e-mail" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="emailPassword" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" class="pwToggle" />
                                        <span>Show Password</span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit btn-inline" name="btnChangeEmail" value="Change">Change</button>
                                        <button class="btn btn-cancel btn-inline" name="btnCancelEmail" value="Cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="changePassword" class="form-swap" hidden>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Change Password</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="passwordForm" method="post" action="changePassword.php">
                                    <div id="passwordError" class="message error alert"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="currentPassword" placeholder="Current Password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="newPassword" placeholder="New Password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" class="pwToggle" />
                                        <span>Show Password</span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit btn-inline" name="btnChangeEmail" value="Change">Change</button>
                                        <button class="btn btn-cancel btn-inline" name="btnCancelPassword" value="Cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="deleteAccount" class="form-swap" hidden>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Delete Account</h4>
                            </div>
                            <div class="panel-body">
                                <div class="alert alert-danger">
                                    THIS CANNOT BE UNDONE
                                </div>
                                <div id="confirmDeleteAccount">
                                    <div class="form-group">
                                        Do you really want to delete your acount?
                                    </div>
                                    <div class="form-group">
                                        <button id="btnConfirmDeleteAccount" class="btn btn-inline" name="btnConfirmDeleteAccount" value="Yes">Delete</button>
                                        <button id="btnCancelDeleteAccount" class="btn btn-inline" name="btnCancelDeleteAccount" value="Cancel">Cancel</button>
                                    </div>
                                </div>
                                <form  id="deleteAccountForm" action="deleteAccount.php" method="post" hidden>
                                    <div class="form-group">
                                        <div id="deleteAccountError" class="message error alert"></div>
                                        <input type="password" class="form-control" name="deletePassword" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" class="pwToggle" />
                                        <span>Show Password</span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-submit btn-inline" name="btnDeleteAccount" value="Yes">Delete</button>
                                        <button class="btn btn-cancel btn-inline" name="btnCancelDelete" value="Cancel">Cancel</button>
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
    <script type="text/javascript" src="js/userSettings.js"></script>
</body>
</html>
