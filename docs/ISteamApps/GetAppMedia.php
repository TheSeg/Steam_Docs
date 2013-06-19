          <section id="GetAppMedia">
            <div class="page-header">
              <h1>::GetAppMedia</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>This method provides screenshots and trailers associated officially with a software title released on Steam.</p>
            
            <p>Each software title includes a set of official screenshots and videos, showcased at the store page. These media items are provided by the developer/publisher of the title.</p>
            
            <h2>Input</h2>
            <?php print SteamDocs::seeInputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>The steam AppID number of the game to search against.</dd>
            </dl>
            
            <h2>Outputs</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>App ID of the query returned if <span class="label label-inverse">appid</span> input was defined and successful.</dd>
            </dl>
            
              <div class="well">
              <dl class="dl-horizontal">
                <dt>screenshots<br><?php print SteamDocs::param("array"); ?></dt>
                <dd>All official screenshots displayed on the title's store page.</dd>
              </dl>
              
                <div class='row-fluid'>
                  <div class="span11 offset1">
                  
                    <div class="alert alert-info">The following fields are per entry in the array.</div>
              
                    <dl class="dl-horizontal">
                      <dt>thumb<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the thumbnail image.</dd>
                    </dl>
                  
                    <dl class="dl-horizontal">
                      <dt>small<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the small (px) size of image.</dd>
                    </dl>
                  
                    <dl class="dl-horizontal">
                      <dt>original<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the original size of the image.<br>Final size depends on submission by developer.</dd>
                    </dl>
                  
                  </div>
                </div>
              </div>
            
              <div class="well">
              <dl class="dl-horizontal">
                <dt>trailers<br><?php print SteamDocs::param("array"); ?></dt>
                <dd>All official trailers &amp; videos displayed on the title's store page.</dd>
              </dl>
              
                <div class='row-fluid'>
                  <div class="span11 offset1">
                    
                    <div class="alert alert-info">The following fields are per entry in the array.</div>
                  
                    <dl class="dl-horizontal">
                      <dt>html_embed<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>HTML escaped <code>&lt;embed&gt;</code> code to display trailer.</dd>
                    </dl>
                  
                    <dl class="dl-horizontal">
                      <dt>youtube<br><?php print SteamDocs::param("string",true); ?></dt>
                      <dd>URL of YouTube trailer. Included if trailer is served by YouTube, otherwise field is <code>NULL</code>.</dd>
                    </dl>
                  
                  </div>
                </div>
              </div>
            
            
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppMedia/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppMedia_00" ); ?>
            
            
            
          </section>
