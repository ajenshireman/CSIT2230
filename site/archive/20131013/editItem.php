<?php
$currentPage = "";

require("includes/head.php");

?>
<body>
  <div id="wrap">
  <!-- navbar, fixed to top of screen -->
  <?php include("./includes/topnav.php"); ?>
  <!-- /navbar -->
  
  <!-- begin page content -->
  <div class="container">
    <div id="body">
      <form class="form-horizontal infoInput" role="form">
        <div class="form-group">
          <label for="titleInput" class="col-xs-12 col-sm-2 control-label">Title</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="titleInput" placeholder="Title" />
          </div>
        </div>
         <div class="form-group">
          <label for="yearInput" class="col-xs-12 col-sm-2 control-label">Year</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="yearInput" placeholder="Year" />
          </div>
        </div>
        <div class="form-group">
          <label for="descriptionInput" class="col-xs-12 col-sm-2 control-label">Description</label>
          <div class="col-xs-12 col-sm-10">
            <input type="text" class="form-control" id="descriptionInput" placeholder="Description" />
          </div>
        </div>
        <div class="form-group">
          <label for="studioInput" class="col-xs-12 col-sm-2 control-label">Studio</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="studioInput" placeholder="Studio" />
          </div>
        </div>
        <div class="form-group">
          <label for="producerInput" class="col-xs-12 col-sm-2 control-label">Producer</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="producerInput" placeholder="Producer" />
          </div>
        </div>
        <div class="form-group">
          <label for="directorInput" class="col-xs-12 col-sm-2 control-label">Director</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="directorInput" placeholder="Director" />
          </div>
        </div>
        <div class="form-group">
          <label for="actorsInput" class="col-xs-12 col-sm-2 control-label">Actors</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="actorsInput" placeholder="Starring" />
          </div>
        </div>
        <div class="form-group">
          <label for="genreInput" class="col-xs-12 col-sm-2 control-label">Genre</label>
          <div class="co-xs-12 col-sm-10">
            <input type="text" class="form-control" id="genreInput" placeholder="Genre" />
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
  <?php include("./includes/pagefooter.php"); ?>
  <!-- /footer -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  
  <!-- Custom JavaScript -->
  <script type="text/javascript" src="./js/script.js"></script>
  
</body>
</html>
