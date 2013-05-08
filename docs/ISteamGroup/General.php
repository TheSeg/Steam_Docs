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
