<?php
include_once("../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "language" => "en",
    "appid" => 3830,
    "title" => "Psychonauts",
    "ratings" => array(
      "acb" => array(
        "class" => "M",
        "desc" => array(),
        "desc_string" => null,
      ),
      "bbfc" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "cero" => array(
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
      "esrb" => array(
        "class" => "T",
        "desc" => array(
          "Cartoon Violence",
          "Crude Humor",
          "Language",
        ),
        "desc_string" => "Cartoon Violence, Crude Humor, Language",
      ),
      "fpb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "grb" => array(
        "class" => "UNRATED",
        "desc" => array(),
        "desc_string" => null,
      ),
      "pegi" => array(
        "class" => "12",
        "desc" => array(
          "Bad Language",
          "Violence",
        ),
        "desc_string" => "Bad Language, Violence",
      ),
      "usk" => array(
        "class" => "12",
        "desc" => array(),
        "desc_string" => null,
      ),
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,"GetAppRatings_01");


?>