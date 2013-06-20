          <section id="GetPermissions">
            <div class="page-header">
              <h1>::GetPermissions</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Returns the permissions a queried group has for members and the public.</p>
            
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
            
            <dl class="dl-horizontal">
              <dt>permissions<br><?php print SteamDocs::param("array"); ?></dt>
              <dd>Main Array.</dd>
            </dl>
            
            <div class="row-fluid">
              <div class="span11 offset1">
                <div class="well well-small">
                  
                  <dl class="dl-horizontal">
                    <dt>inviteOnly<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>If value is <span class="badge badge-inverse">1</span>, then the group is invitation only.</dd>
                  </dl>
            
                  <?php print SteamDocs::seeRoles(); ?>
            
                  <dl class="dl-horizontal">
                    <dt>canEditProps<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership status a user needs to edit Hub details.
                      <br>
                      This includes avatars, hub description, hub title, and other high level hub details.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canMakeOfficer<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to make a member an officer.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canSchedule<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to make events for the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canAnnounce<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to make announcements for the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canPoTW<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to make a member the "Player of the Week" for the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canInvite<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to invite new members into the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canKickMembers<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to kick members from the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canChatAccess<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to enter the hub's chat room.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canChatKick<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to kick users from the hub's chat room.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canChatBan<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to ban users from using the hub's chat room.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canChatInvite<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to invite users to use the hub's chat room.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canPostComments<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to post comments in the hub.
                    </dd>
                  </dl>
            
                  <dl class="dl-horizontal">
                    <dt>canDeleteComments<br><?php print SteamDocs::param("int",false); ?></dt>
                    <dd>
                      Level of membership to delete comments in the hub.
                    </dd>
                  </dl>
                  
                </div>
              </div>
            </div>
            
            
            <h2>Examples</h2>
            
            <h3>Community Hub: <span class="text-info"><a href="http://steamcommunity.com/groups/SegTestGroup" target="_blank">Seg Test Group</a></span></h3>
            <blockquote>GET https://api.steampowered.com/ISteamHub/GetPermissions/v0001/?guid=4178173</blockquote>
            
            <?php print SteamDocs::CreateDocExampleFormats( __FILE__, "GetPermissions_00" ); ?>
            
          </section>
