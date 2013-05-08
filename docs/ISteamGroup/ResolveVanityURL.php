          <section id="ResolveVanityURL">
            <div class="page-header">
              <h1>::ResolveVanityURL</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Provides a group’s ID number based on a search query.</p>
            <p>This function is similar to the <code>ISteamUser::GetPlayerSummary</code> method for player profiles. The difference is returns are for guid integers, used for all other methods in the <code>ISteamGroup</code> interface.</p>
            
            <h2>Input</h2>
            <dl class="dl-horizontal">
              <dt>vanityUrl <span class="text-info">(string)</span></dt>
              <dd>One of the following types of information:
                <ul>
                  <li>The 12 character Abbreviation name.</li>
                  <li>The full URL of the group.</li>
                  <li>The ID number of the group.</li>
                </ul>
              </dd>
            </dl>
            
            <h2>Output</h2>
            
            <dl class="dl-horizontal">
              <dt>success <span class="text-info">(int)</span></dt>
              <dd>Status return number of query. Possible responses include:
                <ul>
                  <li>1 = Success.</li>
                  <li>42 = No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>message <span class="text-info">(string)</span></dt>
              <dd>Status return string of query. Possible responses include:
                <ul>
                  <li>Success.</li>
                  <li>No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>guid <span class="text-info">(int)</span></dt>
              <dd>Steam Group ID number of query.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>appID <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>
                If queried group is an official game group, value returns the AppID of the game.
                <br>
                If not an official game group, value returns as 0.
              </dd>
            </dl>
            
            <h2>Examples:</h2>
            
            <h3>Game Group: <span class="text-info"><a href="http://steamcommunity.com/games/PuzzleAgent2/" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamGroup/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("http://steamcommunity.com/games/PuzzleAgent2/")?></blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveVanityURL_Example00" ); ?>
            
            <h3>Community Group: <span class="text-info"><a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamGroup/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("ablegamers")?></blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveVanityURL_Example01" ); ?>
            
          </section>
