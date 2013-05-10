          <section id="GetAnnouncements">
            <div class="page-header">
              <h1>::GetAnnouncements</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Returns all (or some) announcements made by the hub.</p>
            <p>Announcements allow hub members to communicate directly to members. These act as ways to send messages to all members who are apart of the hub community.</p>
            <p>This specification is modeled after <code>ISteamNews::GetNewsForApp</code> for consistency. However, there are significant differences between the two methods.</p>
            
            <h3>Privacy Settings</h3>
            <p>The visibility of announcements depends on the permissions allowed for the WebAPI Key submitted. If the announcement is publicly viewable, then any request will return the post(s). If a hub or post is members only, the method will not return announcements that are not public.</p>
            
            <h3>Comments</h3>
            <p>While each announcement can have comments, the method will only return statistics of comments, not the content. It's encouraged for users of WebAPI to directly link to the page for the announcement for comments.</p>
            
            <h3>Pagination</h2>
            <p>The method allows pagination of announcements in a given search query. Using the provided search variables, a request can limit by time and/or number of count returns. Queries can also skip a number of announcements if <code>count</code> is a part of the query.</p>
            
            <h2>Inputs</h2>
            
            <?php print SteamDocs::seeInputs(); ?>
            
            <div class="well alert alert-info">
              <strong>Info:</strong> Method will take <em>either</em> <code>guid</code> <em>or</em> <code>appid</code> parameters.
            </div>
            
            <dl class="dl-horizontal">
              <dt>guid<br><?php print SteamDocs::param("int",false); ?></dt>
              <dd>Hub ID number to query against.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>appid<br><?php print SteamDocs::param("int",false); ?></dt>
              <dd>App ID number to query against.</dd>
            </dl>
            
            <div class="alert alert-info">
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
              <dt>announcements<br><?php print SteamDocs::param("array"); ?></dt>
              <dd></dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>gid<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Unique ID number of announcement.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>title<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>Title (aka Headline) string of announcement item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>url<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>URL of announcement item.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>author<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Steam ID number of the creator of the specific announcement.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>contents<br><?php print SteamDocs::param("string"); ?></dt>
              <dd>HTML string of announcement contents.<br>Returns full contents unless <code>maxlength</code> is defined.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>datetime<br><?php print SteamDocs::param("unix timestamp"); ?></dt>
              <dd>Unix timestamp of when announcement was posted. Always returns in UTC.</dd>
            </dl>
            
            <dl class="dl-horizontal">
              <dt>comments<br><?php print SteamDocs::param("int"); ?></dt>
              <dd>Number of comments made for this particular post.</dd>
            </dl>
            
            <?php
            //date_default_timezone_set('UTC');
            //04:15PM on July 01, 2011
            print mktime(19,8,0,6,28,2011);
            ?>
            
            </div>
            
            <h3>Examples</h3>
            
            <h4>Game Hub: <span class="text-info"><a href="http://steamcommunity.com/app/94590" target="_blank">Puzzle Agent 2</a></span></h4>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetAnnouncements/v0001/?appid=94590</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetAnnouncements_00" ); ?>
            
            
          </section>
