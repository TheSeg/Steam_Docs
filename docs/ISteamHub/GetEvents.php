          <section id="GetEvents">
            <div class="page-header">
              <h1>::GetEvents</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Hubs are able to create Events for their members to participate. These events range from gameplay, Steam Chat events, and other events outside of Steam Community.</p>
            
            <h3>Event Types</h3>
            <p>_______</p>
            
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
            
            <div class="well alert alert-info">
              The following optional fields are used for search and narrowing down content returns.
            </div>
            
            <dl class="dl-horizontal">
              <dt>maxLength<br><?php print SteamDocs::param("int",true); ?></dt>
              <dd>Maximum character length of <code>contents</code> field.<br>System will make a best guess to end content without cutting a word.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>endDate<br><?php print SteamDocs::param("unix timestamp",true); ?></dt>
              <dd>
                Unix timestamp of oldest requested item.<br>
                Allows query to limit announcements in a time range from time of query to a specific time.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>count<br><?php print SteamDocs::param("int",true); ?></dt>
              <dd>
                Maximum number of announcements to return, regardless of other query variables.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>skip<br><?php print SteamDocs::param("int",true); ?></dt>
              <dd>
                Number of announcements to skip within the bounds of other query variables. Used in conjunction with <code>count</code>.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>authors<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                A comma separated string of Steam User ID numbers.
                <br>
                Providing this field will return only announcements made by the provided steam ID(s), along with other query factors if present.
              </dd>
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
            
            <div class="well">
            
            <dl class="dl-horizontal">
              <dt>events<br><?php print SteamDocs::param("array"); ?></dt>
              <dd></dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>gid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Unique ID number of event item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>title<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>Title string of event item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>url<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>URL of event item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventtime<br><?php print SteamDocs::param("unix timestamp"); ?></dt>
              <dd>Unix timestamp of when event starts. Always returns in UTC.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventtype<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>The event type. Consult the table below for what the integers represent.</dd>
            </dl>
            
            <div class="well well-small">
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Value</th>
                  <th>Short String</th>
                  <th>Official Long String</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0</td>
                  <td>ChatEvent</td>
                  <td>Chat</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>GameEvent</td>
                  <td>Play a Game</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>OtherEvent</td>
                  <td>A lil somethin somethin</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>PartyEvent</td>
                  <td>Party!</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>MeetingEvent</td>
                  <td>Important Meeting</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>SpecialCauseEvent</td>
                  <td>Special cause (charity ball?)</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>MusicAndArtsEvent</td>
                  <td>Music or Art type thing</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>SportsEvent</td>
                  <td>Sporting endeavor</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>TripEvent</td>
                  <td>Out of town excursion</td>
                </tr>
              </tbody>
            </table>
            </div>
            
            <dl class="dl-horizontal">
              <dt>eventAppID<br><?php print SteamDocs::param("int",true); ?></dt>
              <dd>
                App ID number of the game attached to the event item.
                <br>
                Valid only when <code>eventtype</code> is 2.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventIP<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                IP address attached to the event item.
                <br>
                Valid only when <code>eventtype</code> is 2 and <code>eventAppID</code> is defined.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventPassword<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                Password used to enter the game server attached to the event item.
                <br>
                Valid only when <code>eventtype</code> is 2 and <code>eventAppID</code> is defined.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventurl<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                Steam launch URL attached to the event item.
                <br>
                Valid only when <code>eventtype</code> is 2 and <code>eventIP</code> is defined.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>author<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Steam ID number of the creator of the specific event item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>contents<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>HTML string of event contents.<br>Returns full contents in HTML.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>createdtime<br><?php print SteamDocs::param("unix timestamp"); ?></dt>
              <dd>Unix timestamp of when event was posted. Always returns in UTC.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>comments<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Number of comments made for this particular event.</dd>
            </dl>
            
            </div>
            
            <h4>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/SegTestGroup" target="_blank">Seg Test Group</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetEvents/v0001/?guid=4178173</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetEvents_00" ); ?>
            
            
          </section>
