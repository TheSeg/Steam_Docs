<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "language" => "en",
    "hubs" => array(
      "103582791433132887" => array(
        "guid" => 103582791433132887,
        "abbreviation" => "ablegamers",
        "name" => "AbleGamers",
        "url" => "http://steamcommunity.com/groups/ablegamers",
        "appid" => 0,
        "public" => true,
        "inviteonly" => false,
        "datecreated" => 1335596400,
        "dateupdated" => 1368135598,
        "headline" => "",
        "summary" => "AbleGamers enables children and adults with disabilities and veterans after war trauma to play video games. There should be no barriers to fun!",
        "memberCount" => 177,
        "language" => null,
        "locCountryCode" => "US",
        "locStateCode" => null,
        "playerofweek" => 0,
        "avatar" => array(
          "avatarIcon" => "http://media.steampowered.com/steamcommunity/public/images/avatars/03/039516212655e228acbf3614740b7898d7930762.jpg",
          "avatarMedium" => "http://media.steampowered.com/steamcommunity/public/images/avatars/03/039516212655e228acbf3614740b7898d7930762_medium.jpg",
          "avatarFull" => "http://media.steampowered.com/steamcommunity/public/images/avatars/03/039516212655e228acbf3614740b7898d7930762_full.jpg",
          "gamelogo" => null,
          "gamebanner" => null,
        ),
        "associatedGames" => array(
          
        ),
        "websites" => array(
          array(
            "url" => "http://www.ablegamers.com/",
            "title" => "AbleGamers.com",
          ),
          array(
            "url" => "http://twitter.com/ablegamers",
            "title" => "AbleGamers on Twitter",
          ),
          array(
            "url" => "http://facebook.com/ablegamers",
            "title" => "AbleGamers on Facebook",
          ),
        ),
      ),
    )
  )
);

$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetSummaries_00");

?>