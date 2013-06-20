<?php
include_once("../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "guid" => 0,
    "appid" => 94590,
    "announcements" => array(
      [
        "gid" => 1406463823132647708,
        "title" => "Puzzle Agent 2 Released!",
        "url" => "http://steamcommunity.com/games/PuzzleAgent2/announcements/detail/1406463823132647708",
        "author" => 76561197985607672,
        "contents" => "You can now return back to Scoggins with Nelson! The game is now released on Windows and Mac (via SteamPlay).<br><br><a href=\"http://store.steampowered.com/app/94590\">Buy Puzzle Agent 2</a> and get a free copy of Puzzle Agent 1 to play. Already own it? You can gift it to any one of your Steam friends!<br><br>Enjoy Puzzle Agent 2 and your trip back to Scoggins!",
        "datetime" => 1309562100,
        "comments" => 0,
      ],
      [
        "gid" => 1406463176487492407,
        "title" => "Graham Annable Answers Your Questions: Parts 4 & 5",
        "url" => "http://steamcommunity.com/games/PuzzleAgent2/announcements/detail/1406463176487492407",
        "author" => 76561197985607672,
        "contents" => "As our snowmobiles near Scoggins for the June 30 release of Puzzle Agent 2, I present to you not one but two new entries in the <b>Graham Annable Answers Your Questions</b> video series!<br><br>These new episodes feature questions from Telltale community members <b>eloffler</b>, <b>Lobst</b>, <b>allaboardfilms</b>, and <b>Irishmile</b>! To find out what Graham has to say watch the new videos!<br><br>* <a href=\"http://www.youtube.com/watch?v=59jzTmKlE_c\">Graham Annable Answers Your Questions: Part 4</a><br>* <a href=\"http://www.youtube.com/watch?v=cQpatJGoP8E\">Graham Annable Answers Your Questions: Part 5</a>",
        "datetime" => 1309313280,
        "comments" => 0,
      ],
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,"GetAnnouncements_00");

if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['json']);
} else if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['vdf']);
}


?>