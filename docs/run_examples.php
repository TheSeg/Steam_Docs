<?php

include_once("../template/init.php");

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

if ( true ) {
print ("<h2>GetSummaries_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetSummaries_00.php");
print ("<h2>GetAppData_00.php</h2>");
print get_include_contents("ISteamApps/examples/GetAppData_00.php");
print ("<h2>GetAppMedia_00.php</h2>");
print get_include_contents("ISteamApps/examples/GetAppMedia_00.php");
print ("<h2>GetAppRatings_00.php</h2>");
print get_include_contents("ISteamApps/examples/GetAppRatings_00.php");
print ("<h2>GetAppRatings_01.php</h2>");
print get_include_contents("ISteamApps/examples/GetAppRatings_01.php");
print ("<h2>GetAnnouncements_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetAnnouncements_00.php");
print ("<h2>GetPermissions_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetPermissions_00.php");
print ("<h2>GetEvents_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetEvents_00.php");
print ("<h2>GetStatus_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetStatus_00.php");
print ("<h2>GetMembers_00.php</h2>");
print get_include_contents("ISteamHub/examples/GetMembers_00.php");
}
?>