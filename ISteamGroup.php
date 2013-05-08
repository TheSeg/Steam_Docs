<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamGroup";
$page['desc'] = "Steam WebAPI Proposal: ISteamGroup, a interface for Steam Community &amp; Game Groups.";
include_once("./template/html_start.php");
?>
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>ISteamHub</h1>
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
            <li><a href="#GetGroupSummaries">GetSummaries</a></li>
            <li><a href="#GetAnnouncements">GetAnnouncements</a></li>
            <li><a href="#GetEvents">GetEvents</a></li>
            <li><a href="#GetGroupStatus">GetStatus</a></li>
            <li><a href="#GetGroupMembers">GetMembers</a></li>
            <li><a href="#GetPermissionsScheme">GetPermissionsScheme</a></li>
          </ul>
        </div>
        
        
        <div class="span9">          
          
          <?php
          
            include("./docs/ISteamGroup/General.php");
            include("./docs/ISteamGroup/ResolveVanityURL.php");
            include("./docs/ISteamGroup/ResolveGameID.php");
            include("./docs/ISteamGroup/GetGroupSummeries.php");
            include("./docs/ISteamGroup/GetAnnouncements.php");
            include("./docs/ISteamGroup/GetEvents.php");
            include("./docs/ISteamGroup/GetGroupStatus.php");
            include("./docs/ISteamGroup/GetGroupMembers.php");
            include("./docs/ISteamGroup/GetPermissionsScheme.php");
          
          ?>
          
          
        </div><!--/span-->
      
      </div><!--/row-->
    </div>

<?php include_once("./template/html_end.php"); ?>