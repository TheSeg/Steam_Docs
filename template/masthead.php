
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
          <li class="<?php if ( strtolower($SCRIPT_NAME) == "isteamhub.php" ) { echo 'active '; }?>">
            <a href="./ISteamHub.php"><i class="icon-group"></i> ISteamHub</a>
          </li>
          <li class="<?php if ( strtolower($SCRIPT_NAME) == "isteamapps.php" ) { echo 'active '; }?>">
            <a href="./ISteamApps.php"><i class="icon-gamepad"></i> ISteamApps</a>
          </li>
          <li <?php if ( strtolower($SCRIPT_NAME) == "about.php" ) { echo 'class="active" '; }?>>
            <a href="./about.php"><i class="icon-info-sign"></i> About</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

