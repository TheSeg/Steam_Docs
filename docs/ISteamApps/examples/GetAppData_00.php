<?php
include_once(dirname(__FILE__)."/../../../template/init.php");

$arr = array(
  
  "response" => array(
    "success" => 1,
    "message" => "success",
    "language" => "en",
    "appids" => 94590,
    "apps" => array(
      94590 => array(
        'title' => "Puzzle Agent 2",
        "developer_name" => "Telltale Games",
        "publisher_name" => "Telltale Games",
        "platforms" => array(
          "windows" => true,
          "mac" => true,
          "linux" => false,
          "steamplay" => true,
        ),
        "attributes" => array(
            "free_to_play" => false,
            "early_access" => false,
            "greenlight" => false,
            "beta_appid" => null,
            "gold_appid" => 94590
        ),
        
        "images" => array(
            "header" => "http://cdn2.steampowered.com/v/gfx/apps/94590/header.jpg",
            "header_292" => "http://cdn2.steampowered.com/v/gfx/apps/94590/header_292x136.jpg",
            "capsule_120" => "http://cdn2.steampowered.com/v/gfx/apps/94590/capsule_sm_120.jpg",
            "capsule_184" => "http://cdn2.steampowered.com/v/gfx/apps/94590/capsule_184x69.jpg",
            "capsule_467" => "http://cdn2.steampowered.com/v/gfx/apps/94590/capsule_467x181.jpg",
            "capsule_616" => "http://cdn2.steampowered.com/v/gfx/apps/94590/capsule_616x353.jpg"
        ),
        "strings" => array(
            "short_desc" => "Agent Nelson Tethers just solved the biggest case of his career. So why isn&#039;t he satisfied? There&rsquo;s still the case of a missing eraser factory foreman, a whispering madness is still creeping from mind to mind, and a troubling recurrence of... creatures... is lurking into the town.",
            "copyright" => "&copy; 2011 Telltale Inc. Telltale and the Telltale Games logo are trademarks of Telltale, Inc. Based on the Grickle series of books written and illustrated by Graham Annable. All rights reserved.",
            "about" => "&lt;p&gt;Agent Nelson Tethers just solved the biggest case of his career. So why isn&#039;t he satisfied? There&rsquo;s still the case of a missing eraser factory foreman, a whispering madness is still creeping from mind to mind, and a troubling recurrence of... creatures... is lurking into the town.&lt;\/p&gt;",
            "key_features" => "&lt;ul&gt;&lt;li&gt;Sequel to the award winning Puzzle Agent (PC Gamer&rsquo;s Game of the Year, IGN&rsquo;s Best of E3, etc)&lt;\/li&gt;&lt;li&gt;Creepy puzzle adventure with mystery and dark humor&lt;\/li&gt;&lt;li&gt;Wider variety of intuitive yet challenging puzzles&lt;\/li&gt;&lt;\/ul&gt;\n",
            "reviews" => null
        ),
        'system_req' => array(
          'windows' => array( 
            'minimum' => SteamDocs::htmlText("<ul>
								<ul>
									<li><strong>OS:</strong> XP Service Pack 3 / Vista / Windows 7
									<li><strong>Processor:</strong> 1.8 GHz Pentium 4 or equivalent (Rec: 2.0GHz Pentium 4 or equivalent)
									<li><strong>Memory:</strong> 2 GB RAM (Rec: 3GB RAM)
									<li><strong>Hard Disk Space:</strong> 500 Mb Space Free	
									<li><strong>Video Card:</strong> ATI or NVidia card w/ 256 MB RAM (Rec: ATI or NVidia card w/ 512 MB RAM)
									<li><strong>DirectX&reg;:</strong> Direct X 9.0c
									<li><strong>Sound:</strong> Direct X 9.0 sound device	
								 </ul>
															</ul>"),
            'recommended' => null,
          ),
          'mac' => array( 
            'minimum' => SteamDocs::htmlText("<ul>
								<ul>
									<li><strong>OS:</strong> OS X version Snow Leopard 10.6.3, or later.
									<li><strong>Processor:</strong> 2.3 GHz Intel or equivalent
									<li><strong>Memory:</strong> 4 GB RAM
									<li><strong>Hard Disk Space:</strong> 500 MB Space Free
									<li><strong>Video Card:</strong> 512 MB NVidia or ATI graphics card
									<li><strong>Additional:</strong> Not recommended for MAC Minis or early-generation MacBooks
								 </ul>
															</ul>
"),
            'recommended' => null,
          ),
          'linux' => array( 
            'minimum' => null,
            'recommended' => null,
          ),
        ),
        'genres' => array(
          "adventure","casual"
        ),
        'release_date' => array( 
          "year" => 2011,
          "month" => 6,
          "day" => 30,
        ),
        'languages' => array(
          [
            "iso"=>"en",
            "name"=>"english",
            "has_voice"=>true,
            "has_subtitles"=>true,
          ],
        ),
        'features' => array( 
          "singleplayer" => false,
          "coop" => false,
          "coop_local" => false,
          "multiplayer" => false,
          "multiPlayer_CrossPlatform" => false,
          "controller" => false,
          "controller_partial" => false,
          "achievements" => false,
          "leaderboards" => false,
          "cloud" => false,
          "stats" => false,
          "stats_community" => false,
          "big_picture" => false,
          "workshop" => false,
          "cards" => false,
          "vac" => false,
        ),
        'links' => array(
          "official_website" => "http://www.telltalegames.com/puzzleagent2",
          "update_history" => "http://store.steampowered.com/news/?feed=steam_updates&appids=94590",
          "official_game_hub" => "http://steamcommunity.com/app/94590",
          "store_page" => "http://store.steampowered.com/app/94590/",
          "forums" => "http://steamcommunity.com/app/94590/discussions/",
        )
      ),
    )
  )
  
);

$all = SteamDocs::convertToAll($arr);
$saveAll = SteamDocs::saveAll($all,dirname(__FILE__)."/"."GetAppData_00");

if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['json']);
} else if ( false ) {
  header("Content-type: text/plain;");
  echo( $all['vdf']);
}


?>