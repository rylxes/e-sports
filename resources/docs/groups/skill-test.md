# Skill Test


## Display a listing of the SkillTest.


GET|HEAD /skillTests

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/skill_tests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_tests"
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
<div id="execution-results-GETapi-skill_tests" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-skill_tests"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-skill_tests"></code></pre>
</div>
<div id="execution-error-GETapi-skill_tests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-skill_tests"></code></pre>
</div>
<form id="form-GETapi-skill_tests" data-method="GET" data-path="api/skill_tests" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-skill_tests', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-skill_tests" onclick="tryItOut('GETapi-skill_tests');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-skill_tests" onclick="cancelTryOut('GETapi-skill_tests');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-skill_tests" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/skill_tests</code></b>
</p>
</form>


## Store a newly created SkillTest in storage.


POST /skillTests

> Example request:

```bash
curl -X POST \
    "http://localhost/api/skill_tests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"rerum","sport_id":20,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/skill_tests"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rerum",
    "sport_id": 20,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-skill_tests" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-skill_tests"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-skill_tests"></code></pre>
</div>
<div id="execution-error-POSTapi-skill_tests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-skill_tests"></code></pre>
</div>
<form id="form-POSTapi-skill_tests" data-method="POST" data-path="api/skill_tests" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-skill_tests', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-skill_tests" onclick="tryItOut('POSTapi-skill_tests');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-skill_tests" onclick="cancelTryOut('POSTapi-skill_tests');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-skill_tests" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/skill_tests</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-skill_tests" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>sport_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="sport_id" data-endpoint="POSTapi-skill_tests" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-skill_tests" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-skill_tests" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified SkillTest.


GET|HEAD /skillTests/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/skill_tests/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_tests/aut"
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
<div id="execution-results-GETapi-skill_tests--skill_test-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-skill_tests--skill_test-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-skill_tests--skill_test-"></code></pre>
</div>
<div id="execution-error-GETapi-skill_tests--skill_test-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-skill_tests--skill_test-"></code></pre>
</div>
<form id="form-GETapi-skill_tests--skill_test-" data-method="GET" data-path="api/skill_tests/{skill_test}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-skill_tests--skill_test-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-skill_tests--skill_test-" onclick="tryItOut('GETapi-skill_tests--skill_test-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-skill_tests--skill_test-" onclick="cancelTryOut('GETapi-skill_tests--skill_test-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-skill_tests--skill_test-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/skill_tests/{skill_test}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_test</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_test" data-endpoint="GETapi-skill_tests--skill_test-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified SkillTest in storage.


PUT/PATCH /skillTests/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/skill_tests/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"rem","sport_id":1,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/skill_tests/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rem",
    "sport_id": 1,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-skill_tests--skill_test-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-skill_tests--skill_test-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-skill_tests--skill_test-"></code></pre>
</div>
<div id="execution-error-PUTapi-skill_tests--skill_test-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-skill_tests--skill_test-"></code></pre>
</div>
<form id="form-PUTapi-skill_tests--skill_test-" data-method="PUT" data-path="api/skill_tests/{skill_test}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-skill_tests--skill_test-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-skill_tests--skill_test-" onclick="tryItOut('PUTapi-skill_tests--skill_test-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-skill_tests--skill_test-" onclick="cancelTryOut('PUTapi-skill_tests--skill_test-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-skill_tests--skill_test-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/skill_tests/{skill_test}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/skill_tests/{skill_test}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_test</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_test" data-endpoint="PUTapi-skill_tests--skill_test-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-skill_tests--skill_test-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>sport_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="sport_id" data-endpoint="PUTapi-skill_tests--skill_test-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-skill_tests--skill_test-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-skill_tests--skill_test-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified SkillTest from storage.


DELETE /skillTests/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/skill_tests/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/skill_tests/et"
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


<div id="execution-results-DELETEapi-skill_tests--skill_test-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-skill_tests--skill_test-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-skill_tests--skill_test-"></code></pre>
</div>
<div id="execution-error-DELETEapi-skill_tests--skill_test-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-skill_tests--skill_test-"></code></pre>
</div>
<form id="form-DELETEapi-skill_tests--skill_test-" data-method="DELETE" data-path="api/skill_tests/{skill_test}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-skill_tests--skill_test-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-skill_tests--skill_test-" onclick="tryItOut('DELETEapi-skill_tests--skill_test-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-skill_tests--skill_test-" onclick="cancelTryOut('DELETEapi-skill_tests--skill_test-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-skill_tests--skill_test-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/skill_tests/{skill_test}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>skill_test</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="skill_test" data-endpoint="DELETEapi-skill_tests--skill_test-" data-component="url" required  hidden>
<br>
</p>
</form>



