<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "guid" => 4178173,
    "appid" => 0,
    "events" => array(
      [
        "gid" => 1622697970587791993,
        "title" => "Puzzle Agent 2 Test Event",
        "url" => "http://steamcommunity.com/groups/SegTestGroup/events/1801716056505964159",
        "eventtime" => 1368230400,
        "eventtype" => 2,
        "eventappid" => 94590,
        "eventip" => "1.1.1.1:10",
        "eventpassword" => "password",
        "eventurl" => "steam://connect/1.1.1.1:10",
        "contents" => "You can now return back to Scoggins with Nelson! The game is now released on Windows and Mac (via SteamPlay).<br><br><a href=\"http://store.steampowered.com/app/94590\">Buy Puzzle Agent 2</a> and get a free copy of Puzzle Agent 1 to play. Already own it? You can gift it to any one of your Steam friends!<br><br>Enjoy Puzzle Agent 2 and your trip back to Scoggins!",
        "author" => 76561197983121111,
        "createdtime" => 1309562100,
        "comments" => 0,
      ],
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetEvents_00");

if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['json']);
} else if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['vdf']);
}


?>