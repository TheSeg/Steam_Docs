          <section id="GetEvents">
            <div class="page-header">
              <h1>::GetEvents</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Hubs are able to create Events for their members to participate. These events range from gameplay, Steam Chat events, and other events outside of Steam Community.</p>
            
            <h3>Event Types</h3>
            <p>Events are classified into the following types outlined below. For the sake of API consistency, these types will have a integer assigned to the type. This allows for expansion and easy casing of types.</p>
            <p>I am also proposing retitling these types to be more professional and useful as descriptions.</p>
            
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Value</th>
                  <th>Short String</th>
                  <th>Official Long String</th>
                  <th>Proposed Long String</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td colspan="4">
                    <i class="icon-asterisk icon-white"></i> Denotes new string.
                  </td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>0</td>
                  <td>ChatEvent</td>
                  <td>Chat</td>
                  <td>Chat</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>GameEvent</td>
                  <td>Play a Game</td>
                  <td>Play a Game</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>OtherEvent</td>
                  <td>A lil somethin somethin</td>
                  <td>A lil somethin' somethin' <i class="icon-asterisk icon-white"></i></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>PartyEvent</td>
                  <td>Party!</td>
                  <td>Party!</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>MeetingEvent</td>
                  <td>Important Meeting</td>
                  <td>Important Meeting</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>SpecialCauseEvent</td>
                  <td>Special cause (charity ball?)</td>
                  <td>Charity Event <i class="icon-asterisk icon-white"></i></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>MusicAndArtsEvent</td>
                  <td>Music or Art type thing</td>
                  <td>Music &amp; Arts Event <i class="icon-asterisk icon-white"></i></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>SportsEvent</td>
                  <td>Sporting endeavor</td>
                  <td>Sports Event <i class="icon-asterisk icon-white"></i></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>TripEvent</td>
                  <td>Out of town excursion</td>
                  <td>Group Field Trip <i class="icon-asterisk icon-white"></i></td>
                </tr>
                <tr class="success">
                  <td>9</td>
                  <td>OnlineEvent</td>
                  <td><small>N/A</small></td>
                  <td>Online Streaming Event <i class="icon-asterisk icon-white"></i></td>
                </tr>
              </tbody>
            </table>
            
            <h2>Inputs</h2>
            <?php print SteamDocs::seeInputs().SteamDocs::useGuidAppid(); ?>
            
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
              <dd>Maximum character length of <span class="label label-inverse">contents</span> field.<br>System will make a best guess to end content without cutting a word.</dd>
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
                Number of announcements to skip within the bounds of other query variables. Used in conjunction with <span class="label label-inverse">count</span>.
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
              <dd>Hub ID of the query returned if <span class="label label-inverse">guid</span> input was defined and successful.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>App ID of the query returned if <span class="label label-inverse">appid</span> input was defined and successful.</dd>
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
            
            <dl class="dl-horizontal">
              <dt>eventAppID<br><?php print SteamDocs::param("int",true); ?></dt>
              <dd>
                App ID number of the game attached to the event item.
                <br>
                Valid only when <span class="label label-inverse">eventtype</span> is <span class="badge badge-inverse">2</span>.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventIP<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                IP address attached to the event item.
                <br>
                Valid only when <span class="label label-inverse">eventtype</span> is <span class="badge badge-inverse">2</span> and <span class="label label-inverse">eventAppID</span> is defined.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventPassword<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                Password used to enter the game server attached to the event item.
                <br>
                Valid only when <span class="label label-inverse">eventtype</span> is <span class="badge badge-inverse">2</span> and <span class="label label-inverse">eventAppID</span> is defined.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>eventurl<br><?php print SteamDocs::param("string",true); ?></dt>
              <dd>
                Steam launch URL attached to the event item.
                <br>
                Valid only in the following conditions:
                <ul>
                  <li><span class="label label-inverse">eventtype</span> is <span class="badge badge-inverse">2</span> and <span class="label label-inverse">eventIP</span> is defined.</li>
                  <li><span class="label label-inverse">eventtype</span> is <span class="badge badge-inverse">9</span>.</li>
                </ul>
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
            
            <h3>Examples</h3>
            
            <h4>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/SegTestGroup" target="_blank">Seg Test Group</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetEvents/v0001/?guid=4178173</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetEvents_00" ); ?>
            
            
          </section>
