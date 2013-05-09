          <section id="ResolveGameID">
            <div class="page-header">
              <h1>::ResolveGameID</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Search for hubs associated with a Game's AppID. Either official game or all can be returned.</p>
            <p>Unlike <code>ISteamHub::ResolveVanityURL</code>, this method searches for hubs related to an AppID. This allows searches for either an official game hub of the app, or returns community based hubs that have included the target game by association.</p>
            
            <h2>Input</h2>
            <dl class="dl-horizontal">
              <dt>appid<br><span class="text-info">(int)</span></dt>
              <dd>The steam AppID number of the game to search against.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>official_only<br><span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>If true, method returns only for the official game hub associated with the AppID.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>public_only<br><span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>
                If TRUE, method returns only hubs marked as public.
                <br>
                <span class="muted">Note:</span> Official game hubs are always public.
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>count<br><span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of hubs to return in a set.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>count<br><span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of hubs to return in a set.</dd>
            </dl>
            
            <h2>Output</h2>
            
            <dl class="dl-horizontal">
              <dt>success<br><span class="text-info">(int)</span></dt>
              <dd>Status return number of query. Possible responses include:
                <ul>
                  <li>1 = Success.</li>
                  <li>42 = No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>message<br><span class="text-info">(string)</span></dt>
              <dd>Status return string of query. Possible responses include:
                <ul>
                  <li>Success.</li>
                  <li>No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>hubs<br><span class="text-info">(array)</span></dt>
              <dd>Array of results.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>guid<br><span class="text-info">(int)</span></dt>
              <dd>Hub ID number.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>abbreviation<br><span class="text-info">(string)</span></dt>
              <dd>12 character hub abbreviation string.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>name<br><span class="text-info">(string)</span></dt>
              <dd>Title of hub.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>url<br><span class="text-info">(string)</span></dt>
              <dd>URL of the hub.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>official<br><span class="text-info">(bool)</span></dt>
              <dd>If TRUE, hub is the official game hub. FALSE if otherwise.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>public<br><span class="text-info">(bool)</span></dt>
              <dd>If TRUE, hub is public. FALSE if otherwise.</dd>
            </dl>
            
            
            <h2>Examples</h2>
            
            <h3>AppID Search</h3>
            <blockquote>GET https://api.steampowered.com/ISteamHub/ResolveGameID/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveGameID_01" ); ?>
            
            <h3>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamHub/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("ablegamers")?></blockquote>
            
          </section>
