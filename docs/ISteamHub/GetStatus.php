          <section id="GetStatus">
            <div class="page-header">
              <h1>::GetStatus</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>A method returning the network status of hub members. This includes total members, members who are online, in the chat room for the hub, and playing any game on Steam.</p>
            
            
            <h2>Inputs</h2>
            <?php print SteamDocs::seeInputs(); ?>
            
            <div class="well alert alert-info">
              Method will take <em>either</em> <code>guid</code> <em>or</em> <code>appid</code> parameters.
            </div>
            
            <dl class="dl-horizontal">
              <dt>guid<br><?php print SteamDocs::param("int",false); ?></dt>
              <dd>Hub ID number to query against.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int",false); ?></dt>
              <dd>App ID number to query against.</dd>
            </dl>
            
            
            <h2>Outputs</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>guid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Hub ID of the query returned if <code>guid</code> input was defined and successful.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>App ID of the query returned if <code>appid</code> input was defined and successful.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>memberCount<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Total members associated with the hub.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>membersInChat<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Total members currently present in the hub's chat room.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>membersInGame<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Total members associated with the hub playing any game on Steam.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>membersOnline<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>
                Total members associated with the hub that are online (with Steam).
                <br>
                Includes number of members who are in game.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>playerofweek<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>
                The Steam ID number of the current player of the week (if defined).
                <br>
                Returns 0 if there is no player of the week defined.
              </dd>
            </dl>
            
            <h3>Examples</h3>
            
            <h4>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/SegTestGroup" target="_blank">Seg Test Group</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetStatus/v0001/?guid=4178173</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetStatus_00" ); ?>

            
          </section>
          
