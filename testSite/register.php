<?php
$currentPage = 'main';
require_once 'includes/global.php';

// Initialize variables used in the form
$username = '';
$password = '';
$password_confirm = '';
$email = '';

// If the user pressed cancel, return them to the index
if ( isset($_POST['btnCancel']) ) {
    // Go to the index
    header('Location: ./index.php');
    die();
}

// Check to see if the form has been submitted
if ( isset($_POST['btnSubmit']) ) {
    // Retreive the post variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];
    
    // Initialize variables for form validation
    $success = true;
    //$userTools = new UserTools();
    
    // Validate that the form was filled out correctly
    // Check to see if the username already exists
    if ( $userTools->checkUsernameExists($username) ) {
        $error = "Username already in use.";
        $success = false;
    }
    // check to see if the passwords match
    else if ( $password != $password_confirm ) {
        $error = "Passwords do not match.";
	$success = false;
    }
    
    if ( $success ) {
        // Package the data for saving in a new user object
        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'email'    => $email
        );
        
        // Create a new user object
        $newUser = new User($data);
        
        // Save the new user to the database
        $newUser->save(true);
        
        // Log them in
        $userTools->login($username, $password);
        
        // Redirect them to the index
        header("Location: index.php");
        //print '<a href="index.php">index</a> <a href="logout.php">Log Out</a>';
    }
    
}

require_once('./includes/head.php');

?>

<body>
  <script>//var currentPage = 'main';</script>
  <div id="wrap">
  <!-- navbar, fixed to top of screen -->
  <?php include("includes/topnav.php"); ?>
  <!-- /navbar -->
  
  <!-- begin page content -->
  <div class="container">
      
    <div id="body">
      <!-- Error messages -->
      <div>
	<?php
	
	?>
      </div>
      <!-- Registration form -->
      <form role="form" class="form-horizontal" method="post" action="register.php">
        <div class="form-group">
	    <label for="input_username" class="control-label">Username: </label>
	    <input type="text" id="input_username" class="form-control" name="username" placeholder="Username" required />
	    <label for="input_password" class="control-label">Password: </label>
	    <input type="password" id="input_password" class="form-control" name="password" placeholder="" required />
	    <label for="confirm_password" class="control-label">Re-type Password: </label>
	    <input type="password" id="confirm_password" class="form-control" name="password_confirm" placeholder="" required />
	    <label for="input_email" class="control-label">Email: </label>
	    <input type="text" id="input_email" class="form-control" name="email" placeholder="Email" required />
	</div>
        <div class="form-group">
	    <button type="submit" name="btnSubmit" value="Submit">Submit</button>
	    <button type="cancel" name="btnCancel" value="Cancel" formnovalidate>Cancel</button>
	</div>
    </form>
    </div>
    <!-- /body -->
  </div><!-- /.container -->
  </div>
  <!-- /wrapper -->
  
  <!-- sticky footer -->
  <?php include("includes/pagefooter.php"); ?>
  <!-- /footer -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <!-- Custom JavaScript -->
  <script type="text/javascript" src="js/script.js"></script>
  
  <script>setCurrentPage(currentPage)</script>
</body>
</html>
