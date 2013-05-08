          <section id="ResolveGameID">
            <div class="page-header">
              <h1>::ResolveGameID</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Search for groups associated with a Game's AppID. Can search for official game groups, community groups, or both.</p>
            <p>Unlike <code>ISteamGroup::ResolveVanityURL</code>, this method searches for groups related to an AppID. This allows searches for either an official game group of the app, or returns community based groups that have included the target game by association.</p>
            
            <h2>Input</h2>
            <dl>
              <dt>appid <span class="text-info">(int)</span></dt>
              <dd>The steam AppID number of the game to search against.</dd>
            </dl>
            <dl>
              <dt>official_only <span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>If true, method searched only for the official game group associated with the AppID.</dd>
            </dl>
            <dl>
              <dt>count <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of groups to return in a set.</dd>
            </dl>
            
            <h2>Output</h2>
            
            <dl>
              <dt>success <span class="text-info">(int)</span></dt>
              <dd>Status return number of query. Possible responses include:
                <ul>
                  <li>1 = Success.</li>
                  <li>42 = No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt>message <span class="text-info">(string)</span></dt>
              <dd>Status return string of query. Possible responses include:
                <ul>
                  <li>Success.</li>
                  <li>No match found.</li>
                </ul>
              </dd>
            </dl>
            <p><strong>groups <span class="text-info">(array)</span></strong></p>
            <dl>
              <dt>gid <span class="text-info">(int)</span></dt>
              <dd>If returned group is an official game group, value returns the AppID of the game.</dd>
            </dl>
            
            
          </section>
