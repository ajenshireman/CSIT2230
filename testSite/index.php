<?php
$currentPage = 'main';
require_once 'includes/global.php';
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
      <div class="collection">
	<div class="row collection-header">
	  <div class="col-xs-12 col-sm-8 col-md-9">
	    <h1>Main Collection</h1>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-3">
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-random"></span> Random
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-edit"></span> Edit
	    </button>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 collection-slider">
	    <?php include ('includes/mainCollection.php') ?>
	  </div>
	</div>
      </div>
      
      <div class="row itemInfo" hidden>
	<div class="col-xs-12 col-sm-4 col-md-3 text-center">           
	  <img src="img/covers/300/captainAmericaTheFirstAvenger_300.jpg" class="itemImage" />
	</div>
	<div class="col-xs-12 col-sm-8 col-md-9">
	  <div class="col-xs-12 itemInfo-header"><!--8 col-sm-9 col-md-10">-->
	    <h4>Movie Title (Year)</h4>
	  </div>
	  <div class="col-xs-12 itemInfo-header">
	    <button type="button" class="btn btn-default btn-collection btn-rating" id="rating">
	      <span class="glyphicon glyphicon-star" id="rating1"> </span>
	      <span class="glyphicon glyphicon-star" id="rating2"> </span>
	      <span class="glyphicon glyphicon-star" id="rating3"> </span>
	      <span class="glyphicon glyphicon-star" id="rating4"> </span>
	      <span class="glyphicon glyphicon-star" id="rating5"> </span>
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-thumbs-up"> </span>
	    </button>
	  </div>
	  <div class="col-xs-12 itemDetails">
	    <ul class="list-group">
	      <li class="list-group-item" id="description">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita officia quod esse doloremque architecto quaerat reiciendis voluptatum error. Quis voluptatem eos minus blanditiis expedita modi autem nemo consequuntur possimus ex.</li>
	      <li class="list-group-item" id="formats">Format: DVD, Blu-ray, Digital</li>
	      <li class="list-group-item" id="studio">Studio:</li>
	      <li class="list-group-item" id="producer">Producer:</li>
	      <li class="list-group-item" id="director">Director:</li>
	      <li class="list-group-item" id="actors">Starring:</li>
	      <li class="list-group-item" id="genre">Genre</li>
	      <li class="list-group-item" id="tags">[Action] [Super Heroes] [Comic Book] [Avengers]</li>
	    </ul>
	  </div>
	</div>
      </div>
      
      <div class="collection">
	<div class="row collection-header">
	  <div class="col-xs-12 col-sm-8 col-md-9">
	    <h1>Comedy</h1>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-3">
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-random"></span> Random
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-edit"></span> Edit
	    </button>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 collection-slider">
	    <?php include ('includes/comedy.php') ?>
	  </div>
	</div>
      </div>
      
      <div class="collection">
	<div class="row collection-header">
	  <div class="col-xs-12 col-sm-8 col-md-9">
	    <h1>Comic Book Movies</h1>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-3">
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-random"></span> Random
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-edit"></span> Edit
	    </button>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 collection-slider">
	    <?php include ('includes/comic.php') ?>
	  </div>
	</div>
      </div>
      
      <div class="collection">
	<div class="row collection-header">
	  <div class="col-xs-12 col-sm-8 col-md-9">
	    <h1>Horror</h1>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-3">
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-random"></span> Random
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-edit"></span> Edit
	    </button>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 collection-slider">
	    <?php include ('includes/horror.php') ?>
	  </div>
	</div>
      </div>
      
      <div class="collection">
	<div class="row collection-header">
	  <div class="col-xs-12 col-sm-8 col-md-9">
	    <h1>Sci-Fi</h1>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-3">
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-random"></span> Random
	    </button>
	    <button type="button" class="btn btn-default btn-collection">
	      <span class="glyphicon glyphicon-edit"></span> Edit
	    </button>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 collection-slider">
	    <?php include ('includes/scifi.php') ?>
	  </div>
	</div>
      </div>
      
    </div>
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
