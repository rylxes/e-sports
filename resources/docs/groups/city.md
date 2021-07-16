# City


## By State.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/cities/byState" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":"quasi"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/cities/byState',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'state_id' => 'quasi',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/cities/byState"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state_id": "quasi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-cities-byState" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cities-byState"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cities-byState"></code></pre>
</div>
<div id="execution-error-POSTapi-cities-byState" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cities-byState"></code></pre>
</div>
<form id="form-POSTapi-cities-byState" data-method="POST" data-path="api/cities/byState" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cities-byState', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cities-byState" onclick="tryItOut('POSTapi-cities-byState');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cities-byState" onclick="cancelTryOut('POSTapi-cities-byState');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cities-byState" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cities/byState</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>state_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state_id" data-endpoint="POSTapi-cities-byState" data-component="body" required  hidden>
<br>
</p>

</form>



