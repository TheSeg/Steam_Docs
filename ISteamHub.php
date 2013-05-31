<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamHub";
$page['desc'] = "ISteamHub, an interface for Steam Hubs.";
include_once("./template/html_start.php");
?>
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1><i class="icon-group"></i> ISteamHub</h1>
    <p class="lead">A Steam WebAPI interface for Steam Community Hubs.</p>
  </div>
</header>

<div class="container">
      
      <!-- Docs Nav -->
      <div class="row">
        <div id="floatNavbar" class="span3 bs-docs-sidebar">
          <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#General">General Notes</a></li>
            <li><a href="#ResolveVanityURL">ResolveVanityURL</a></li>
            <li><a href="#ResolveGameID">ResolveGameID</a></li>
            <li><a href="#GetSummaries">GetSummaries</a></li>
            <li><a href="#GetAnnouncements">GetAnnouncements</a></li>
            <li><a href="#GetEvents">GetEvents</a></li>
            <li><a href="#GetStatus">GetStatus</a></li>
            <li><a href="#GetMembers">GetMembers</a></li>
            <li><a href="#GetPermissions">GetPermissions</a></li>
          </ul>
        </div>
        
        
        <div class="span9">          
          
          <?php
          
            include("./docs/ISteamHub/General.php");
            include("./docs/ISteamHub/ResolveVanityURL.php");
            include("./docs/ISteamHub/ResolveGameID.php");
            include("./docs/ISteamHub/GetSummaries.php");
            include("./docs/ISteamHub/GetAnnouncements.php");
            include("./docs/ISteamHub/GetEvents.php");
            include("./docs/ISteamHub/GetStatus.php");
            include("./docs/ISteamHub/GetMembers.php");
            include("./docs/ISteamHub/GetPermissions.php");
          
          ?>
          
          
        </div><!--/span-->
      
      </div><!--/row-->
    </div>

<?php include_once("./template/html_end.php"); ?>