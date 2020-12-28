# State


## Display a listing of the State.


GET|HEAD /states

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/states" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/states"
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
<div id="execution-results-GETapi-states" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-states"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-states"></code></pre>
</div>
<div id="execution-error-GETapi-states" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-states"></code></pre>
</div>
<form id="form-GETapi-states" data-method="GET" data-path="api/states" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-states', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-states" onclick="tryItOut('GETapi-states');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-states" onclick="cancelTryOut('GETapi-states');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-states" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/states</code></b>
</p>
</form>


## Display the specified State.


GET|HEAD /states/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/states/explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/states/explicabo"
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
<div id="execution-results-GETapi-states--state-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-states--state-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-states--state-"></code></pre>
</div>
<div id="execution-error-GETapi-states--state-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-states--state-"></code></pre>
</div>
<form id="form-GETapi-states--state-" data-method="GET" data-path="api/states/{state}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-states--state-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-states--state-" onclick="tryItOut('GETapi-states--state-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-states--state-" onclick="cancelTryOut('GETapi-states--state-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-states--state-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/states/{state}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="GETapi-states--state-" data-component="url" required  hidden>
<br>
</p>
</form>



