          <section id="GetMembers">
            <div class="page-header">
              <h1>::GetMembers</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Returns all the member IDs associated with the hub.</p>
            
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
            
            <div class="well well-small">
            
            <dl class="dl-horizontal">
              <dt>members<br><?php print SteamDocs::param("array"); ?></dt>
              <dd></dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>steamid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>The Steam ID of the member.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>role<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>The roll of the member in the hub.</dd>
            </dl>
            
            <div class="well well-small">
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Value</th>
                  <th>Roll</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0</td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Moderator</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Officer</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Owner</td>
                </tr>
              </tbody>
            </table>
            </div>
            
            </div>
            
            <h3>Examples</h3>
            
            <h4>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/SegTestGroup" target="_blank">Seg Test Group</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetEvents/v0001/?guid=4178173</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetMembers_00" ); ?>
            
            
          </section>
