<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "guid" => 4178173,
    "appid" => 0,
    "status" => array(
      "memberCount" => 0,
      "membersInChat" => 0,
      "membersInGame" => 0,
      "membersOnline" => 0,
      "playerofweek" => 1,
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetStatus_00");

if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['json']);
} else if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['vdf']);
}


?>