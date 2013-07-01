<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "vanityurl" => "http://steamcommunity.com/groups/ablegamers",
    "result" => array(
      "appid" => 0,
      "guid" => 103582791433132887,
      "abbreviation" => "ablegamers",
      "name" => "AbleGamers",
      "url" => "http://steamcommunity.com/groups/ablegamers",
      "official" => false,
      "public" => true,
      "inviteonly" => false,
    ),
  )
);

$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."ResolveVanityURL_01");

?>