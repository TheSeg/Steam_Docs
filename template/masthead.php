    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./">Steam WebAPI Proposal</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php if ( $SCRIPT_NAME == "index.php" ) { echo 'class="active" '; }?>><a href="./index.php">Home</a></li>
              <li <?php if ( $SCRIPT_NAME == "about.php" ) { echo 'class="active" '; }?>><a href="./about.php">About</a></li>
              <li class="dropdown <?php if ( $SCRIPT_NAME == "isteamgroup.php" ) { echo 'active '; }?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ISteamHub <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="./ISteamHub.php">Overview</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Methods</li>
                  <li><a href="./ISteamHub.php#ResolveVanityURL">ResolveVanityURL</a></li>
                  <li><a href="./ISteamHub.php#ResolveGameID">ResolveGameID</a></li>
                  <li><a href="./ISteamHub.php#GetSummaries">GetSummaries</a></li>
                  <li><a href="./ISteamHub.php#GetAnnouncements">GetAnnouncements</a></li>
                  <li><a href="./ISteamHub.php#GetEvents">GetEvents</a></li>
                  <li><a href="./ISteamHub.php#GetStatus">GetStatus</a></li>
                  <li><a href="./ISteamHub.php#GetMembers">GetMembers</a></li>
                  <li><a href="./ISteamHub.php#GetPermissions">GetPermissions</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
