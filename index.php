<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposals by Seg";
$page['desc'] = "Steam WebAPI Proposals by John 'Seg' Seggerson.";
include_once("./template/html_start.php");
?>
<div class="container">
      <div class="jumbotron">
        <h1>Steam WebAPI Proposals</h1>
        <p class="lead">A proposal from <a href="http://theseg.github.io/" target="_blank">John "Seg" Seggerson</a> for extending the <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API" target="_blank">Steam WebAPI</a>.</p>
      </div>
      
      <div class="row-fluid marketing">
        
        <div class="span4 offset1">
          <h3><i class="icon-group"></i> Community Hubs</h3>
          <p>
            Hubs are collections of users around a game, specific interest, or external community.
            Currently community API support is via deprecated XML support of groups. This document puts forth
            a new interface and methods for Steam WebAPI access for hubs.
          </p>
          <p><a class="btn btn-large btn-info" href="./ISteamHub.php"><i class="icon-group"></i> ISteamHub</a></p>

        </div>

        <div class="span4 offset2">
          <h3><i class="icon-gamepad"></i> Game &amp; App Information</h3>
          <p>Provides group metadata including name, URL, and other basic information about the group.</p>
          <p><a class="btn btn-large btn-info disabled"><i class="icon-gamepad"></i> Game &amp; App Information</a></p>

        </div>
        
      </div>

<?php include_once("./template/html_end.php"); ?>