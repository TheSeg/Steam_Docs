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
              <dt>images<br><?php print SteamDocs::param("array"); ?></dt>
              <dd>
                An array of logo and icon images related to the title.<br>
                The same as <a href="#GetAppData"><code>ISteamApps::GetAppData</code></a>'s <span class="label">images</span> return.
              </dd>
            </dl>
            
              <div class="row-fluid">
                <div class="span11 offset1">
                
                  <dl class="dl-horizontal">
                    <dt>header<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "header" image of title.<br>460px X 215px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(460,215); ?>
                  
                  <dl class="dl-horizontal">
                    <dt>header_292<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "header" image of title.<br>292px X 136px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(292,136); ?>
                  
                  <dl class="dl-horizontal">
                    <dt>capsule<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "capsule" image of title.<br>616px X 353px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(616,252); ?>
                  
                  <dl class="dl-horizontal">
                    <dt>capsule_467<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "capsule" image of title.<br>467px X 181px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(467,181); ?>
                  
                  <dl class="dl-horizontal">
                    <dt>capsule_184<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "capsule" image of title.<br>184px X 69px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(184,69); ?>
                  
                  <dl class="dl-horizontal">
                    <dt>capsule_120<br><?php print SteamDocs::param("string"); ?></dt>
                    <dd>URL of "capsule" image of title.<br>120px X 45px</dd>
                  </dl>
                  
                  <?php print SteamDocs::placeholderBlock(120,45); ?>
                
                </div>
              </div>
            
            </div>
                    
              <div class="well">
              <dl class="dl-horizontal">
                <dt>screenshots<br><?php print SteamDocs::param("array"); ?></dt>
                <dd>All official screenshots displayed on the title's store page.</dd>
              </dl>
              
                <div class='row-fluid'>
                  <div class="span11 offset1">
                  
                    <div class="alert alert-info">The following fields are per entry in the array.</div>
              
                    <dl class="dl-horizontal">
                      <dt>thumbnail<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the thumbnail, 116px X 65px image.</dd>
                    </dl>
                    
                    <?php print SteamDocs::placeholderBlock(116,65); ?>
                  
                    <dl class="dl-horizontal">
                      <dt>image_600<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of 600px X 338px image.</dd>
                    </dl>
                    
                    <?php print SteamDocs::placeholderBlock(600,338); ?>
                    
                    <dl class="dl-horizontal">
                      <dt>image_1920<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of 1920px X 1080 (HD) image.</dd>
                    </dl>
                    
                    <?php print SteamDocs::placeholderBlock(1920/3,1080/3,"1920x1080"); ?>
                    
                    <dl class="dl-horizontal">
                      <dt>image_org<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the original image.<br>Final size depends on submission by developer.</dd>
                    </dl>
                    
                  </div>
                </div>
              </div>
            
              <div class="well">
              <dl class="dl-horizontal">
                <dt>movies<br><?php print SteamDocs::param("array"); ?></dt>
                <dd>All official movies &amp; videos displayed on the title's store page.</dd>
              </dl>
              
                <div class='row-fluid'>
                  <div class="span11 offset1">
                    
                    <div class="alert alert-info">The following fields are per entry in the array.</div>
                  
                    <dl class="dl-horizontal">
                      <dt>movie_id<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>AppID for movie.<br>Each official movie has an AppID.</dd>
                    </dl>
                  
                    <dl class="dl-horizontal">
                      <dt>thumbnail<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of still photo thumbnail of the movie.</dd>
                    </dl>
                  
                    <dl class="dl-horizontal">
                      <dt>movie<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>URL of the movie file.</dd>
                    </dl>
                  
                  </div>
                </div>
              </div>
            
            
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppMedia/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppMedia_00" ); ?>
            
            
            
          </section>
