<?php
include_once("./template/init.php");
$page['title'] = "Steam WebAPI Proposal &middot; ISteamGroup";
$page['desc'] = "Steam WebAPI Proposal: ISteamGroup, a interface for Steam Community &amp; Game Groups.";
include_once("./template/html_start.php");
?>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3 bs-docs-sidebar">
          <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#General">General Notes</a></li>
            <li class="divider"></li>
            <li class="nav-header">ResolveVanityURL</li>
            <li><a href="#ResolveVanityURL">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetGroupSummaries</li>
            <li><a href="#GetGroupSummaries">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetAnnouncements</li>
            <li><a href="#GetAnnouncements">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetEvents</li>
            <li><a href="#GetEvents">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetGroupStatus</li>
            <li><a href="#GetGroupStatus">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetGroupMembers</li>
            <li><a href="#GetGroupMembers">Overview</a></li>
            <li class="divider"></li>
            <li class="nav-header">GetPermissionsScheme</li>
            <li><a href="#GetPermissionsScheme">Overview</a></li>
          </ul>
        </div>
        <div class="span9">          
          <section id="General">
            <div class="page-header">
              <h1>ISteamGroup::</h1>
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
            <p>Provides a group’s ID number based on the vanity URL given.</p>
            
            <h2>Input</h2>
            <dl>
              <dt>vanityUrl (string)</dt>
              <dd>URL or group Abbreviation name.</dd>
            </dl>
            
            <h2>Output</h2>
            
<pre class="prettyprint lang-js ">
{
  "firstName" : "John",
  "lastName" : "Smith",
  "age" : 25,
  "address" : {
    "streetAddress": "21 2nd Street",
    "city" : "New York",
    "state" : "NY",
    "postalCode" : "10021"
  },
  "phoneNumber":[
    {
      "type" : "home",
      "number": "212 555-1234"
    },
    {
      "type" : "fax",
      "number": "646 555-4567"
    }
  ]
}</pre>
            
          </section>
        </div><!--/span-->
      
      </div><!--/row-->
    </div>

<?php include_once("./template/html_end.php"); ?>