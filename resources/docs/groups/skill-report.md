# Skill Report


## Display a listing of the SkillReport.


GET|HEAD /skillReports

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/skill_reports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_reports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```
<div id="execution-results-GETapi-skill_reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-skill_reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-skill_reports"></code></pre>
</div>
<div id="execution-error-GETapi-skill_reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-skill_reports"></code></pre>
</div>
<form id="form-GETapi-skill_reports" data-method="GET" data-path="api/skill_reports" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-skill_reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-skill_reports" onclick="tryItOut('GETapi-skill_reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-skill_reports" onclick="cancelTryOut('GETapi-skill_reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-skill_reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/skill_reports</code></b>
</p>
</form>


## Store a newly created SkillReport in storage.


POST /skillReports

> Example request:

```bash
curl -X POST \
    "http://localhost/api/skill_reports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":7,"speed":"vel","passing":"vero","shooting":"nisi","dribbling":"omnis","heading":"quo","ball_control":"sit","fitness":"quis","movement":"harum","awareness":"et","decisions":"aperiam","workrate":"quasi","strength":"ipsum","crossing":"reprehenderit","finishing":"sint","positioning":"ea","anticipation":"quam","total":"eum","overall_grade":"dolores","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/skill_reports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 7,
    "speed": "vel",
    "passing": "vero",
    "shooting": "nisi",
    "dribbling": "omnis",
    "heading": "quo",
    "ball_control": "sit",
    "fitness": "quis",
    "movement": "harum",
    "awareness": "et",
    "decisions": "aperiam",
    "workrate": "quasi",
    "strength": "ipsum",
    "crossing": "reprehenderit",
    "finishing": "sint",
    "positioning": "ea",
    "anticipation": "quam",
    "total": "eum",
    "overall_grade": "dolores",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-skill_reports" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-skill_reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-skill_reports"></code></pre>
</div>
<div id="execution-error-POSTapi-skill_reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-skill_reports"></code></pre>
</div>
<form id="form-POSTapi-skill_reports" data-method="POST" data-path="api/skill_reports" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-skill_reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-skill_reports" onclick="tryItOut('POSTapi-skill_reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-skill_reports" onclick="cancelTryOut('POSTapi-skill_reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-skill_reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/skill_reports</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-skill_reports" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>speed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="speed" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>passing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="passing" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>shooting</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="shooting" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dribbling</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dribbling" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>heading</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="heading" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>ball_control</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ball_control" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>fitness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fitness" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>movement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="movement" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>awareness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="awareness" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>decisions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="decisions" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>workrate</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="workrate" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>strength</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="strength" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>crossing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="crossing" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>finishing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="finishing" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>positioning</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positioning" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>anticipation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="anticipation" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="total" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>overall_grade</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="overall_grade" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-skill_reports" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified SkillReport.


GET|HEAD /skillReports/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/skill_reports/iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_reports/iste"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```
<div id="execution-results-GETapi-skill_reports--skill_report-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-skill_reports--skill_report-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-skill_reports--skill_report-"></code></pre>
</div>
<div id="execution-error-GETapi-skill_reports--skill_report-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-skill_reports--skill_report-"></code></pre>
</div>
<form id="form-GETapi-skill_reports--skill_report-" data-method="GET" data-path="api/skill_reports/{skill_report}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-skill_reports--skill_report-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-skill_reports--skill_report-" onclick="tryItOut('GETapi-skill_reports--skill_report-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-skill_reports--skill_report-" onclick="cancelTryOut('GETapi-skill_reports--skill_report-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-skill_reports--skill_report-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/skill_reports/{skill_report}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_report</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_report" data-endpoint="GETapi-skill_reports--skill_report-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified SkillReport in storage.


PUT/PATCH /skillReports/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/skill_reports/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":20,"speed":"autem","passing":"sunt","shooting":"consectetur","dribbling":"adipisci","heading":"iusto","ball_control":"quia","fitness":"expedita","movement":"ut","awareness":"nulla","decisions":"est","workrate":"dolor","strength":"assumenda","crossing":"architecto","finishing":"aut","positioning":"consequatur","anticipation":"qui","total":"temporibus","overall_grade":"magni","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/skill_reports/totam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 20,
    "speed": "autem",
    "passing": "sunt",
    "shooting": "consectetur",
    "dribbling": "adipisci",
    "heading": "iusto",
    "ball_control": "quia",
    "fitness": "expedita",
    "movement": "ut",
    "awareness": "nulla",
    "decisions": "est",
    "workrate": "dolor",
    "strength": "assumenda",
    "crossing": "architecto",
    "finishing": "aut",
    "positioning": "consequatur",
    "anticipation": "qui",
    "total": "temporibus",
    "overall_grade": "magni",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-skill_reports--skill_report-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-skill_reports--skill_report-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-skill_reports--skill_report-"></code></pre>
</div>
<div id="execution-error-PUTapi-skill_reports--skill_report-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-skill_reports--skill_report-"></code></pre>
</div>
<form id="form-PUTapi-skill_reports--skill_report-" data-method="PUT" data-path="api/skill_reports/{skill_report}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-skill_reports--skill_report-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-skill_reports--skill_report-" onclick="tryItOut('PUTapi-skill_reports--skill_report-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-skill_reports--skill_report-" onclick="cancelTryOut('PUTapi-skill_reports--skill_report-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-skill_reports--skill_report-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/skill_reports/{skill_report}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/skill_reports/{skill_report}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_report</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_report" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>speed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="speed" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>passing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="passing" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>shooting</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="shooting" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dribbling</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dribbling" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>heading</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="heading" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>ball_control</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ball_control" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>fitness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fitness" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>movement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="movement" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>awareness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="awareness" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>decisions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="decisions" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>workrate</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="workrate" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>strength</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="strength" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>crossing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="crossing" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>finishing</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="finishing" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>positioning</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positioning" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>anticipation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="anticipation" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="total" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>overall_grade</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="overall_grade" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-skill_reports--skill_report-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified SkillReport from storage.


DELETE /skillReports/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/skill_reports/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_reports/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-skill_reports--skill_report-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-skill_reports--skill_report-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-skill_reports--skill_report-"></code></pre>
</div>
<div id="execution-error-DELETEapi-skill_reports--skill_report-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-skill_reports--skill_report-"></code></pre>
</div>
<form id="form-DELETEapi-skill_reports--skill_report-" data-method="DELETE" data-path="api/skill_reports/{skill_report}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-skill_reports--skill_report-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-skill_reports--skill_report-" onclick="tryItOut('DELETEapi-skill_reports--skill_report-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-skill_reports--skill_report-" onclick="cancelTryOut('DELETEapi-skill_reports--skill_report-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-skill_reports--skill_report-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/skill_reports/{skill_report}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_report</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_report" data-endpoint="DELETEapi-skill_reports--skill_report-" data-component="url" required  hidden>
<br>
</p>
</form>



