# Video Type


## Display a listing of the VideoType.


GET|HEAD /videoTypes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/video_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/video_types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/video_types"
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
<div id="execution-results-GETapi-video_types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-video_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-video_types"></code></pre>
</div>
<div id="execution-error-GETapi-video_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-video_types"></code></pre>
</div>
<form id="form-GETapi-video_types" data-method="GET" data-path="api/video_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-video_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-video_types" onclick="tryItOut('GETapi-video_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-video_types" onclick="cancelTryOut('GETapi-video_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-video_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/video_types</code></b>
</p>
</form>


## Store a newly created VideoType in storage.


POST /videoTypes

> Example request:

```bash
curl -X POST \
    "http://localhost/api/video_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"accusamus","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/video_types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
            $o = [
                clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['stdClass'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('stdClass')),
            ],
            null,
            [],
            [
                'name' => 'accusamus',
                'created_at' => $o[0],
                'updated_at' => $o[0],
            ],
            []
        ),
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/video_types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "accusamus",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-video_types" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-video_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-video_types"></code></pre>
</div>
<div id="execution-error-POSTapi-video_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-video_types"></code></pre>
</div>
<form id="form-POSTapi-video_types" data-method="POST" data-path="api/video_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-video_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-video_types" onclick="tryItOut('POSTapi-video_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-video_types" onclick="cancelTryOut('POSTapi-video_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-video_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/video_types</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-video_types" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-video_types" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-video_types" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified VideoType.


GET|HEAD /videoTypes/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/video_types/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/video_types/non',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/video_types/non"
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
<div id="execution-results-GETapi-video_types--video_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-video_types--video_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-video_types--video_type-"></code></pre>
</div>
<div id="execution-error-GETapi-video_types--video_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-video_types--video_type-"></code></pre>
</div>
<form id="form-GETapi-video_types--video_type-" data-method="GET" data-path="api/video_types/{video_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-video_types--video_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-video_types--video_type-" onclick="tryItOut('GETapi-video_types--video_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-video_types--video_type-" onclick="cancelTryOut('GETapi-video_types--video_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-video_types--video_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/video_types/{video_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video_type" data-endpoint="GETapi-video_types--video_type-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified VideoType in storage.


PUT/PATCH /videoTypes/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/video_types/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"molestias","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/video_types/et',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
            $o = [
                clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['stdClass'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('stdClass')),
            ],
            null,
            [],
            [
                'name' => 'molestias',
                'created_at' => $o[0],
                'updated_at' => $o[0],
            ],
            []
        ),
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/video_types/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "molestias",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-video_types--video_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-video_types--video_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-video_types--video_type-"></code></pre>
</div>
<div id="execution-error-PUTapi-video_types--video_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-video_types--video_type-"></code></pre>
</div>
<form id="form-PUTapi-video_types--video_type-" data-method="PUT" data-path="api/video_types/{video_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-video_types--video_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-video_types--video_type-" onclick="tryItOut('PUTapi-video_types--video_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-video_types--video_type-" onclick="cancelTryOut('PUTapi-video_types--video_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-video_types--video_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/video_types/{video_type}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/video_types/{video_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video_type" data-endpoint="PUTapi-video_types--video_type-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-video_types--video_type-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-video_types--video_type-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-video_types--video_type-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified VideoType from storage.


DELETE /videoTypes/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/video_types/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/video_types/maiores',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/video_types/maiores"
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


<div id="execution-results-DELETEapi-video_types--video_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-video_types--video_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-video_types--video_type-"></code></pre>
</div>
<div id="execution-error-DELETEapi-video_types--video_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-video_types--video_type-"></code></pre>
</div>
<form id="form-DELETEapi-video_types--video_type-" data-method="DELETE" data-path="api/video_types/{video_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-video_types--video_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-video_types--video_type-" onclick="tryItOut('DELETEapi-video_types--video_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-video_types--video_type-" onclick="cancelTryOut('DELETEapi-video_types--video_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-video_types--video_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/video_types/{video_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>video_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="video_type" data-endpoint="DELETEapi-video_types--video_type-" data-component="url" required  hidden>
<br>
</p>
</form>



