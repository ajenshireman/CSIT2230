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
      <!-- Item Information Pane -->
      <div class="row itemInfo" id="info">
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
