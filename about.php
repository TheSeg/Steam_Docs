<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; About";
$page['desc'] = "Why the author, John 'Seg' Seggerson, decided to create proposals to the Steam WebAPI.";
include_once("./template/html_start.php");
?>

<div class="jumbotron">
  <h1><i class="icon-info-sign"></i> About</h1>
  <p class="lead">Because <a href="http://theseg.github.io/" target="_blank">Seg</a> wants a better <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API">Steam WebAPI</a>.</p>
</div>

<div class="container">
  
  <div class="row">
    
    <div class="span10 offset1">
      <h2>Why Do This?</h2>
      <p>During my <a href="http://theseg.github.io/">career</a>, I've worked with the <a href="https://partner.steamgames.com">Steamworks</a> and <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API">Steam WebAPI</a> for a number of titles for Telltale Games. Specifically with <a href="http://store.steampowered.com/app/94590/">Puzzle Agent 2</a> where I <a href="http://steamcommunity.com/stats/PuzzleAgent2/stats/">incorporated the community stats system</a> of Steamworks. The results included displaying how many tax payer dollars were spent in submitting puzzles.</p>
      <p>I've always been interested in the Steamworks and WebAPI in order to do something wonderful with data. The taxpayer info was the start of sharing how people play games. It made a single player experience more social without depending on direct social connections during gameplay.</p>
      <p>Since the layoffs at Telltale in 2012, I kept as current as I can on the Steam platform. When stumbling across the <a href="http://koraktor.de/steam-condenser/">Steam Condenser</a> project, I wanted to lend a hand. The project was using a mix of the deprecated XML data and I wanted to contribute to moving completely on the WebAPI. That's when I discovered the Steam Groups (now called Community Hubs) did not have a WebAPI interface.</p>
      <p class="lead">So I decided to write a proposal.</p>
      <p>While I would hope Valve Software would take an interest in this project, it's by no means a guarantee. I will also admit I'm in a vacuum as I'm not in contact with Valve to develop this. Ultimately this proposal is in the perspective of an outside developer with no knowledge of the future directions of Valve software. <em>But I would love to work with Valve in developing this further.</em></p>
      <p>This proposal demonstrates my technical writing skills. While I work primarily in interactive narrative, I'm still very interested in making data and technology accessible as possible. I wanted a public way to demonstrate that skill set, and so here we are!</p>
      <h2>Feedback</h2>
      <p>Want to contribute to perfecting these proposals? <a href="https://github.com/TheSeg/Steam_Docs/issues">Make an issue on <i class="icon-github"></i> GitHub and start the discussion!</a></p>
      <p><a class="btn" href="https://github.com/TheSeg/Steam_Docs/issues"><i class="icon-github icon-large"></i> Feedback @ GitHub</a></p>
    </div>
    
  </div>

</div>
<?php include_once("./template/html_end.php"); ?>