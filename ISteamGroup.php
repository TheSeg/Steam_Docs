<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamGroup";
$page['desc'] = "Steam WebAPI Proposal: ISteamGroup, a interface for Steam Community &amp; Game Groups.";
include_once("./template/html_start.php");
?>
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>ISteamGroup</h1>
    <p class="lead">A Steam WebAPI interface for Steam Community &amp; Game Groups.</p>
  </div>
</header>

<div class="container">
      
      <!-- Docs Nav -->
      <div class="row">
        <div id="floatNavbar" class="span3 bs-docs-sidebar">
          <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#General">General Notes</a></li>
            <li><a href="#ResolveVanityURL">ResolveVanityURL</a></li>
            <li><a href="#ResolveGameID">ResolveGameID</a></li>
            <li><a href="#GetGroupSummaries">GetGroupSummaries</a></li>
            <li><a href="#GetAnnouncements">GetAnnouncements</a></li>
            <li><a href="#GetEvents">GetEvents</a></li>
            <li><a href="#GetGroupStatus">GetGroupStatus</a></li>
            <li><a href="#GetGroupMembers">GetGroupMembers</a></li>
            <li><a href="#GetPermissionsScheme">GetPermissionsScheme</a></li>
          </ul>
        </div>
        
        
        <div class="span9">          
          <section id="General">
            <div class="page-header">
              <h1>ISteamGroup - Proposal Goals</h1>
            </div>
            
            <h2>A New Interface</h2>
            <p>To facilitate Group functionality for WebAPI, a new interface is best to implement a suite of methods for groups. While information may work in concert with other interfaces, Groups themselves are robust enough to warrant a new interface.</p>
            
            <h2>New Methods</h2>
            <p>The new methods for this group separate data based on frequency of need. Metadata for example doesn’t need to be polled as frequently as the online status of group members.</p>
            
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
                  <td>ISO 639-1 language code.</td>
                  <td>en</td>
                </tr>
              </tbody>
            </table>
          </section>
          
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
      <pre class="prettyprint lang-js ">
{
  "response" : {
    "success" : 1,
    "message" : "success",
    "groupID" : 0,
    "AppID" : 0,
  }
}</pre>
    </div>
    <div class="tab-pane" id="ResolveVanityURL_Example00_XML">
      <pre class="prettyprint ">
&lt;response&gt;
	&lt;success&gt;1&lt;/success&gt;
	&lt;message&gt;success&lt;/success&gt;
	&lt;groupid&gt;76561197983121111&lt;/groupid&gt;
	&lt;appid&gt;0&lt;/appid&gt;
&lt;/response&gt;</pre>
    </div>
    <div class="tab-pane" id="ResolveVanityURL_Example00_VDF">
      <pre class="prettyprint">
"response"
{
	"success"	"1"
	"message"	"success"
	"groupID"	"0"
	"AppID"	"0"
}</pre>
    </div>
</div>
    
            
          </section>
          
          <section id="ResolveGameID">
            <div class="page-header">
              <h1>::ResolveGameID</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>Search for groups associated with a Game's AppID. Can search for official game groups, community groups, or both.</p>
            <p>Unlike <code>ISteamGroup::ResolveVanityURL</code>, this method searches for groups related to an AppID. This allows searches for either an official game group of the app, or returns community based groups that have included the target game by association.</p>
            
            <h2>Input</h2>
            <dl>
              <dt>appid <span class="text-info">(int)</span></dt>
              <dd>The steam AppID number of the game to search against.</dd>
            </dl>
            <dl>
              <dt>official_only <span class="text-info">(bool)</span> <span class="text-warning">[optional]</span></dt>
              <dd>If true, method searched only for the official game group associated with the AppID.</dd>
            </dl>
            <dl>
              <dt>count <span class="text-info">(int)</span> <span class="text-warning">[optional]</span></dt>
              <dd>Maximum number of groups to return in a set.</dd>
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
            <p><strong>groups <span class="text-info">(array)</span></strong></p>
            <dl>
              <dt>gid <span class="text-info">(int)</span></dt>
              <dd>If returned group is an official game group, value returns the AppID of the game.</dd>
            </dl>
            
            
          </section>
          
          <section id="GetGroupSummeries">
            <div class="page-header">
              <h1>::GetGroupSummeries</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
          <section id="GetAnnouncements">
            <div class="page-header">
              <h1>::GetAnnouncements</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
          <section id="GetEvents">
            <div class="page-header">
              <h1>::GetEvents</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
          <section id="GetGroupStatus">
            <div class="page-header">
              <h1>::GetGroupStatus</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
          <section id="GetGroupMembers">
            <div class="page-header">
              <h1>::GetGroupMembers</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
          <section id="GetPermissionsScheme">
            <div class="page-header">
              <h1>::GetPermissionsScheme</h1>
            </div>
            
            <h2>Method Description</h2>
            <p>-</p>
          </section>
          
        </div><!--/span-->
      
      </div><!--/row-->
    </div>

<?php include_once("./template/html_end.php"); ?>