<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal by Seg";
$page['desc'] = "A proposal for updating and expanding the Steam WebAPI. Authored by John 'Seg' Seggerson.";
include_once("./template/html_start.php");
?>

<div class="jumbotron">
  <h1>Steam WebAPI Proposal</h1>
  <p class="lead">A proposal from <a href="http://theseg.github.io/" target="_blank">John "Seg" Seggerson</a> for extending the <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API" target="_blank">Steam WebAPI</a>.</p>
</div>
<br>
<div class="container">

  <div class="row-fluid">
  
    <div class="span5 offset1">
      <h3><a href="./ISteamHub.php"><i class="icon-group"></i> Community Hubs</a></h3>
      <p>
        Hubs are collections of users around a game, specific interest, or external community.
        Currently community API support is via deprecated XML support of groups. This document puts forth
        a new interface and methods for Steam WebAPI access for hubs.
      </p>
      <p><a class="btn btn-large btn-inverse" href="./ISteamHub.php"><i class="icon-group"></i> ISteamHub</a></p>

    </div>

    <div class="span5 offset1">
      <h3><a href="./ISteamApps.php"><i class="icon-gamepad"></i> Game &amp; App Information</a></h3>
      <p>Provides group metadata including name, URL, and other basic information about the group.</p>
      <p><a class="btn btn-large btn-inverse" href="./ISteamApps.php"><i class="icon-gamepad"></i> ISteamApps</a></p>
    </div>
  
  </div>
  
</div>
<?php include_once("./template/html_end.php"); ?>