          <section id="GetSummaries">
            <div class="page-header">
              <h1>::GetSummaries</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Provides the bulk of information about any one particular hub.</p>
            <p>This method provides the majority of metadata about a particular group including title, icons, description, and other information. If data about a hub is not served by another method, that data lives in <code>ISteamHub::GetSummaries</code>.</p>
            
            <h2>Inputs</h2>
            <?php print SteamDocs::seeInputs().SteamDocs::useGuidAppid();?>
            
            <dl class="dl-horizontal">
              <dt>guid<br><span class="text-info">(string)</span></dt>
              <dd>Hub IDs to query, separated by commas.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>appid<br><span class="text-info">(string)</span></dt>
              <dd>AppIDs to query, separated by commas.<br>This can be used to obtain only official game hubs.</dd>
            </dl>
            
            <h2>Outputs</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <div class="well well-small">
            <dl class="dl-horizontal">
              <dt>hubs<br><span class="text-info">(array)</span></dt>
              <dd>Array of returns matching query.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>guid<br><span class="text-info">(int)</span></dt>
              <dd>The 64 bit integer of the hub.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>abbreviation<br><span class="text-info">(string)</span></dt>
              <dd>The 12 character short name of the hub.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>name<br><span class="text-info">(string)</span></dt>
              <dd>The full name of the hub.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>url<br><span class="text-info">(string)</span></dt>
              <dd>The URL of the hub.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>appid<br><span class="text-info">(int)</span></dt>
              <dd>If the hub is an official game hub, returns the AppID number of that game. Otherwise returns 0.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>public<br><span class="text-info">(bool)</span></dt>
              <dd>
                TRUE if the hub is publicly viewable. FALSE if otherwise.
                <br>
                Note: A public hub doesn't assume players can join publicly. See <code>inviteonly</code>.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>inviteonly<br><span class="text-info">(bool)</span></dt>
              <dd>
                TRUE if the hub can only be joined by invite. FALSE if otherwise.
                <br>
                Note: If hub is not public, value will always return TRUE.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>datecreated<br><span class="text-info">(unix timestamp)</span></dt>
              <dd>
                Unix timestamp of when hub was created.
                <br>
                Note: Time assume UTC timezone. If date is the only known datapoint, returns 00:00 as time.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>dateupdate<br><span class="text-info">(unix timestamp)</span></dt>
              <dd>
                Unix timestamp of when hub's metadata was last updated.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>headline<br><span class="text-info">(string)</span></dt>
              <dd>
                Headline string of hub.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>summary<br><span class="text-info">(string)</span></dt>
              <dd>
                Long form HTML string of hub. Used to describe the hub.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>memberCount<br><span class="text-info">(int)</span></dt>
              <dd>
                Number of members inside the group.
                <br>
                Note: This field allows for the quick look at the number of members. For more details, see <code>ISteamHub::GetMembers</code>.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>language<br><span class="text-info">(string)</span></dt>
              <dd>
                The language set by the hub.
                <br>
                This field is optional for the hub owner and will return NULL if not set. Otherwise will return <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">ISO 639-1 code</a>.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>locCountryCode<br><span class="text-info">(string)</span></dt>
              <dd>
                The Country set by the hub in <a href="http://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> format.
                <br>
                This field is optional for the hub and will return NULL if not set.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>locStateCode<br><span class="text-info">(string)</span></dt>
              <dd>
                Variable length code representing the state the user is located in.
                <br>
                This field is optional for the hub and will return NULL if not set.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>playerofweek<br><span class="text-info">(int)</span></dt>
              <dd>
                The Steam ID # of the player of the week. If there is no player set, this returns as 0.
              </dd>
            </dl>
            
            <div class="well well-small">
            <dl class="dl-horizontal">
              <dt>avatar<br><span class="text-info">(array)</span></dt>
              <dd></dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>avatarIcon<br><span class="text-info">(string)</span></dt>
              <dd>
                URL of the hub's avatar in 32px square.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>avatarMedium<br><span class="text-info">(string)</span></dt>
              <dd>
                URL of the hub's avatar in 64px square.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>avatarFull<br><span class="text-info">(string)</span></dt>
              <dd>
                URL of the hub's avatar in 184px square.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>gameLogo<br><span class="text-info">(string)</span> <span class="text-warning">[optional]</span></dt>
              <dd>
                URL of the official game hub's game icon in 184px X 69px.
                <br>
                Note: This is only for official game groups.
              </dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>gameBanner<br><span class="text-info">(string)</span> <span class="text-warning">[optional]</span></dt>
              <dd>
                URL of the official game hub's game icon in 444px X 208px.
                <br>
                Note: This is only for official game groups.
              </dd>
            </dl>
            </div>
            
            <div class="well well-small">
            <dl class="dl-horizontal">
              <dt>associatedGames<br><span class="text-info">(array)</span></dt>
              <dd>
                If hub is associated with any particular Steam game, it will return the AppID number of the game(s).
                Note: If hub is official game group, will return only the official game group's AppID number.
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>appid<br><span class="text-info">(int)</span></dt>
              <dd>
                The AppID number of the game.
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>name<br><span class="text-info">(string)</span></dt>
              <dd>
                The name string of the game.
              </dd>
            </dl>
            </div>
            
            <div class="well well-small">
            <dl class="dl-horizontal">
              <dt>websites<br><span class="text-info">(array)</span></dt>
              <dd>
                If hub includes web links, this array will display them.
              </dd>
            </dl>
            <hr>
            <dl class="dl-horizontal">
              <dt>url<br><span class="text-info">(string)</span></dt>
              <dd>
                The URL of attached website.
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>name<br><span class="text-info">(string)</span></dt>
              <dd>
                The hub provided name of the attached website.
              </dd>
            </dl>
            </div>
            
            </div>
            
            <h3>Examples</h3>
            
            <h4>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetSummaries/v0001/?guids=103582791433132887</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetSummaries_00" ); ?>
            
            <h4>Game Hub: <span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetSummaries/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetSummaries_01" ); ?>
            
          </section>
