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

print get_include_contents("ISteamApps/examples/GetAppData_00.php");
print get_include_contents("ISteamApps/examples/GetAppMedia_00.php");
print get_include_contents("ISteamApps/examples/GetAppRatings_00.php");
print get_include_contents("ISteamApps/examples/GetAppRatings_01.php");
print get_include_contents("ISteamHub/examples/GetAnnouncements_00.php");
print get_include_contents("ISteamHub/examples/GetPermissions_00.php");
print get_include_contents("ISteamHub/examples/GetEvents_00.php");
print get_include_contents("ISteamHub/examples/GetStatus_00.php");


?>