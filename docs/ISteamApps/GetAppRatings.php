          <section id="GetAppRatings">
            <div class="page-header">
              <h1>::GetAppRatings</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>This method provides content ratings information associated officially with a software title released on Steam.</p>
            
            <p>A number of titles have a range of content ratings information associated with the title. This method returns the relevant ratings information to each title, if applicable. While the output fields are the same across all ratings boards, the values will change wildly between each board. API users will need to familarize themselves with each system they plan to use.</p>
            
            <h3>Language Considerations</h3>
            
            <div class="alert alert-warning">The WebAPI assumes all returns will be in English except for the <span class="label label-inverse">desc_string</span> field.</div>
            
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

                    <dl class="dl-horizontal">
                      <dt>ratings<br><?php print SteamDocs::param("array"); ?></dt>
                      <dd>Array of content ratings title has assigned.</dd>
                    </dl>
                      
                      <div class="row-fluid">
                        <div class="span11 offset1">
                          <div class="well">
                          
                          <div class="alert alert-info">All titles contain each ratings board field, but default to <code>UNRATED</code> status.</div>
                          
                          <dl class="dl-horizontal">
                            <dt>acb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Australian Classification Board"><a href="http://www.classification.gov.au/">ACB</a></abbr>, formally <abbr title="Office of Film and Literature Classification">OFLC</abbr> (Australia &amp; New Zealand).
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
                                  <dt>desc<br><?php print SteamDocs::param("array"); ?></dt>
                                  <dd>Content descriptors associated to the title.</dd>
                                </dl>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>bbfc<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="British Board of Film Classification"><a href="http://www.bbfc.co.uk/">BBFC</a></abbr> (United Kingdom).
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
                                      <li><code>R</code> &mdash; Refused Classification</li>
                                      <li><code>R18</code> &mdash; Restricted 18</li>
                                      <li><code>18</code> &mdash; 18+</li>
                                      <li><code>15</code> &mdash; 15+</li>
                                      <li><code>12</code> &mdash; 12+</li>
                                      <li><code>PG</code> &mdash; Parental Guidance</li>
                                      <li><code>U</code> &mdash; Universal</li>
                                      <li><code>E</code> &mdash; Exempt</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>cero<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Computer Entertainment Rating Organization"><a href="http://www.cero.gr.jp/">CERO</a></abbr> (Japan).
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
                                      <li><code>RP</code> &mdash; Rating Scheduled<ul><li><small>Using `RP` for consistency. </small></li></ul></li>
                                      <li><code>RC</code> &mdash; CERO Regulations-Compatible</li>
                                      <li><code>Z</code> &mdash; Restricted to ages 18 and up.</li>
                                      <li><code>D</code> &mdash; Ages 17 and up.</li>
                                      <li><code>C</code> &mdash; Ages 15 and up.</li>
                                      <li><code>B</code> &mdash; Ages 12 and up.</li>
                                      <li><code>A</code> &mdash; All ages.</li>
                                      <li><code>E</code> &mdash; Educational/Database</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                <div class="row-fluid">
                                  <div class="span10 offset2">
                                    <ul class="list_col2">
                                      <li><code>"Love"</code></li>
                                      <li><code>"Sexual Content"</code></li>
                                      <li><code>"Violence"</code></li>
                                      <li><code>"Horror"</code></li>
                                      <li><code>"Drinking"</code></li>
                                      <li><code>"Gambling"</code></li>
                                      <li><code>"Crime"</code></li>
                                      <li><code>"Drugs"</code></li>
                                      <li><code>"Language"</code></li>
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
                            
                          <dl class="dl-horizontal">
                            <dt>csrr<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Computer Software Rating Regulation"><a href="http://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=J0030086">CSRR</a></abbr> (Taiwan).
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
                                      <li><code>R</code> &mdash; 限制級 "Restrict" (18+)</li>
                                      <li><code>15</code> &mdash; 輔15級 "Counsel 15+"</li>
                                      <li><code>12</code> &mdash; 輔12級 "Counsel 12+"</li>
                                      <li><code>P</code> &mdash; 保護級 "Protect" (6+)</li>
                                      <li><code>G</code> &mdash; 普遍級 "General" (All ages)</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>dejus<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Department of Justice, Rating, Titles and Qualification"><a href="http://www.mj.gov.br/classificacao">DEJUS</a></abbr> (Brazil).
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
                                      <li><code>18</code> &mdash; PG-18</li>
                                      <li><code>16</code> &mdash; PG-16</li>
                                      <li><code>14</code> &mdash; PG-14</li>
                                      <li><code>12</code> &mdash; PG-12</li>
                                      <li><code>10</code> &mdash; PG-10</li>
                                      <li><code>L</code> &mdash; GA</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>esrb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Rating for the <abbr title="Electronic Software Ratings Board"><a href="http://www.esrb.org/">ESRB</a></abbr> (North America).
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
                                
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                               
                              </div>
                            </div>
                            
                          <dl class="dl-horizontal">
                            <dt>fpb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Film and Publication Board"><a href="http://www.fpb.org.za/">FPB</a></abbr> (South Africa).
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
                                      <li><code>18</code> &mdash; Not approved for young persons aged under 18.</li>
                                      <li><code>16</code> &mdash; Approved for children aged 16 and above.</li>
                                      <li><code>13</code> &mdash; Approved for children aged 13 and above.</li>
                                      <li><code>10</code> &mdash; Approved for children aged 10 and above.</li>
                                      <li><code>PG</code> &mdash; Parental Guidance.</li>
                                      <li><code>A</code> &mdash; Approved for all ages.</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc_string<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors and other descriptors associated to the title as a normalized string.
                                  </dd>
                                </dl>
                                
                               
                              </div>
                            </div>
                          
                          
                          <dl class="dl-horizontal">
                            <dt>grb<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Game Rating Board"><a href="http://www.fpb.org.za/">GRB</a></abbr> (South Korea).
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
                                      <li><code>18</code> &mdash; 18+</li>
                                      <li><code>15</code> &mdash; 15+</li>
                                      <li><code>12</code> &mdash; 12+</li>
                                      <li><code>ALL</code> &mdash; All Ages</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
                                  <div class="row-fluid">
                                    <div class="span10 offset2">
                                      <ul class="list_col2">
                                        <li><code>Sexuality</code></li>
                                        <li><code>Violence</code></li>
                                        <li><code>Fear, Horror, Threatening</code></li>
                                        <li><code>Gambling</code></li>
                                        <li><code>Alcohol, Tobacco, Drug</code></li>
                                        <li><code>Language</code></li>
                                        <li><code>Crime, anti-social, or Anti-Governmental Messages</code></li>
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
                          
                          
                          <dl class="dl-horizontal">
                            <dt>pegi<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Pan European Game Information"><a href="http://www.pegi.info/">PEGI</a></abbr>. (Select countries in Europe &amp; others)
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
                            <dt>usk<br><?php print SteamDocs::param("array"); ?></dt>
                            <dd>Ratings information for <abbr title="Unterhaltungssoftware SelbstKontrolle"><a href="http://www.usk.de/">USK</a></abbr> (Germany).
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
                                      <li><code>18</code> &mdash; Not approved for young persons aged under 18.</li>
                                      <li><code>16</code> &mdash; Approved for children aged 16 and above.</li>
                                      <li><code>12</code> &mdash; Approved for children aged 12 and above.</li>
                                      <li><code>6</code> &mdash; Approved for children aged 6 and above.</li>
                                      <li><code>0</code> &mdash; Approved for all ages.</li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <dl class="dl-horizontal">
                                  <dt>desc<br><?php print SteamDocs::param("string"); ?></dt>
                                  <dd>
                                    Content descriptors associated to the title.
                                  </dd>
                                </dl>
                                
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
            <h3><span class="text-info"><a href="http://store.steampowered.com/app/94590" target="_blank">Puzzle Agent 2</a></span> - No Ratings</h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppRatings/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppRatings_00" ); ?>
            
            <h3><span class="text-info"><a href="http://store.steampowered.com/app/94590" target="_blank">Psychonatus</a></span> - Various Ratings</h3>
            <blockquote>GET https://api.steampowered.com/ISteamApps/GetAppRatings/v0001/?appid=3830</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAppRatings_01" ); ?>
            
            
            
          </section>
