<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="ico/favicon.png" />

    <title>Collection Manager</title>
	
	<!-- Normalize.css -->
	<link href="css/normalize.css" rel="stylesheet" />
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Custom styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <script>var currentPage = 'about';</script>
    <!-- Wrapper for page content -->
    <div id="wrap">
      <!-- Navbar, fixed to top of screen -->
      <?php include("includes/topnav.php"); ?>
      <!-- /navbar -->
        
        <!-- Begin page content -->
        <div class="container" id="body">
            
            <div class="text-left">
                <h2>About Collection Manager</h2>
                <p>
                    Collection Manager is a web-based application for cataloguing, searching, and displaying collections. This first version is made specifically for movie collections, but once completed it will be expanded for collections of any sort.
                </p>
                <p>
                    Collection Manager will allow you to keep track of your movies, what format you have them in, and other important information such as release year, director, actors, and much more.
                </p>
                <p>
                    Planned features include:
                    <ul>
                        <li>Search movies by title, year, director, genre, etc.</li>
                        <li>Custom tags for movies</li>
                        <li>Rating system for your movies</li>
                        <li>Display your libray on a virtual shelf</li>
                        <li>Stream digital media directly to your browser</li>
                        <li>Pick a movie to watch at random</li>
                        <li>Mobile intergration: do all this from your Android (and maybe iOS) device</li>
                    </ul>
                </p>
                <p>
                    This is a semester-long project for CSIT 2230: Intro to Internet Software Dev at Pelllissippi State Community College.
                </p>
            </div>

        </div><!-- /.container -->
        <!-- /content -->
    </div>
    <!-- /wrapper -->
        
    <!-- Footer, stuck to bottom of content or bottom of page if content is shorter than window height -->
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
