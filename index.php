<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposals by Seg";
$page['desc'] = "Steam WebAPI Proposals by John 'Seg' Seggerson.";
include_once("./template/html_start.php");
?>
<div class="container">
      <div class="jumbotron">
        <h1>Steam WebAPI Proposals</h1>
        <p class="lead">A proposal from John "Seg" Seggerson for extending the <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API" target="_blank">Steam WebAPI</a>.</p>
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span">
              <a class="btn btn-large btn-info " href="./ISteamHub.php">Community Hubs ( ISteamHub )</a>
              
              <a class="btn btn-large btn-info disabled">Game &amp; App Information</a>
            </div>
          </div>
        </div>
      </div>

      <hr>
      
      <div class="row-fluid marketing">
        
        <div class="span6">
          <h4>Community Hubs</h4>
          <p>
            Hubs are collections of users around a game, specific interest, or external community.
            Currently community API support is via deprecated XML support of groups. This document puts forth
            a new interface and methods for Steam WebAPI access for hubs.
          </p>
          <p><a href="./ISteamHub.php">Learn more...</a></p>

        </div>

        <div class="span6">
          <h4>Game &amp; App Information</h4>
          <p>Provides group metadata including name, URL, and other basic information about the group.</p>
          <p><a href="#">Learn more...</a></p>

        </div>
      </div>

<?php include_once("./template/html_end.php"); ?>