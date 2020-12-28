# Video


## Display a listing of the Video.


GET|HEAD /videos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/videos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/videos"
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
<div id="execution-results-GETapi-videos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-videos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-videos"></code></pre>
</div>
<div id="execution-error-GETapi-videos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-videos"></code></pre>
</div>
<form id="form-GETapi-videos" data-method="GET" data-path="api/videos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-videos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-videos" onclick="tryItOut('GETapi-videos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-videos" onclick="cancelTryOut('GETapi-videos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-videos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/videos</code></b>
</p>
</form>


## Store a newly created Video in storage.


POST /videos

> Example request:

```bash
curl -X POST \
    "http://localhost/api/videos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":11,"type_id":15,"skill_test_id":2,"url":"cupiditate","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/videos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 11,
    "type_id": 15,
    "skill_test_id": 2,
    "url": "cupiditate",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-videos" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-videos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-videos"></code></pre>
</div>
<div id="execution-error-POSTapi-videos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-videos"></code></pre>
</div>
<form id="form-POSTapi-videos" data-method="POST" data-path="api/videos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-videos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-videos" onclick="tryItOut('POSTapi-videos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-videos" onclick="cancelTryOut('POSTapi-videos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-videos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/videos</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-videos" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="type_id" data-endpoint="POSTapi-videos" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>skill_test_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="skill_test_id" data-endpoint="POSTapi-videos" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="POSTapi-videos" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-videos" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-videos" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Video.


GET|HEAD /videos/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/videos/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/videos/consequatur"
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
<div id="execution-results-GETapi-videos--video-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-videos--video-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-videos--video-"></code></pre>
</div>
<div id="execution-error-GETapi-videos--video-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-videos--video-"></code></pre>
</div>
<form id="form-GETapi-videos--video-" data-method="GET" data-path="api/videos/{video}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-videos--video-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-videos--video-" onclick="tryItOut('GETapi-videos--video-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-videos--video-" onclick="cancelTryOut('GETapi-videos--video-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-videos--video-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/videos/{video}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video" data-endpoint="GETapi-videos--video-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Video in storage.


PUT/PATCH /videos/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/videos/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":13,"type_id":10,"skill_test_id":1,"url":"minus","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/videos/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 13,
    "type_id": 10,
    "skill_test_id": 1,
    "url": "minus",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-videos--video-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-videos--video-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-videos--video-"></code></pre>
</div>
<div id="execution-error-PUTapi-videos--video-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-videos--video-"></code></pre>
</div>
<form id="form-PUTapi-videos--video-" data-method="PUT" data-path="api/videos/{video}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-videos--video-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-videos--video-" onclick="tryItOut('PUTapi-videos--video-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-videos--video-" onclick="cancelTryOut('PUTapi-videos--video-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-videos--video-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/videos/{video}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/videos/{video}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video" data-endpoint="PUTapi-videos--video-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-videos--video-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="type_id" data-endpoint="PUTapi-videos--video-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>skill_test_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="skill_test_id" data-endpoint="PUTapi-videos--video-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="PUTapi-videos--video-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-videos--video-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-videos--video-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Video from storage.


DELETE /videos/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/videos/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/videos/quia"
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


<div id="execution-results-DELETEapi-videos--video-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-videos--video-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-videos--video-"></code></pre>
</div>
<div id="execution-error-DELETEapi-videos--video-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-videos--video-"></code></pre>
</div>
<form id="form-DELETEapi-videos--video-" data-method="DELETE" data-path="api/videos/{video}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-videos--video-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-videos--video-" onclick="tryItOut('DELETEapi-videos--video-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-videos--video-" onclick="cancelTryOut('DELETEapi-videos--video-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-videos--video-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/videos/{video}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video" data-endpoint="DELETEapi-videos--video-" data-component="url" required  hidden>
<br>
</p>
</form>



