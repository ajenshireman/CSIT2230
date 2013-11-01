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
    <script>var currentPage = 'chanelog';</script>
    <!-- Wrapper for page content -->
    <div id="wrap">
      <!-- Navbar, fixed to top of screen -->
      <?php include("includes/topnav.php"); ?>
      <!-- /navbar -->
        
        <!-- Begin page content -->
        <div class="container" id="body">
            
            <div class="text-left">
                <h3>Changelog</h3>
		<p>
		  <h4><a href="archive/2011005">2013-10-05</a></h4>
		  <ul>
		    <li><strong>PHP</strong>
		      <ul>
			<li>Replaced identical parts of the pages with php includes. This will allow easier changes to the Nav-bar and footer, and automaticaly apply the cahnges across the site.<br />
			  Still to do: apply the "active" class to the appropriate link using JavaScript.
			</li>
		      </ul>
		    </li>
		    <li><strong>JavaScript</strong>
		      <ul>
			<li>index.html now redirects to main.php. This is done using <code>window.location.replace</code> so the redirect doesn't show in the browser history.</li>
			<li>A small script now highlights the link for the current page in the navbar.</li>
		      </ul>
		    </li>
		    <li><strong>Design/Presentation</strong>
		      <ul>
			<li>Replaced the placeholder image with mutiple movie cover images.</li>
			<li>Replaced the repetitive mian page with some static data that shoud better represent the finished product.</li>
			<li>Did the same with the Collection Grid page.</li>
			<li>Added a link to the Collection Grid to the nav bar. This causes the search box to relocate below the rest of the nav bar on small screen sizes. Still working on a fix for this.</li>
			<li>Removed the searchbar for now. It was nonfunctional and screwing up the layout.</li>
		      </ul>
		    </li>
		  </ul>
		</p>
		<p>
		  <h4><a href="archive/20130928">2013-09-28</a></h4>
		  <ul>
		    <li>Prepared site for showing curent progress to the class</li>
		    <li>Made mockups for <a href="img/mobileLayout.jpg">mobile</a> and <a href="img/desktopLayout.jpg">desktop</a> layouts.</li>
		    <li><strong>JavaScript/jQuery</strong>
		      <ul>
			<li>Added grid veiw of collection, accesed by clicking on the collection's title on the main page.</li>
			<li>In the grid view, clicking a collection item brings up the item info in a modal dialog</li>
		      </ul>
		    </li>
		  </ul>
		</p>
		<p>
		  <h4><a href="archive/20130922/index.html">2013-09-22</a></h4>
		  <ul>
		    <li><strong>JavaScript/jQuery</strong>
		      <ul>
			<li>Cicking on the small item images now brings up the Item information pane</li>
			<li>Attemped to hook up js that will change the rating of a movie on hover/cick. This is not working</li>
		      </ul>
		    </li>
		    <li><strong>Design</strong>
		      <ul>
			<li>Added the search bar to the about and changelog pages</li>
			<li>Changed the "what's New" link to a dropdown with inks to the changeog and the archive page</li>
			<li>Began layout for additonal pages for both desktop and mobile</li>
			<li>Took a closer look at Foundation. Foundation provides built-in support for side menues which will work great for the mobile site. Moving to Foundation is still feasable at this point, but will be a hassle. The same style menus should be possibe to implement using Bootstrap but wi take some time to figure out.</li>
		      </ul>
		    </li>
		    <li><strong>CSS</strong>
		      <ul>
			<li>Began prototyping additional pages: Collection grid veiw, Item Information input form</li>
			<li>Attempted to add close button to the Info pane. This is not working propetly</li>
		      </ul>
		    </li>
		  </ul>
		</p>
                <p>
                  <h4><a href="archive/20130915/index.html">2013-09-15</a></h4>
                  <ul>
                    <li><strong>CSS</strong>
                      <ul>
                        <li>Implemented Bootstrap's grid system to provide a responsive layout for the collection and info panes.
                      </ul>
                    </li>
                  </ul>
                </p>
                <p>
                    <h4><a href="archive/20130908/index.html">2013-09-08</a></h4>
                    <ul>
                        <li><strong>CSS</strong>
                            <ul>
                                <li>Site now uses <a href="getbootstrap.com">Bootstrap</a> as a CSS framework.</li>
                                <li>Added <a href="http://necolas.github.io/normalize.css/">normalize.css</a> to improve cross-browser rendering.</li>
                                <li>Explored Bootstrap custom classes and learned how to override them properly.</li>
                                <li>Added a footer to the bottom of page content.</li>
                            </ul>
                        </li>
                        <li>Created <a href="archive/index.html">archive</a> for weekly site builds. Click the date in the changelog to see the site as it existed that week.</li>
                        <li>Created a <a href="img/layoutTest3.jpg">mock-up</a> for the site's main page layout. JavaScript will be needed to make it work.</li>
                    </ul>
                <p>
                <p>
                    <h4><a href="archive/20130901/index.html">2013-09-01</a></h4>
                    <ul>
                        <li>Created the <a href="about.html">about</a> and <a href="#">changelog</a> pages</li>
                        <li>Created core css and custom css for the project</li>
                        <li>Began experimenting with css to create the proper look and feel for the site</li>
                        <li>Uploaded the whole thing to ps11 and linked it on my <a href="http://blogs.pstcc.edu/awshireman/" target="blank">blog</a></li>
                    </ul>
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
