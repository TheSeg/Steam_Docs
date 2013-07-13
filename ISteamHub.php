<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamHub";
$page['desc'] = "ISteamHub, a proposal WebAPI interface for Steam Community Hubs. Authored by John 'Seg' Seggerson.";
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
  <section id="navigation">
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#top"><i class="icon-collapse-top"></i></a></li>
      <li><a href="#General">Notes</a></li>
      <li><a href="#ResolveVanityURL">::ResolveVanityURL</a></li>
      <li><a href="#ResolveAppID">::ResolveAppID</a></li>
      <li><a href="#GetSummaries">::GetSummaries</a></li>
      <li><a href="#GetAnnouncements">::GetAnnouncements</a></li>
      <li><a href="#GetEvents">::GetEvents</a></li>
      <li><a href="#GetStatus">::GetStatus</a></li>
      <li><a href="#GetMembers">::GetMembers</a></li>
      <li><a href="#GetPermissions">::GetPermissions</a></li>
    </ul>
  </div>
  </section>
  
  <?php
  
    include("./docs/ISteamHub/General.php");
    include("./docs/ISteamHub/ResolveVanityURL.php");
    include("./docs/ISteamHub/ResolveAppID.php");
    include("./docs/ISteamHub/GetSummaries.php");
    include("./docs/ISteamHub/GetAnnouncements.php");
    include("./docs/ISteamHub/GetEvents.php");
    include("./docs/ISteamHub/GetStatus.php");
    include("./docs/ISteamHub/GetMembers.php");
    include("./docs/ISteamHub/GetPermissions.php");
  
  ?>
</div>

<?php include_once("./template/html_end.php"); ?>