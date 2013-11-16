<?php require("includes/head.php"); ?>
<body>
  <script>var currentPage = 'collectionNew';</script>
  <div id="wrap">
  <!-- navbar, fixed to top of screen -->
  <?php include("includes/topnav.php"); ?>
  <!-- /navbar -->
  
  <!-- begin page content -->
  <div class="container">
    <div id="body">
      <form class="form-horizontal infoInput" role="form">
	<div class="form-group">
	  <label for="nameInput" class="col-xs-12 col-sm-4 control-label">Collection Name</label>
	  <div class="co-xs-12 col-sm-8">
	    <input type="text" class="form-control" id="nameInput" placeholder="Title" />
	  </div>
	</div>
	<div class="form-group">
	  <label for="" class="col-xs-12 col-sm-4 control-label">Type</label>
	  <div class="co-xs-12 col-sm-8">
	    <select name="" id="" class="form-control">
	      <option value=""></option>
	      <option value=""></option>
	      <option value=""></option>
	    </select>
	  </div>
	</div>
	
	<div class="form-group">
	  <div class="col-xs-12 col-sm-offset-2 col-sm-10">
	    <button type="submit" class="btn btn-default">Submit</button>
	    <button type="cancel" class="btn btn-default">Cancel</button>
	  </div>
	</div>
      </form>
    </div><!-- /body -->
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
