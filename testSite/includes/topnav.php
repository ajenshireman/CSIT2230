<!-- Navigation bar common to all pages -->
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
      <!-- Main Navigation links, on left side -->
      <ul class="nav navbar-nav">
        <!-- Link to main page. Visible to all -->
        <li id="topnav-home"<?php if ( $currentPage == 'main' ) { ?> class="active"<?php }?>><a href="index.php">Home</a></li>
        <!-- Pages only vivible when logged in -->
        <?php
        if ( isset($_SESSION['logged_in']) ) {?>
        <li id="topnav-collection"<?php if ( $currentPage == 'collection' ) { ?> class="active"<?php }?>><a href="collectionGrid.php">Collections</a></li>
        <?php } ?>
        <!-- About, Changelog, and Archive. Visible to all -->
        <li<?php if ( $currentPage == 'about' || $currentPage == 'changelog' || $currentPage == 'archive' ) { ?> class="dropdown active"<?php } else { ?> class="dropdown"<?php } ?> id="topnav-whatsNew">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="topnav-about"<?php if ( $currentPage == 'about' ) { ?> class="active"<?php }?>><a href="about.php">About</a></li>
            <li id="topnav-changelog"<?php if ( $currentPage == 'changelog' ) { ?> class="active"<?php }?>><a href="changelog.php">Change Log</a></li>
            <li id="topnav-archive"<?php if ( $currentPage == 'archive' ) { ?> class="active"<?php }?>><a href="archive/index.html">Archive</a></li>
          </ul>
        </li>
      </ul>
      <!-- Forms for user log in and registration, on right side -->
      <ul class="nav navbar-nav navbar-right" id="login-register">
        <?php
        if ( isset($_SESSION['logged_in']) ) {?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user->getUsername() ?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
        <?php
        } else {?>
        <!-- Log in -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in / Register<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="login-toggle" class="form-toggle">
              <form role="form" id="loginForm" method="post" action="login.php">
                <div id="loginError" class="message error"></div>
                <div class="form-group">
                  <input id="loginUsername" name="loginUsername" type="text" class="loginForm-control" size="30"placeholder="Username" />
                  <input id="loginPassword" name="loginPassword" type="password" class="loginForm-control" size="30"placeholder="Password" />
                </div>
                <div class="message">
                  <input type="checkbox" name="rememberMe" value="Remember Me" /> Remember Me
                  <input type="checkbox" class="pwToggle" name="showLoginPW" value="Show Password" /> Show Password
                </div>
                <button type="submit" class="btn btn-submit btn-login" id="btnLogin" name="btnLogin" value="Log In">Log In</button>
                <div id="toggle-login" class="message">
                  Not a member? <a href="#" class="toggle-form">Register</a>
                </div>
              </form>
            </li>
            <!-- /Log in -->
            <!-- Register -->
            <li id="register-toggle" class="form-toggle">
              <form role="form" id="registerForm" method="post" action="register.php">
                <div id="registerError" class="message error"></div>
                <div class="form-group">
                  <input id="registerUsername" name="registerUsername" type="text" class="loginForm-control" size="30"placeholder="Username" />
                  <input id="registerPassword" name="registerPassword" type="password" class="loginForm-control" size="30"placeholder="Password" />
                  <input id="registerConfirmPassword" name="registerConfirmPassword" type="password" class="loginForm-control" size="30"placeholder="ConfirmPassword" />
                  <input id="registerEmail" name="registerEmail" type="text" class="loginForm-control" size="30"placeholder="email" />
                </div>
                <div class="message">
                  <input type="checkbox" class="pwToggle" name="showRegisterPW" value="Show Password" /> Show Password
                </div>
                <button type="submit" class="btn btn-submit btn-register" id="btnRegister" name="btnRegister" value="Log In">Register</button>
                <div id="toggle-register" class="message">
                  Already a member? <a href="#" class="toggle-form">Log in</a>
                </div>
              </form>
            </li>
          </ul>
        </li>
        <!-- /Register -->
        <?php } ?>
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