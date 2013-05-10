          <section id="General">
            <div class="page-header">
              <h1>General Notes</h1>
            </div>
            
            <h2>A New Interface</h2>
            <p>To facilitate Community Hub functionality for WebAPI, a new interface is best to implement a suite of methods for Hubs. While information may work in concert with other interfaces, Hubs are robust enough to warrant a new interface.</p>
            
            <h2>Formally Game Groups</h2>
            <p>Hubs were previously known as "Groups". Previous functionality of groups were preserved with the addition of additional features and integration of other official game resources. <code>ISteamHub</code> is designed to make the transition from groups seamless by making both official game and community hubs use the same methods where possible.</p>
            
            <h2>Official Game Hubs vs. Community Hubs</h2>
            <p>Steam Community Hubs fall into two types:</p>
            
            <dl>
              <dt>Official Game Hubs</dt>
              <dd>
                A Hub for an officially released title and directly associated to an AppID.
                <br>
                <span class="text-info">Example: <a href="http://steamcommunity.com/app/PuzzleAgent2/" target="_blank">Puzzle Agent 2</a></span>
              </dd>
            </dl>
            <dl>
              <dt>Community Hubs</dt>
              <dd>
                All other Steam Community hubs are community hubs.
                <br>
                While some hubs may be official to publishers, developers, or even Valve itself, all hubs not directly tied to an AppID.
                <br>
                <span class="text-info">Example: <a href="http://steamcommunity.com/groups/ablegamers" target="_blank">AbleGamers</a></span>
              </dd>
            </dl>
            <p>Both  types are functionally the same but for a few key differences. Game Hubs have connections to their AppID and game information, including stats and store connections. Methods will behave the same between both types unless explicitly stated.</p>
            
            
            <h2>Definitions</h2>
            <dl>
              <dt>AppID</dt>
              <dd>Every game and software released on Steam is associated with an integer. This number can be found via <code>ISteamApps::GetAppList</code>.</dd>
            </dl>
            <dl>
              <dt>guid</dt>
              <dd>A 64-bit integer referring to a particular hub. While the user is presented with either abbreviation or full title strings, the hub's key identifier is this integer.
                <br>
                All <code>ISteamHub</code> methods require a guid to key from, except for methods used to obtain the guid.</dd>
            </dl>
            <h2 id="General_CommonInputs">Common Inputs</h2>
            <p>Unless otherwise noted, all methods will take the following input parameters, even if the method may not need them.</p>
            
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
            
          <h2 id="General_CommonOutputs">Common Outputs</h2>
          <p>Unless otherwise noted, all methods will return the following parameters. For methods that return an array of results, these fields will be included at the top-most level of a return, before the array of results.</p>
          
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
                  <td>success</td>
                  <td>int</td>
                  <td>Status return number of query. Possible responses include:
                    <ul>
                      <li>1 = Success.</li>
                      <li>42 = No match found.</li>
                  </td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>message</td>
                  <td>string</td>
                  <td>Human readable string describing <code>success</code> description.</td>
                  <td>Success</td>
                </tr>
              </tbody>
            </table>
          
          <h2 id="General_MemberRoleValues">Member Role Values</h2>
            <p>Some methods return the role of a member in a hub. These roles and return values are outlined below.</p>
            
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Value</th>
                  <th>Roll</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0</td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Moderator</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Officer</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Owner</td>
                </tr>
              </tbody>
            </table>

          
          </section>
