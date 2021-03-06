<?php
$currentPage = 'collection';
require_once 'includes/head.php';;
?>
<body>
  <div id="wrap">
    <!-- navbar, fixed to top of screen -->
    <?php include("includes/topnav.php"); ?>
    <!-- /navbar -->
    
    <!-- begin page content -->
    <div class="container">
      <div id="body">
	<div class="row">
	  <nav class="col-xs-12 col-sm-3 col-md-3 side-nav">
	      <ul class="nav">
		<li class="nav nav-pill nav-stacked"><a href="#" id="collectionMain">Main Collection</a></li>
		<li class="nav nav-pill nav-stacked"><a href="#" id="collectionComedy">Comedy</a></li>
		<li class="nav nav-pill nav-stacked"><a href="#" id="collectionComic">Comic Book Movies</a></li>
		<li class="nav nav-pill nav-stacked"><a href="#" id="collectionHorror">Horror</a></li>
		<li class="nav nav-pill nav-stacked"><a href="#" id="collectionscifi">Sci-Fi</a></li>
	      </ul>
	  </nav>
	  <div class="col-xs-12 col-sm-9 col-md-9">
	    <div class="col-xs-12 collection-header">
	      <h3 id="collectionTitle">Main Collection</h3>
	    </div>
	    <div class="col-xs-12 collection-grid" id="collectionGrid">
	      <?php include ('includes/mainCollection.php') ?>
	    </div>
	  </div>
	</div>
	
	<!-- modal dialog for item info -->
	<div class="modal fade" id="itemInfo" tabindex=-1 role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-itemInfo">
	    <div class="modal-content">
	      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      </div>
	      <div class="modal-body">
		<div class="row itemInfo">
		  <div class="col-xs-12 col-sm-4 col-md-3 text-center"> 
		    <img src="img/covers/300/captainAmericaTheFirstAvenger_300.jpg" class="itemImage" />
		  </div>
		  <div class="col-xs-12 col-sm-8 col-md-9">
		    <div class="col-xs-12 itemInfo-header"><!--8 col-sm-9 col-md-10">-->
		      <h4>Movie Title (Year)</h4>
		    </div>
		    <div class="col-xs-12 itemInfo-header">
		      <button type="button" class="btn btn-default btn-collection" id="rating">
			<span class="glyphicon glyphicon-star"> </span>
			<span class="glyphicon glyphicon-star"> </span>
			<span class="glyphicon glyphicon-star"> </span>
			<span class="glyphicon glyphicon-star"> </span>
			<span class="glyphicon glyphicon-star"> </span>
		      </button>
		      <button type="button" class="btn btn-default btn-collection" id="favorite">
			<span class="glyphicon glyphicon-thumbs-up"> </span>
		      </button>
		    </div>
		    <div class="col-xs-12 itemDetails" id="details">
		      <ul class="list-group">
			<li class="list-group-item" id="description">Description: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</li>
			<li class="list-group-item" id="format">Format: DVD, Blu-ray, Digital</li>
			<li class="list-group-item" id="studio">Studio:</li>
			<li class="list-group-item" id="prducer">Producer:</li>
			<li class="list-group-item" id="director">Director:</li>
			<li class="list-group-item" id="actors">Starring:</li>
			<li class="list-group-item" id="genre">Genre</li>
			<li class="list-group-item" id="tags">[Action] [Super Heroes] [Comic Book] [Avengers]</li>
		      </ul>
		    </div>
		  </div>
		</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /.modal -->
	
	<!-- modal dialog for editing item info -->
	<div class="modal fade" id="" tabindex=-1 role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      </div>
	      <div class="modal-body">
		
	      </div>
	      <div class="modal-footer">
		
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
      </div>
      <!-- / #body -->
    </div>
    <!-- .container -->
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
  <script type="text/javascript" src="js/Collection_old.js"></script>
</body>
</html>
