          <section id="ResolveVanityURL">
            <div class="page-header">
              <h1>::ResolveVanityURL</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Provides a hub’s ID number based on a search query.</p>
            <p>This function is similar to the <code>ISteamUser::ResolveVanityURL</code> method for player profiles. The difference is returns are for guid integers, used for all other methods in the <code>ISteamHub</code> interface.</p>
            
            <h2>Input</h2>
            <?php print SteamDocs::seeInputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>vanityUrl<br><span class="text-info">(string)</span></dt>
              <dd>One of the following types of information:
                <ul>
                  <li>The 12 character abbreviation name.</li>
                  <li>The full URL of the hub.</li>
                  <li>The ID number of the hub.</li>
                </ul>
              </dd>
            </dl>
            
            <h2>Output</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>vanityUrl<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Returned <code>vanityUrl</code> of input.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>result<br><?php print SteamDocs::param("array"); ?></dt>
              <dd></dd>
            </dl>
            
            <div class="row-fluid">
              <div class="span11 offset1 well">
              
                <dl class="dl-horizontal">
                  <dt>appID<br><?php print SteamDocs::param("int"); ?></dt></dt>
                  <dd>
                    If queried hub is an official game hub, value returns the AppID of the game.
                    <br>
                    If not an official game hub, value returns as 0.
                  </dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>guid<br><?php print SteamDocs::param("int"); ?></dt>
                  <dd>Steam Hub ID number of query.</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>abbreviation<br><?php print SteamDocs::param("string"); ?></dt>
                  <dd>
                    Abbreviated name of the Hub.
                    <br>
                    Also known as 'short code'.
                  </dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>name<br><?php print SteamDocs::param("string"); ?></dt>
                  <dd>Title of the Hub.</dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>url<br><?php print SteamDocs::param("string"); ?></dt>
                  <dd>
                    URL of the Hub.<br>
                    Useful when <code>vanityUrl</code> is an abbreviation or <code>guid</code> value.
                  </dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>official<br><?php print SteamDocs::param("bool"); ?></dt>
                  <dd>
                    <ul>
                      <li><span class="label">TRUE</span> if group is official game group of listed <code>appid</code>.</li>
                      <li><span class="label">FALSE</span> if otherwise.</li>
                    </ul>
                  </dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>public<br><?php print SteamDocs::param("bool"); ?></dt>
                  <dd>
                    <ul>
                      <li><span class="label">TRUE</span> if group is open to the public for viewing.</li>
                      <li><span class="label">FALSE</span> if otherwise.</li>
                    </ul>
                  </dd>
                </dl>
                
                <dl class="dl-horizontal">
                  <dt>inviteonly<br><?php print SteamDocs::param("bool"); ?></dt>
                  <dd>
                    <ul>
                      <li><span class="label">TRUE</span> if users can join only if invited.</li>
                      <li><span class="label">FALSE</span> if otherwise.</li>
                    </ul>
                  </dd>
                </dl>
                
              </div>
            </div>
            
            <h2>Examples:</h2>
            
            <h3>Game Hub: <span class="text-info"><a href="http://steamcommunity.com/app/PuzzleAgent2/" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamHub/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("http://steamcommunity.com/games/PuzzleAgent2/")?></blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveVanityURL_00" ); ?>
            
            <h3>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamHub/ResolveVanityURL/v0001/?vanityurl=<?php print urlencode("ablegamers")?></blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "ResolveVanityURL_01" ); ?>
            
          </section>
