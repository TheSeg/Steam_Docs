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
                
                <div class="row">
                  <div class="span11 offset1">
                  
                    <dl class="dl-horizontal">
                      <dt>title<br><?php print SteamDocs::param("string"); ?></dt>
                      <dd>The title of the application.</dd>
                    </dl>
                    
                    
                    <dl class="dl-horizontal">
                      <dt>platforms<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>
                        An Array of platforms the title is released under.
                        <ul>
                          <li>win : <?php print SteamDocs::param("bool"); ?></li>
                          <li>mac : <?php print SteamDocs::param("bool"); ?></li>
                          <li>linux : <?php print SteamDocs::param("bool"); ?></li>
                          <li>steamplay : <?php print SteamDocs::param("bool"); ?>
                            <ul><li>Denotes if title is under <a href="https://support.steampowered.com/kb_article.php?ref=9439-QHKN-1308">SteamPlay</a> license.</li></ul>
                          </li>
                        </ul>
                      </dd>
                    </dl>
                    
                    <dl class="dl-horizontal">
                      <dt>attributes<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>A list of store-only or other external attributes for the given title.<br>This is in contrast to the <span class="label label-inverse">features</span> listing.</dd>
                    </dl>
                    
                    <div class="row">
                      <div class="span7 offset1">
                        
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
                        
                        <div class="alert offset">The following fields apply to Apps that are released to the public, but have a separate and on-going Beta AppID. Games under this category include: Team Fortress 2</div>
                        
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
                    
                    <dl class="dl-horizontal">
                      <dt>images<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>An array of logo and icon images related to the title.</dd>
                    </dl>
                    
                    <div class="row">
                      <div class="span7 offset1">
                        
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
                    
                    <dl class="dl-horizontal">
                      <dt>strings<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>Description strings for the title. All are formatted as HTML escaped.</dd>
                    </dl>
                    
                    <div class="row">
                      <div class="span7 offset1">
                        
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
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>system_req<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>HTML escaped text of system requirements, separated by platform.</dd>
                    </dl>
                    
                    <div class="row">
                      <div class="span7 offset1">
                        
                        <dl class="dl-horizontal">
                          <dt>windows<br><?php print SteamDocs::param("array"); ?></dt>
                          <dd>For Windows platforms.</dd>
                        </dl>
                        
                        <div class="row">
                          <div class="span7 offset1">
                            
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
                        
                        <dl class="dl-horizontal">
                          <dt>mac<br><?php print SteamDocs::param("array"); ?></dt>
                          <dd>For Mac OS X platforms.</dd>
                        </dl>
                        
                        <div class="row">
                          <div class="span7 offset1">
                            
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
                        
                        <dl class="dl-horizontal">
                          <dt>linux<br><?php print SteamDocs::param("array"); ?></dt>
                          <dd>For Linux platforms.</dd>
                        </dl>
                        
                        <div class="row">
                          <div class="span7 offset1">
                            
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
                      <dt>genres<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>An array of strings listing the genres the title is attached to.</dd>
                    </dl>

                    <div class="row">
                      <div class="span7 offset1">
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
                    
                      <div class="row">
                        <div class="span8 offset1">
                          
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
                    
                      <div class="row">
                        <div class="span8 offset1">
                          
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
                      
                      <div class="row">
                        <div class="span8 offset1">
                          
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
                    
                      <div class='row'>
                        <div class="span8 offset1">
                          
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
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>ratings<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>Array of content ratings title has assigned.</dd>
                    </dl>
                      
                      <div class="row">
                        <div class="span8 offset1">
                          
                          <div class="alert alert-info">All titles contain each ratings board field, but default to <code>UNRATED</code> status.</div>
                          
                          <dl class="dl-horizontal">
                            <dt>esrb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Rating for the <abbr title="Electronic Software Ratings Board"><a href="http://www.esrb.org/">ESRB</a></abbr>
                          </dl>
                          
                            <div class="row-fluid">
                              <div class="span11 offset1">
                                
                                <dl class="dl-horizontal">
                                  <dt>class<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>Class rating for the title.</dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <ul class="list_col2">
                                      <li><code>UNRATED</code> &mdash; Unrated <span class="label">(Default)</span></li>
                                      <li><code>RP</code> &mdash; Rating Pending</li>
                                      <li><code>AO</code> &mdash; Adults Only</li>
                                      <li><code>M</code> &mdash; Mature</li>
                                      <li><code>T</code> &mdash; Teen</li>
                                      <li><code>E10</code> &mdash; Everyone 10+</li>
                                      <li><code>E</code> &mdash; Everyone</li>
                                      <li><code>EC</code> &mdash; Early Childhood</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("array"); ?></dt>
                                  <dd>Content descriptors associated to the title.</dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <div class="alert alert-info">Each string is included as a separate entry in the array as applied. Default is no entries in the array.</div>
                                    <ul class="list_col2">
                                      <li><code>"Alcohol Reference"</code></li>
                                      <li><code>"Animated Blood"</code></li>
                                      <li><code>"Blood"</code></li>
                                      <li><code>"Blood and Gore"</code></li>
                                      <li><code>"Cartoon Violence"</code></li>
                                      <li><code>"Comic Mischief"</code></li>
                                      <li><code>"Crude Humor"</code></li>
                                      <li><code>"Drug Reference"</code></li>
                                      <li><code>"Fantasy Violence"</code></li>
                                      <li><code>"Intense Violence"</code></li>
                                      <li><code>"Language"</code></li>
                                      <li><code>"Lyrics"</code></li>
                                      <li><code>"Mature Humor"</code></li>
                                      <li><code>"Nudity"</code></li>
                                      <li><code>"Partial Nudity"</code></li>
                                      <li><code>"Real Gambling"</code></li>
                                      <li><code>"Sexual Content"</code></li>
                                      <li><code>"Sexual Themes"</code></li>
                                      <li><code>"Sexual Violence"</code></li>
                                      <li><code>"Simulated Gambling"</code></li>
                                      <li><code>"Strong Language"</code></li>
                                      <li><code>"Strong Lyrics"</code></li>
                                      <li><code>"Strong Sexual Content"</code></li>
                                      <li><code>"Suggestive Themes"</code></li>
                                      <li><code>"Tobacco Reference"</code></li>
                                      <li><code>"Use of Alcohol"</code></li>
                                      <li><code>"Use of Drugs"</code></li>
                                      <li><code>"Use of Tobacco"</code></li>
                                      <li><code>"Violence"</code></li>
                                      <li><code>"Violent References"</code></li>
                                      <li><code>"Shares Info"</code></li>
                                      <li><code>"Shares Location"</code></li>
                                      <li><code>"Users Interact"</code></li>
                                      <li><code>"Online Interactions"</code></li>
                                      <li><code>"Music Downloads"</code></li>
                                    </ul>
                                  </div>
                                </div>
                                
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>pegi<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Pan European Game Information"><a href="http://www.pegi.info/">PEGI</a></abbr>
                          </dl>
                          
                            <div class="row-fluid">
                              <div class="span11 offset1">
                                
                                <dl class="dl-horizontal">
                                  <dt>class<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>Class rating for the title.</dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <ul class="list_col2">
                                      <li><code>UNRATED</code> &mdash; Unrated <span class="label">(Default)</span></li>
                                      <li><code>RP</code> &mdash; Rating Pending</li>
                                      <li><code>18</code> &mdash; Ages 18+</li>
                                      <li><code>16</code> &mdash; Ages 16+</li>
                                      <li><code>12</code> &mdash; Ages 12+</li>
                                      <li><code>7</code> &mdash; Ages 7+ (6+ in Portugal)</li>
                                      <li><code>3</code> &mdash; Ages 3+ (4+ in Portugal)</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("array"); ?></dt>
                                  <dd>Content descriptors associated to the title.</dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <div class="alert alert-info">Each string is included as a separate entry in the array as applied. Default is no entries in the array. Always in English regardless of <span class="label">lang</span> input.</div>
                                    <ul class="list_col2">
                                      <li><code>"Bad Language"</code></li>
                                      <li><code>"Discrimination"</code></li>
                                      <li><code>"Drugs"</code></li>
                                      <li><code>"Fear"</code></li>
                                      <li><code>"Gambling"</code></li>
                                      <li><code>"Sex"</code></li>
                                      <li><code>"Violence"</code></li>
                                      <li><code>"Online Gameplay"</code></li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.<br>
                                    If <span class="label">lang</span> parameter is supported by PEGI, output provides the string in that input language. Otherwise defaults to English. Applies to: French, German, Finnish, Swedish, Icelandic, Hebrew, Arabic, Lithuanian, Dutch, &amp; Slovene.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                            
                          <dl class="dl-horizontal">
                            <dt>acb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Australian Classification Board"><a href="http://www.classification.gov.au/">ACB</a></abbr> (Formally <abbr title="Office of Film and Literature Classification">OFLC</abbr>)
                          </dl>
                          
                            <div class="row-fluid">
                              <div class="span11 offset1">
                                
                                <dl class="dl-horizontal">
                                  <dt>class<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>Class rating for the title.</dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <ul class="list_col2">
                                      <li><code>UNRATED</code> &mdash; Unrated <span class="label">(Default)</span></li>
                                      <li><code>RC</code> &mdash; Refused Classification</li>
                                      <li><code>RP</code> &mdash; Rating Pending</li>
                                      <li><code>X</code> &mdash; Restricted (X18+)</li>
                                      <li><code>R</code> &mdash; Restricted (R18+)</li>
                                      <li><code>MA</code> &mdash; Mature Accompanied (MA15+)</li>
                                      <li><code>M</code> &mdash; Mature</li>
                                      <li><code>PG</code> &mdash; Parental Guidance</li>
                                      <li><code>G</code> &mdash; General</li>
                                      <li><code>E</code> &mdash; Exempt</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                    
                    <div class="well">
                    <dl class="dl-horizontal">
                      <dt>screenshots<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>All official screenshots displayed on the title's store page.</dd>
                    </dl>
                      
                      <div class='row'>
                        <div class="span8 offset1">
                          
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
                      
                      <div class="alert alert-info">The following fields are per entry in the array.</div>
                      
                      <div class='row'>
                        <div class="span8 offset1">
                          
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
                    
              </div>
            </div>
            
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppData/v0001/?appids=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppData_00" ); ?>
            
            
            
          </section>
