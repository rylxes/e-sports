# Sport


## Display a listing of the Sport.


GET|HEAD /sports

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/sports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/sports',
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
    "http://localhost/api/sports"
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
<div id="execution-results-GETapi-sports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sports"></code></pre>
</div>
<div id="execution-error-GETapi-sports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sports"></code></pre>
</div>
<form id="form-GETapi-sports" data-method="GET" data-path="api/sports" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sports" onclick="tryItOut('GETapi-sports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sports" onclick="cancelTryOut('GETapi-sports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sports</code></b>
</p>
</form>


## Store a newly created Sport in storage.


POST /sports

> Example request:

```bash
curl -X POST \
    "http://localhost/api/sports" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"molestiae","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/sports',
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
                'name' => 'molestiae',
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
    "http://localhost/api/sports"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "molestiae",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-sports" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-sports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sports"></code></pre>
</div>
<div id="execution-error-POSTapi-sports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sports"></code></pre>
</div>
<form id="form-POSTapi-sports" data-method="POST" data-path="api/sports" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-sports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-sports" onclick="tryItOut('POSTapi-sports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-sports" onclick="cancelTryOut('POSTapi-sports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-sports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/sports</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-sports" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-sports" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-sports" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Sport.


GET|HEAD /sports/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/sports/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/sports/aut',
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
    "http://localhost/api/sports/aut"
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
<div id="execution-results-GETapi-sports--sport-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sports--sport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sports--sport-"></code></pre>
</div>
<div id="execution-error-GETapi-sports--sport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sports--sport-"></code></pre>
</div>
<form id="form-GETapi-sports--sport-" data-method="GET" data-path="api/sports/{sport}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sports--sport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sports--sport-" onclick="tryItOut('GETapi-sports--sport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sports--sport-" onclick="cancelTryOut('GETapi-sports--sport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sports--sport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sports/{sport}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>sport</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sport" data-endpoint="GETapi-sports--sport-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Sport in storage.


PUT/PATCH /sports/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/sports/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"fugiat","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/sports/qui',
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
                'name' => 'fugiat',
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
    "http://localhost/api/sports/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "fugiat",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-sports--sport-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-sports--sport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-sports--sport-"></code></pre>
</div>
<div id="execution-error-PUTapi-sports--sport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-sports--sport-"></code></pre>
</div>
<form id="form-PUTapi-sports--sport-" data-method="PUT" data-path="api/sports/{sport}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-sports--sport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-sports--sport-" onclick="tryItOut('PUTapi-sports--sport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-sports--sport-" onclick="cancelTryOut('PUTapi-sports--sport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-sports--sport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/sports/{sport}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/sports/{sport}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>sport</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sport" data-endpoint="PUTapi-sports--sport-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-sports--sport-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-sports--sport-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-sports--sport-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Sport from storage.


DELETE /sports/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/sports/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/sports/cupiditate',
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
    "http://localhost/api/sports/cupiditate"
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


<div id="execution-results-DELETEapi-sports--sport-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-sports--sport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-sports--sport-"></code></pre>
</div>
<div id="execution-error-DELETEapi-sports--sport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-sports--sport-"></code></pre>
</div>
<form id="form-DELETEapi-sports--sport-" data-method="DELETE" data-path="api/sports/{sport}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-sports--sport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-sports--sport-" onclick="tryItOut('DELETEapi-sports--sport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-sports--sport-" onclick="cancelTryOut('DELETEapi-sports--sport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-sports--sport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/sports/{sport}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>sport</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sport" data-endpoint="DELETEapi-sports--sport-" data-component="url" required  hidden>
<br>
</p>
</form>



