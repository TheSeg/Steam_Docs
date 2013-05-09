          <section id="ResolveGameID">
            <div class="page-header">
              <h1>::ResolveGameID</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Search for groups associated with a Game's AppID. Either official game groups, community groups, or both can be returned.</p>
            <p>Unlike <code>ISteamGroup::ResolveVanityURL</code>, this method searches for groups related to an AppID. This allows searches for either an official game group of the app, or returns community based groups that have included the target game by association.</p>
            
            <h2>Input</h2>
            <dl>
              <dt>appid <span class="text-info">(int)</span></dt>
              <dd>The steam AppID number of the game to search against.</dd>
            </dl>
            <dl>
              <dt>official_only <span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>If true, method returns only for the official game group associated with the AppID.</dd>
            </dl>
            <dl>
              <dt>public_only <span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>
                If true, method returns only groups marked as public.
                <br>
                <span class="muted">Note:</span> Official game groups are always public.
              </dd>
            </dl>
            <dl>
              <dt>count <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of groups to return in a set.</dd>
            </dl>
            <dl>
              <dt>count <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of groups to return in a set.</dd>
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
              <dt>groups <span class="text-info">(array)</span></dt>
            </dl>
            <dl class="dl-horizontal">
              <dt>guid <span class="text-info">(int)</span></dt>
              <dd>Group ID number.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>official <span class="text-info">(bool)</span></dt>
              <dd>If TRUE, group is the official game group. FALSE if otherwise.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>abbreviation <span class="text-info">(string)</span></dt>
              <dd>12 character group abbreviation string.</dd>
            </dl>
            
            
            <h2>Examples</h2>
            
            <h3>AppID Search</h3>
            <blockquote>GET https://api.steampowered.com/ISteamGroup/ResolveGameID/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveGameID_01" ); ?>
            
            <h3>Community Group: <span class="text-info"><a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamGroup/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("ablegamers")?></blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveGameID_02" ); ?>

            
            
          </section>
