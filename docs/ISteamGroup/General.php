          <section id="General">
            <div class="page-header">
              <h1>General Notes</h1>
            </div>
            
            <h2>A New Interface</h2>
            <p>To facilitate Group functionality for WebAPI, a new interface is best to implement a suite of methods for groups. While information may work in concert with other interfaces, Groups themselves are robust enough to warrant a new interface.</p>
            
            <h2>Official Game Groups vs. Community Groups</h2>
            <p>Steam Community groups fall into two types:</p>
            
            <dl>
              <dt>Official Game Groups</dt>
              <dd>
                Groups created by the developer or publisher of a officially released title and directly associated to an AppID.
                <br>
                <span class="text-info">Example: <a href="http://steamcommunity.com/games/PuzzleAgent2/" target="_blank">Puzzle Agent 2</a></span>
                <br>
                <a href="http://steamcommunity.com/actions/GroupList?sortby=SortByName&amp;filter=ogg" target="_blank">List of Official Game Groups</a>
              </dd>
            </dl>
            <dl>
              <dt>Community Groups</dt>
              <dd>
                All other Steam Community groups are community groups.
                <br>
                While some groups may be official to publishers, developers, or even Valve itself, all groups not directly related to a AppID.
                <br>
                <span class="text-info">Example: <a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span>
              </dd>
            </dl>
            <p>Both groups types are functionally the same but for a few key differences. Game Groups have connections to their AppID and game information, including stats and store connections. Methods will behave the same between both group types unless explicitly stated.</p>
            
            
            <h2>Definitions</h2>
            <dl>
              <dt>AppID</dt>
              <dd>Every game and software released on Steam is associated with an integer. This number can be found via <code>ISteamApps::GetAppList</code>.</dd>
            </dl>
            <dl>
              <dt>guid</dt>
              <dd>A 64-bit integer referring to a particular group. While the user is presented with either abbreviation or full title strings, the group's key identifier is this integer.
                <br>
                All <code>ISteamGroup</code> methods require a guid to key from, except for methods used to obtain the guid.</dd>
            </dl>
            <h2>Common Inputs</h2>
            <p>Unless otherwise noted, All Methods will take the following input parameters, even if the method may not need them.</p>
            
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Key Name</th>
                  <th>Type</th>
                  <th>Description</th>
                  <th>Example</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>key</td>
                  <td>string</td>
                  <td>WebAPI Application Key.</td>
                  <td>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
                </tr>
                <tr>
                  <td>format</td>
                  <td>string</td>
                  <td>Requested form of output. XML, VDF, or JSON (default)</td>
                  <td>json</td>
                </tr>
                <tr>
                  <td>language</td>
                  <td>string</td>
                  <td><a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">ISO 639-1</a> language code.</td>
                  <td>en</td>
                </tr>
              </tbody>
            </table>
          </section>
