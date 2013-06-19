          <section id="GetAppData">
            <div class="page-header">
              <h1>::GetAppData</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>This method provides data about a software title released on Steam.</p>
            
            <p>This provides a wealth of information about titles released on Steam ranging from pricing, descriptions &amp; titles, imagery, and other information about a given title.</p>
            
            <h2>Input</h2>
            <?php print SteamDocs::seeInputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appids<br><?php print SteamDocs::param("string,int"); ?></dt>
              <dd>The steam AppID number of the game to search against. May use a comma separated range of AppIDs to return more than one title in a single call.</dd>
            </dl>
            
            <h2>Outputs</h2>
            <?php print SteamDocs::seeOutputs(); ?>
            
            <dl class="dl-horizontal">
              <dt>appids<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>App ID of the query returned if <span class="label label-inverse">appids</span> input was defined and successful.</dd>
            </dl>
            
                <dl class="dl-horizontal">
                  <dt>apps<br><?php print SteamDocs::param("array"); ?></dt>
                  <dd>An array of each successful AppID return.</dd>
                </dl>
                
                <div class="row-fluid">
                  <div class="span11 offset1">
                  
                    <dl class="dl-horizontal">
                      <dt>title<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>The title of the application.</dd>
                    </dl>
                    
                    <dl class="dl-horizontal">
                      <dt>developer_name<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>Name of the title's developer.</dd>
                    </dl>
                    
                    <dl class="dl-horizontal">
                      <dt>publisher_name<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>Name of the title's publisher.</dd>
                    </dl>
                    
                    <div class="well">
                      <dl class="dl-horizontal">
                        <dt>platforms<br><?php print SteamDocs::param("array"); ?></dt>
                        <dd>
                          An Array of platforms the title is released under.
                        </dd>
                      </dl>
                      
                      <div class="row-fluid">
                        <div class="span10 offset1">
                          <dl class="dl-horizontal">
                            <dt>windows<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Released for Windows operating systems.</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>mac<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Released for Mac OS X operating systems.</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>windows<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Released for Linux operating systems.</dd>
                          </dl>
                          <dl class="dl-horizontal">
                            <dt>steamplay<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Denotes if title is under <a href="https://support.steampowered.com/kb_article.php?ref=9439-QHKN-1308">SteamPlay</a> license.</dd>
                          </dl>

                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>attributes<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>A list of store-only or other external attributes for the given title.<br>This is in contrast to the <span class="label label-inverse">features</span> listing.</dd>
                    </dl>
                    
                    <div class="row-fluid">
                      <div class="span10 offset1">
                        
                        <dl class="dl-horizontal">
                          <dt>free_to_play<br><?php print SteamDocs::param("bool"); ?></dt>
                          <dd><code>TRUE</code> if title is a "Free to Play" title.</dd>
                        </dl>
                        
                        <dl class="dl-horizontal">
                          <dt>early_access<br><?php print SteamDocs::param("bool"); ?></dt>
                          <dd><code>TRUE</code> if title is an <a href="http://store.steampowered.com/earlyaccessfaq">Early Access</a> title.<br>Once the title is past the 'Early Access' stage, this field will be set to <code>FALSE</code>.</dd>
                        </dl>
                        
                        <dl class="dl-horizontal">
                          <dt>greenlit<br><?php print SteamDocs::param("bool"); ?></dt>
                          <dd><code>TRUE</code> if title was accepted under the <a href="http://steamcommunity.com/greenlight/">Greenlight</a> approval process.</dd>
                        </dl>
                        
                        <div class="alert offset1">The following fields apply to Apps that are released to the public, but have a separate and on-going Beta AppID. Games under this category include: Team Fortress 2</div>
                        
                        <dl class="dl-horizontal">
                          <dt>beta_appid<br><?php print SteamDocs::param("int, NULL"); ?></dt>
                          <dd>If title has a different AppID for beta, AppID number is listed.<br><code>NULL</code> if there is no Beta AppID.</dd>
                        </dl>
                        
                        <dl class="dl-horizontal">
                          <dt>gold_appid<br><?php print SteamDocs::param("int"); ?></dt>
                          <dd>If title has a different AppID for beta, AppID number for <em>released</em> AppID.<br>If there is no Beta AppID, it will return the given AppID.</dd>
                        </dl>
                        
                      </div>
                    </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>images<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>
                        An array of logo and icon images related to the title.<br>
                        For Screenshots &amp; Videos, see <a href="#GetAppMedia"><code>ISteamApps::GetAppMedia</code></a>.
                      </dd>
                    </dl>
                    
                      <div class="row-fluid">
                        <div class="span11 offset1">
                        
                          <dl class="dl-horizontal">
                            <dt>banner_small<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>URL of 'small' banner image of title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>banner_large<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>URL of 'large' banner image of title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>icon_small<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>URL of 'small' icon image of title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>icon_large<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>URL of 'large' icon image of title.</dd>
                          </dl>
                        
                        </div>
                      </div>
                    
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>strings<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>Description strings for the title. All are formatted as HTML escaped.</dd>
                    </dl>
                    
                      <div class="row-fluid">
                        <div class="span11 offset1">
                        
                          <dl class="dl-horizontal">
                            <dt>short_desc<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>Short description of title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>about<br><?php print SteamDocs::param("string",true); ?></dt>
                            <dd>"About this game" text for title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>key_features<br><?php print SteamDocs::param("string",true); ?></dt>
                            <dd>"Key Features" text for title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>copyright<br><?php print SteamDocs::param("string",true); ?></dt>
                            <dd>Copyright string for title.</dd>
                          </dl>
                        
                          <dl class="dl-horizontal">
                            <dt>reviews<br><?php print SteamDocs::param("string",true); ?></dt>
                            <dd>"Reviews" text for title.</dd>
                          </dl>
                        
                        </div>
                      </div>
                    
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>system_req<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>HTML escaped text of system requirements, separated by platform.</dd>
                    </dl>
                    
                    <div class="row-fluid">
                      <div class="span11 offset1">
                        
                        <div class="well">
                          <dl class="dl-horizontal">
                            <dt>windows<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>For Windows platforms.</dd>
                          </dl>
                        
                          <div class="row-fluid">
                            <div class="span11 offset1">
                            
                              <dl class="dl-horizontal">
                                <dt>minimum<br><?php print SteamDocs::param("string",false); ?></dt>
                                <dd>Minimum requirements for Windows.</dd>
                              </dl>
                              <dl class="dl-horizontal">
                                <dt>recommended<br><?php print SteamDocs::param("string",true); ?></dt>
                                <dd>Recommended requirements for Windows.</dd>
                              </dl>
                            
                            </div>
                          </div>
                        </div>
                        
                        <div class="well">
                          <dl class="dl-horizontal">
                            <dt>mac<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>For Mac OS X platforms.</dd>
                          </dl>
                        
                          <div class="row-fluid">
                            <div class="span11 offset1">
                            
                              <dl class="dl-horizontal">
                                <dt>minimum<br><?php print SteamDocs::param("string",false); ?></dt>
                                <dd>Minimum requirements for Mac OS X.</dd>
                              </dl>
                              <dl class="dl-horizontal">
                                <dt>recommended<br><?php print SteamDocs::param("string",true); ?></dt>
                                <dd>Recommended requirements for Mac OS X.</dd>
                              </dl>
                            
                            </div>
                          </div>
                        </div>
                        
                        <div class="well">
                          <dl class="dl-horizontal">
                            <dt>linux<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>For Linux platforms.</dd>
                          </dl>
                        
                          <div class="row-fluid">
                            <div class="span11 offset1">
                            
                              <dl class="dl-horizontal">
                                <dt>minimum<br><?php print SteamDocs::param("string",false); ?></dt>
                                <dd>Minimum requirements for Linux.</dd>
                              </dl>
                              <dl class="dl-horizontal">
                                <dt>recommended<br><?php print SteamDocs::param("string",true); ?></dt>
                                <dd>Recommended requirements for Linux.</dd>
                              </dl>
                            
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>genres<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>An array of strings listing the genres the title is attached to.</dd>
                    </dl>

                    <div class="row-fluid">
                      <div class="span11 offset1">
                        <div class="alert alert-info">Available genres include (and not limited to):</div>
                        <ul class="list_col offset1">
                          <li>Free to Play</li>
                          <li>Action</li>
                          <li>Adventure</li>
                          <li>Strategy</li>
                          <li>RPG</li>
                          <li>Indie</li>
                          <li>Massively Multiplayer</li>
                          <li>Platformer</li>
                          <li>Casual</li>
                          <li>Simulation</li>
                          <li>Racing</li>
                          <li>Sports</li>
                          <li>Accounting</li>
                          <li>Animation &amp; Modeling</li>
                          <li>Audio Production</li>
                          <li>Design &amp; Illustration</li>
                          <li>Education</li>
                          <li>Photo Editing</li>
                          <li>Software Training</li>
                          <li>Utilities</li>
                          <li>Video Production</li>
                          <li>Web Publishing</li>
                          <li>Early Access</li>
                        </ul>
                      </div>
                    </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>release_date<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>An array of numbers for the release date of title.</dd>
                    </dl>
                    
                      <div class="row-fluid">
                        <div class="span11 offset1">
                          
                          <div class="alert alert-info">If there is no value given for any field, the value will return <span class="label label-inverse">0</span>. Thus if the release date is "December 2010", the <code>day</code> field will be <span class="label label-inverse">0</span>.</div>
                          
                          <dl class="dl-horizontal">
                            <dt>year<br><?php print SteamDocs::param("int"); ?></dt>
                            <dd>Four digit number of year of release.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>month<br><?php print SteamDocs::param("int"); ?></dt>
                            <dd>Two digit number of day of release.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>day<br><?php print SteamDocs::param("int"); ?></dt>
                            <dd>Two digit number of day of release.</dd>
                          </dl>
                          
                        </div>
                      </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>languages<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>List of languages the title supports, with supporting attributes.</dd>
                    </dl>
                    
                      <div class="row-fluid">
                        <div class="span11 offset1">
                          
                          <dl class="dl-horizontal">
                            <dt>iso<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">ISO 639-1</a> standard of supported language.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>name<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The localized string of the supported language.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>has_voice<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Denotes voice is localized and included for this language.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>has_subtitles<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Denotes subtitles is localized included for this language.</dd>
                          </dl>
                          
                        </div>
                      </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>features<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>List of (mostly) in-game features the title includes.</dd>
                    </dl>
                      
                      <div class="row-fluid">
                        <div class="span11 offset1">
                          
                          <div class="alert alert-info">Each field defaults to <code>FALSE</code>. New features may be included as features expand.</div>
                          
                          <dl class="dl-horizontal">
                            <dt>singlePlayer<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title contains single player mode.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>coop<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Co-Op mode.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>coop_local<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Local Co-Op mode.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>multiPlayer<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports multiplayer.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>multiPlayer_CrossPlatform<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports cross-platform multiplayer.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>controller<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title has full controller support.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>achievements<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Steam Achievements.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>leaderboards<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Steam Leaderboards.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>cloud<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Steam Cloud.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>stats<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Steam Stats.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>stats_community<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports Steam Community Stats.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>big_picture<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports <a href="http://store.steampowered.com/bigpicture">Steam Big Picture</a>.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>workshop<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports <a href="http://steamcommunity.com/workshop/">Steam Workshop</a>.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>cards<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title distributes <a href="http://steamcommunity.com/tradingcards/">Steam Trading Cards</a>.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>vac<br><?php print SteamDocs::param("bool"); ?></dt>
                            <dd>Title supports <a href="https://support.steampowered.com/kb_article.php?ref=7849-Radz-6869">Valve Anti-Cheat System (VAC)</a>.</dd>
                          </dl>
                          
                        </div>
                      </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>links<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>An array of links officially associated with the title.</dd>
                    </dl>
                    
                      <div class='row-fluid'>
                        <div class="span11 offset1">
                          
                          <dl class="dl-horizontal">
                            <dt>official_website<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The official website of the title.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>update_history<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The Steam update history of the title.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>official_game_hub<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The Steam Game Hub of the title.</dd>
                          </dl>
                          
                          <dl class="dl-horizontal">
                            <dt>store_page<br><?php print SteamDocs::param("string"); ?></dt>
                            <dd>The Steam Store page of the title.</dd>
                          </dl>
                          
                        </div>
                      </div>
                    </div>
                    
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppData/v0001/?appids=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppData_00" ); ?>
            
            
            
          </section>
