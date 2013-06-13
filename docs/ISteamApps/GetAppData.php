          <section id="GetAppData">
            <div class="page-header">
              <h1>::GetAppData</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>---</p>
            
            <h2>Input</h2>
            <?php print SteamDocs::seeInputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appids<br><?php print SteamDocs::param("string,int"); ?></dt>
              <dd>The steam AppID number of the game to search against. May use a comma separated range of AppIDs to return more than one title in a single call.</dd>
            </dl>
            
            <h2>Outputs</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>App ID of the query returned if <span class="label label-inverse">appid</span> input was defined and successful.</dd>
            </dl>
            
            <div class="well">
            
            <dl class="dl-horizontal">
              <dt>Field<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>Description</dd>
            </dl>
            
            </div>
            
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppData/v0001/?appids=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppData_00" ); ?>
            
            
            
          </section>