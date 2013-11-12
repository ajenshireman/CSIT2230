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
        <li id="topnav-home"><a href="main.php">Home</a></li>
        <li id="topnav-collection"><a href="collectionGrid.php">Collections</a></li>
        <li id="topnav-about"><a href="about.php">About</a></li>
        <li class="dropdown" id="topnav-whatsNew">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">What's New <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="topnav-changelog"><a href="changelog.php">Change Log</a></li>
            <li id="topnav-archive"><a href="archive/index.html">Archive</a></li>
          </ul>
        </li>
      </ul>
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

<script type="text/javascript">
  function setCurrentPage ( currentPage ) {
    switch ( currentPage ) {
      case 'main':
      case 'index':
      case 'home':
        $('#topnav-home').addClass('active');
        break;
      case 'collection':
        $('#topnav-collection').addClass('active');
        break;
      case 'about':
        $('#topnav-about').addClass('active');
        break;
      case 'changelog':
        $('#topnav-changelog').addClass('active');
        $('#topnav-whatsNew').addClass('active');
        break;
      default:
        break;
    }
  }
</script>