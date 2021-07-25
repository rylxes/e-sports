# Performance Coach


## Store a newly created PerformanceCoach in storage.


POST /performanceCoaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/performance_coaches/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"quas","middle_name":"fuga","last_name":"ut","dob":{},"gender":"et","language":"nemo","nationality":"quos","city_id":"itaque","user_id":14,"password":"est","email":"aliquid","employment_type":"consequatur","qualifications":"est"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/performance_coaches/register',
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
                'first_name' => 'quas',
                'middle_name' => 'fuga',
                'last_name' => 'ut',
                'dob' => $o[0],
                'gender' => 'et',
                'language' => 'nemo',
                'nationality' => 'quos',
                'city_id' => 'itaque',
                'user_id' => 14,
                'password' => 'est',
                'email' => 'aliquid',
                'employment_type' => 'consequatur',
                'qualifications' => 'est',
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
    "http://localhost/api/performance_coaches/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "quas",
    "middle_name": "fuga",
    "last_name": "ut",
    "dob": {},
    "gender": "et",
    "language": "nemo",
    "nationality": "quos",
    "city_id": "itaque",
    "user_id": 14,
    "password": "est",
    "email": "aliquid",
    "employment_type": "consequatur",
    "qualifications": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-performance_coaches-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-performance_coaches-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-performance_coaches-register"></code></pre>
</div>
<div id="execution-error-POSTapi-performance_coaches-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-performance_coaches-register"></code></pre>
</div>
<form id="form-POSTapi-performance_coaches-register" data-method="POST" data-path="api/performance_coaches/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-performance_coaches-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-performance_coaches-register" onclick="tryItOut('POSTapi-performance_coaches-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-performance_coaches-register" onclick="cancelTryOut('POSTapi-performance_coaches-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-performance_coaches-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/performance_coaches/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-performance_coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-performance_coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-performance_coaches-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/performance_coaches/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/performance_coaches/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpDFNCp1" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/performance_coaches/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpDFNCp1', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/performance_coaches/uploadProfile"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-performance_coaches-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-performance_coaches-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-performance_coaches-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-performance_coaches-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-performance_coaches-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-performance_coaches-uploadProfile" data-method="POST" data-path="api/performance_coaches/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-performance_coaches-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-performance_coaches-uploadProfile" onclick="tryItOut('POSTapi-performance_coaches-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-performance_coaches-uploadProfile" onclick="cancelTryOut('POSTapi-performance_coaches-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-performance_coaches-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/performance_coaches/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-performance_coaches-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/performance_coaches/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/performance_coaches/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpBvi5ZT" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/performance_coaches/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpBvi5ZT', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/performance_coaches/uploadDocs"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('pictures[]', document.querySelector('input[name="pictures[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-performance_coaches-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-performance_coaches-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-performance_coaches-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-performance_coaches-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-performance_coaches-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-performance_coaches-uploadDocs" data-method="POST" data-path="api/performance_coaches/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-performance_coaches-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-performance_coaches-uploadDocs" onclick="tryItOut('POSTapi-performance_coaches-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-performance_coaches-uploadDocs" onclick="cancelTryOut('POSTapi-performance_coaches-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-performance_coaches-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/performance_coaches/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-performance_coaches-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-performance_coaches-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the PerformanceCoach.


GET|HEAD /performanceCoaches

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/performance_coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/performance_coaches',
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
    "http://localhost/api/performance_coaches"
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
<div id="execution-results-GETapi-performance_coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-performance_coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-performance_coaches"></code></pre>
</div>
<div id="execution-error-GETapi-performance_coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-performance_coaches"></code></pre>
</div>
<form id="form-GETapi-performance_coaches" data-method="GET" data-path="api/performance_coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-performance_coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-performance_coaches" onclick="tryItOut('GETapi-performance_coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-performance_coaches" onclick="cancelTryOut('GETapi-performance_coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-performance_coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/performance_coaches</code></b>
</p>
</form>


## Store a newly created PerformanceCoach in storage.


POST /performanceCoaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/performance_coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"minima","middle_name":"veniam","last_name":"ea","dob":{},"gender":"consequatur","language":"quis","nationality":"dolores","city_id":"est","user_id":17,"password":"libero","email":"sit","employment_type":"fugiat","qualifications":"necessitatibus"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/performance_coaches',
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
                'first_name' => 'minima',
                'middle_name' => 'veniam',
                'last_name' => 'ea',
                'dob' => $o[0],
                'gender' => 'consequatur',
                'language' => 'quis',
                'nationality' => 'dolores',
                'city_id' => 'est',
                'user_id' => 17,
                'password' => 'libero',
                'email' => 'sit',
                'employment_type' => 'fugiat',
                'qualifications' => 'necessitatibus',
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
    "http://localhost/api/performance_coaches"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "minima",
    "middle_name": "veniam",
    "last_name": "ea",
    "dob": {},
    "gender": "consequatur",
    "language": "quis",
    "nationality": "dolores",
    "city_id": "est",
    "user_id": 17,
    "password": "libero",
    "email": "sit",
    "employment_type": "fugiat",
    "qualifications": "necessitatibus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-performance_coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-performance_coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-performance_coaches"></code></pre>
</div>
<div id="execution-error-POSTapi-performance_coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-performance_coaches"></code></pre>
</div>
<form id="form-POSTapi-performance_coaches" data-method="POST" data-path="api/performance_coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-performance_coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-performance_coaches" onclick="tryItOut('POSTapi-performance_coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-performance_coaches" onclick="cancelTryOut('POSTapi-performance_coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-performance_coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/performance_coaches</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-performance_coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-performance_coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-performance_coaches" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified PerformanceCoach.


GET|HEAD /performanceCoaches/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/performance_coaches/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/performance_coaches/illo',
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
    "http://localhost/api/performance_coaches/illo"
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
<div id="execution-results-GETapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-performance_coaches--performance_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-performance_coaches--performance_coach-"></code></pre>
</div>
<div id="execution-error-GETapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-performance_coaches--performance_coach-"></code></pre>
</div>
<form id="form-GETapi-performance_coaches--performance_coach-" data-method="GET" data-path="api/performance_coaches/{performance_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-performance_coaches--performance_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-performance_coaches--performance_coach-" onclick="tryItOut('GETapi-performance_coaches--performance_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-performance_coaches--performance_coach-" onclick="cancelTryOut('GETapi-performance_coaches--performance_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-performance_coaches--performance_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/performance_coaches/{performance_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>performance_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="performance_coach" data-endpoint="GETapi-performance_coaches--performance_coach-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified PerformanceCoach in storage.


PUT/PATCH /performanceCoaches/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/performance_coaches/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"ex","first_name":"doloribus","middle_name":"itaque","last_name":"eum","dob":{},"gender":"nemo","language":"et","nationality":"quo","city_id":"quis","user_id":3,"email":"voluptate","employment_type":"illum","qualifications":"aliquam","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/performance_coaches/voluptate',
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
                'profile_url' => 'ex',
                'first_name' => 'doloribus',
                'middle_name' => 'itaque',
                'last_name' => 'eum',
                'dob' => $o[0],
                'gender' => 'nemo',
                'language' => 'et',
                'nationality' => 'quo',
                'city_id' => 'quis',
                'user_id' => 3,
                'email' => 'voluptate',
                'employment_type' => 'illum',
                'qualifications' => 'aliquam',
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
    "http://localhost/api/performance_coaches/voluptate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "ex",
    "first_name": "doloribus",
    "middle_name": "itaque",
    "last_name": "eum",
    "dob": {},
    "gender": "nemo",
    "language": "et",
    "nationality": "quo",
    "city_id": "quis",
    "user_id": 3,
    "email": "voluptate",
    "employment_type": "illum",
    "qualifications": "aliquam",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-performance_coaches--performance_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-performance_coaches--performance_coach-"></code></pre>
</div>
<div id="execution-error-PUTapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-performance_coaches--performance_coach-"></code></pre>
</div>
<form id="form-PUTapi-performance_coaches--performance_coach-" data-method="PUT" data-path="api/performance_coaches/{performance_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-performance_coaches--performance_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-performance_coaches--performance_coach-" onclick="tryItOut('PUTapi-performance_coaches--performance_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-performance_coaches--performance_coach-" onclick="cancelTryOut('PUTapi-performance_coaches--performance_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-performance_coaches--performance_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/performance_coaches/{performance_coach}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/performance_coaches/{performance_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>performance_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="performance_coach" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-performance_coaches--performance_coach-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified PerformanceCoach from storage.


DELETE /performanceCoaches/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/performance_coaches/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/performance_coaches/totam',
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
    "http://localhost/api/performance_coaches/totam"
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


<div id="execution-results-DELETEapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-performance_coaches--performance_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-performance_coaches--performance_coach-"></code></pre>
</div>
<div id="execution-error-DELETEapi-performance_coaches--performance_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-performance_coaches--performance_coach-"></code></pre>
</div>
<form id="form-DELETEapi-performance_coaches--performance_coach-" data-method="DELETE" data-path="api/performance_coaches/{performance_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-performance_coaches--performance_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-performance_coaches--performance_coach-" onclick="tryItOut('DELETEapi-performance_coaches--performance_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-performance_coaches--performance_coach-" onclick="cancelTryOut('DELETEapi-performance_coaches--performance_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-performance_coaches--performance_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/performance_coaches/{performance_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>performance_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="performance_coach" data-endpoint="DELETEapi-performance_coaches--performance_coach-" data-component="url" required  hidden>
<br>
</p>
</form>



