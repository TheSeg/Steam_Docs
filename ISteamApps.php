<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamApps";
$page['desc'] = "ISteamApps, a proposal WebAPI interface for Steam App Information. Authored by John 'Seg' Seggerson.";
include_once("./template/html_start.php");
?>
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1><i class="icon-gamepad"></i> ISteamApps</h1>
    <p class="lead">A Steam WebAPI interface for Steam App Information.</p>
  </div>
</header>

<div class="container">
      
      <!-- Docs Nav -->
      <div class="row">
        <div id="floatNavbar" class="span3 bs-docs-sidebar">
          <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#General">General Notes</a></li>
            <li><a href="#GetAppData">GetAppData</a></li>
          </ul>
        </div>
        
        
        <div class="span9">          
          
          <?php
          
            include("./docs/ISteamApps/General.php");
            include("./docs/ISteamApps/GetAppData.php");
          
          ?>
          
          
        </div><!--/span-->
      
      </div><!--/row-->
    </div>

<?php include_once("./template/html_end.php"); ?>