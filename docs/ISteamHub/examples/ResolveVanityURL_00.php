<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "vanityurl" => "http://steamcommunity.com/games/PuzzleAgent",
    "result" => array(
      "appid" => 94590,
      "guid" => 103582791432166170,
      "abbreviation" => "puzzleagent2",
      "name" => "Puzzle Agent 2",
      "url" => "http://steamcommunity.com/games/PuzzleAgent",
      "official" => true,
      "public" => true,
      "inviteonly" => false,
    ),
  )
);

$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."ResolveVanityURL_00");

?>