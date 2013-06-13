          <section id="General">
            <div class="page-header">
              <h1>General Notes</h1>
            </div>
            
            <h2>New Methods to Existing Interface</h2>
            <p><code>ISteamApps</code> currently exists in the Steam WebAPI for other functions. This proposal is to extend the existing interface, rather than create a new interface. The goal is to expand the available data for all applications on Steam.</p>
            <p class="alert alert-info">This proposal won't mention the other existing methods of <code>ISteamApps</code>, but they should continue to exist.</p>
            
            <h2>Applies to all Software on Steam</h2>
            <p>This proposal assumes all software works with this interface. As long as an AppID exists for the product, it should work in the interface.</p>
            
            <h2>Definitions</h2>
            <dl>
              <dt>AppID</dt>
              <dd>Every game and software released on Steam is associated with an integer. This number can be found via <code>ISteamApps::GetAppList</code>.</dd>
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
                  <td><span class="badge badge-inverse">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</span></td>
                </tr>
                <tr>
                  <td>format</td>
                  <td>string</td>
                  <td>Requested form of output. XML, VDF, or JSON (default)</td>
                  <td><span class="badge badge-inverse">json</span></td>
                </tr>
                <tr>
                  <td>language</td>
                  <td>string</td>
                  <td><a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">ISO 639-1</a> language code.</td>
                  <td><span class="badge badge-inverse">en</span></td>
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
                  <td><span class="badge badge-inverse">1</span></td>
                </tr>
                <tr>
                  <td>message</td>
                  <td>string</td>
                  <td>Human readable string describing <code>success</code> description.</td>
                  <td><span class="badge badge-inverse">Success</span></td>
                </tr>
              </tbody>
            </table>
          
        </section>