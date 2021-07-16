# State


## api/states/byCountry/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/states/byCountry/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/states/byCountry/quis',
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
    "http://localhost/api/states/byCountry/quis"
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


> Example response (500):

```json
{
    "success": false,
    "message": "State not found"
}
```
<div id="execution-results-GETapi-states-byCountry--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-states-byCountry--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-states-byCountry--id-"></code></pre>
</div>
<div id="execution-error-GETapi-states-byCountry--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-states-byCountry--id-"></code></pre>
</div>
<form id="form-GETapi-states-byCountry--id-" data-method="GET" data-path="api/states/byCountry/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-states-byCountry--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-states-byCountry--id-" onclick="tryItOut('GETapi-states-byCountry--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-states-byCountry--id-" onclick="cancelTryOut('GETapi-states-byCountry--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-states-byCountry--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/states/byCountry/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-states-byCountry--id-" data-component="url" required  hidden>
<br>
</p>
</form>



