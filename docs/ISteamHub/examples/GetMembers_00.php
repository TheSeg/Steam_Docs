<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "guid" => 4178173,
    "appid" => 0,
    "members" => array(
      [
        "steamid" => 1622697970587791993,
        "role" => 4,
      ],
      [
        "steamid" => 1622697970587791993,
        "role" => 0,
      ],
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetMembers_00");

?>