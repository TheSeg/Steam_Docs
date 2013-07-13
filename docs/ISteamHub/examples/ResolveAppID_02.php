<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "appid" => 94590,
    "language" => "en",
    "hubs" => array(
      array(
        "guid" => 103582791432166170,
        "abbreviation" => "puzzleagent2",
        "name" => "Puzzle Agent 2",
        "url" => "http://steamcommunity.com/app/94590",
        "official" => true,
        "public" => true,
      ),
    )
  )
);

$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."ResolveAppID_02");

?>