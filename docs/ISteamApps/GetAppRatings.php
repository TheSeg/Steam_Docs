          <section id="GetAppRatings">
            <div class="page-header">
              <h1>::GetAppRatings</h1>
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
            
            
            <h2>Examples</h2>
            <h3><span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppRatings/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppRatings_00" ); ?>
            
            
            
          </section>
