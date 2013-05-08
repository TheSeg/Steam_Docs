          <section id="ResolveVanityURL">
            <div class="page-header">
              <h1>::ResolveVanityURL</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Provides a group’s ID number based on the vanity URL or AppID Number.</p>
            <p>This function is similar to the <code>ISteamUser::GetPlayerSummary</code> method.
            
            <h2>Input</h2>
            <dl>
              <dt>vanityUrl <span class="text-info">(string)</span></dt>
              <dd>One of the following types of information:
                <ul>
                  <li>The 12 character Abbreviation name.</li>
                  <li>The full URL of the group.</li>
                  <li>The ID number of the group.</li>
                </ul>
              </dd>
            </dl>
            
            <h2>Output</h2>
            
            <dl>
              <dt>success <span class="text-info">(int)</span></dt>
              <dd>Status return number of query. Possible responses include:
                <ul>
                  <li>1 = Success.</li>
                  <li>42 = No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt>message <span class="text-info">(string)</span></dt>
              <dd>Status return string of query. Possible responses include:
                <ul>
                  <li>Success.</li>
                  <li>No match found.</li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt>groupID <span class="text-info">(int)</span></dt>
              <dd>Steam Group ID number of query.</dd>
            </dl>
            <dl>
              <dt>AppID <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>If returned group is an official game group, value returns the AppID of the game.</dd>
            </dl>
            
            <h2>Example:</h2>
            
            <blockquote>GET https://api.steampowered.com/ISteamGroup/ResolveVanityURL/v0001/?vanityurl=XXXXXXXXXXXXXX</blockquote>
            
            <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#ResolveVanityURL_Example00_JSON" data-toggle="tab">JSON</a></li>
    <li><a href="#ResolveVanityURL_Example00_XML" data-toggle="tab">XML</a></li>
    <li><a href="#ResolveVanityURL_Example00_VDF" data-toggle="tab">VDF</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="ResolveVanityURL_Example00_JSON">
      <pre class="prettyprint lang-js "><?php print file_get_contents(dirname(__FILE__)."/ResolveVanityURL_example00.js"); ?></pre>
    </div>
    <div class="tab-pane" id="ResolveVanityURL_Example00_XML">
      <pre class="prettyprint "><?php print htmlentities(file_get_contents(dirname(__FILE__)."/ResolveVanityURL_Example00.xml"),ENT_XML1); ?></pre>
    </div>
    <div class="tab-pane" id="ResolveVanityURL_Example00_VDF">
      <pre class="prettyprint"><?php print file_get_contents(dirname(__FILE__)."/ResolveVanityURL_example00.vdf"); ?></pre>
    </div>
</div>
    
            
          </section>
