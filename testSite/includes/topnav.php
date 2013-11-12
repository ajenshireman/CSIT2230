<script>
  function login () {
    
  }
</script>

<header class="navbar navbar-inverse navbar-fixed-top">
  <div class="container container-navbar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Collection Manager</a>
    </div>
    <nav class="navbar-collapse collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li id="topnav-home"<?php if ( $currentPage == 'main' ) { ?> class="active"<?php }?>><a href="main.php">Home</a></li>
        <li id="topnav-collection"<?php if ( $currentPage == 'collection' ) { ?> class="active"<?php }?>><a href="collectionGrid.php">Collections</a></li>
        <li id="topnav-about"<?php if ( $currentPage == 'about' ) { ?> class="active"<?php }?>><a href="about.php">About</a></li>
        <li<?php if ( $currentPage == 'changelog' || $currentPage == 'archive' ) { ?> class="dropdown active"<?php } else { ?> class="dropdown"<?php } ?> id="topnav-whatsNew">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">What's New <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="topnav-changelog"<?php if ( $currentPage == 'changelog' ) { ?> class="active"<?php }?>><a href="changelog.php">Change Log</a></li>
            <li id="topnav-archive"<?php if ( $currentPage == 'archive' ) { ?> class="active"<?php }?>><a href="archive/index.html">Archive</a></li>
          </ul>
        </li>
      </ul>
      <!-- Log in Form -->
      <ul class="nav navbar-nav navbar-right" id="login">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in / Register<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?php
            if ( isset($_SESSION['logged_in']) ) {
              
            }
            ?>
            <?php
            <li>
              <form role="form" id="loginForm" method="post" action="login.php">
                <div class="form-group">
                  <div id="loginError" style="display: block">
                    Incorrect username or password
                  </div>
                  <input id="loginUsername" type="text" class="loginForm-control" size="30"placeholder="Username" />
                  <input id="loginPassword" type="text" class="loginForm-control" size="30"placeholder="Password" />
                </div>
                <input type="button" class="btn btn-submit" name="btnLogIn" value="Log In" />
                <div id="register">
                  Not a member? <a href="register.php">Register</a>
                </div>
              </form>
            </li>
            ?>
          </ul>
        </li>
      </ul>
      <!-- /Log in form -->
      <!-- Search bar --
      <form class="navbar-form">
        <span class="input-group">
          <input type="search" class="form-control pull-right" id="searchBox" placeholder="Search" />
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default" id="searchButton">
                <span class=" glyphicon glyphicon-search"></span>
              </button>
            </span>
        </span>
      </form>
      <!-- /searchbar -->
    </nav><!--/.nav-collapse -->
  </div>
</header>