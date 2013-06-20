<?php
include_once("../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "language" => "en",
    "appid" => 94590,
    "title" => "Puzzle Agent 2",
    "ratings" => array(
      "cero" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "esrb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "pegi" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "acb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "usk" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "fpb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "bbfc" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "grb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "csrr" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "dejus" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,"GetAppRatings_00");


?>