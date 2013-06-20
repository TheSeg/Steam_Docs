<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "guid" => 4178173,
    "appid" => 0,
    "permissions" => array(
      "inviteonly" => 0,
      "canEditProps" => 0,
      "canMakeOfficer" => 0,
      "canSchedule" => 0,
      "canAnnounce" => 0,
      "canPoTW" => 0,
      "canInvite" => 0,
      "canKickMembers" => 0,
      "canChatAccess" => 0,
      "canChatKick" => 0,
      "canChatBan" => 0,
      "canChatInvite" => 0,
      "canPostComments" => 0,
      "canDeleteComments" => 0,
    ),
  )
  
);


$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetPermissions_00");

if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['json']);
} else if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['vdf']);
}


?>