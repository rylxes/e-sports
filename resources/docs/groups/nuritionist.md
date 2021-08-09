# Nuritionist


## Store a newly created Nuritionist in storage.


POST /nuritionists

> Example request:

```bash
curl -X POST \
    "http://localhost/api/nuritionists/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"vel","first_name":"corrupti","middle_name":"distinctio","last_name":"soluta","dob":{},"gender":"quasi","language":"dolorum","nationality":"itaque","city_id":"itaque","email":"est","employment_type":"quasi","qualifications":"temporibus"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/nuritionists/register',
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
                'password' => 'vel',
                'first_name' => 'corrupti',
                'middle_name' => 'distinctio',
                'last_name' => 'soluta',
                'dob' => $o[0],
                'gender' => 'quasi',
                'language' => 'dolorum',
                'nationality' => 'itaque',
                'city_id' => 'itaque',
                'email' => 'est',
                'employment_type' => 'quasi',
                'qualifications' => 'temporibus',
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
    "http://localhost/api/nuritionists/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "vel",
    "first_name": "corrupti",
    "middle_name": "distinctio",
    "last_name": "soluta",
    "dob": {},
    "gender": "quasi",
    "language": "dolorum",
    "nationality": "itaque",
    "city_id": "itaque",
    "email": "est",
    "employment_type": "quasi",
    "qualifications": "temporibus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-nuritionists-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-nuritionists-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-nuritionists-register"></code></pre>
</div>
<div id="execution-error-POSTapi-nuritionists-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-nuritionists-register"></code></pre>
</div>
<form id="form-POSTapi-nuritionists-register" data-method="POST" data-path="api/nuritionists/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-nuritionists-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-nuritionists-register" onclick="tryItOut('POSTapi-nuritionists-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-nuritionists-register" onclick="cancelTryOut('POSTapi-nuritionists-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-nuritionists-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/nuritionists/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-nuritionists-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-nuritionists-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/nuritionists/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/nuritionists/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpfm8s7I" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/nuritionists/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpfm8s7I', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/nuritionists/uploadProfile"
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


<div id="execution-results-POSTapi-nuritionists-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-nuritionists-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-nuritionists-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-nuritionists-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-nuritionists-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-nuritionists-uploadProfile" data-method="POST" data-path="api/nuritionists/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-nuritionists-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-nuritionists-uploadProfile" onclick="tryItOut('POSTapi-nuritionists-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-nuritionists-uploadProfile" onclick="cancelTryOut('POSTapi-nuritionists-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-nuritionists-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/nuritionists/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-nuritionists-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/nuritionists/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/nuritionists/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpshSAGA" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/nuritionists/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpshSAGA', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/nuritionists/uploadDocs"
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


<div id="execution-results-POSTapi-nuritionists-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-nuritionists-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-nuritionists-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-nuritionists-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-nuritionists-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-nuritionists-uploadDocs" data-method="POST" data-path="api/nuritionists/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-nuritionists-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-nuritionists-uploadDocs" onclick="tryItOut('POSTapi-nuritionists-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-nuritionists-uploadDocs" onclick="cancelTryOut('POSTapi-nuritionists-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-nuritionists-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/nuritionists/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-nuritionists-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-nuritionists-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Nuritionist.


GET|HEAD /nuritionists

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/nuritionists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/nuritionists',
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
    "http://localhost/api/nuritionists"
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
<div id="execution-results-GETapi-nuritionists" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-nuritionists"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-nuritionists"></code></pre>
</div>
<div id="execution-error-GETapi-nuritionists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-nuritionists"></code></pre>
</div>
<form id="form-GETapi-nuritionists" data-method="GET" data-path="api/nuritionists" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-nuritionists', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-nuritionists" onclick="tryItOut('GETapi-nuritionists');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-nuritionists" onclick="cancelTryOut('GETapi-nuritionists');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-nuritionists" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/nuritionists</code></b>
</p>
</form>


## Store a newly created Nuritionist in storage.


POST /nuritionists

> Example request:

```bash
curl -X POST \
    "http://localhost/api/nuritionists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"harum","first_name":"optio","middle_name":"porro","last_name":"velit","dob":{},"gender":"necessitatibus","language":"id","nationality":"facere","city_id":"quisquam","email":"esse","employment_type":"enim","qualifications":"ut"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/nuritionists',
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
                'password' => 'harum',
                'first_name' => 'optio',
                'middle_name' => 'porro',
                'last_name' => 'velit',
                'dob' => $o[0],
                'gender' => 'necessitatibus',
                'language' => 'id',
                'nationality' => 'facere',
                'city_id' => 'quisquam',
                'email' => 'esse',
                'employment_type' => 'enim',
                'qualifications' => 'ut',
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
    "http://localhost/api/nuritionists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "harum",
    "first_name": "optio",
    "middle_name": "porro",
    "last_name": "velit",
    "dob": {},
    "gender": "necessitatibus",
    "language": "id",
    "nationality": "facere",
    "city_id": "quisquam",
    "email": "esse",
    "employment_type": "enim",
    "qualifications": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-nuritionists" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-nuritionists"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-nuritionists"></code></pre>
</div>
<div id="execution-error-POSTapi-nuritionists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-nuritionists"></code></pre>
</div>
<form id="form-POSTapi-nuritionists" data-method="POST" data-path="api/nuritionists" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-nuritionists', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-nuritionists" onclick="tryItOut('POSTapi-nuritionists');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-nuritionists" onclick="cancelTryOut('POSTapi-nuritionists');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-nuritionists" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/nuritionists</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-nuritionists" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-nuritionists" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Nuritionist.


GET|HEAD /nuritionists/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/nuritionists/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/nuritionists/consequatur',
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
    "http://localhost/api/nuritionists/consequatur"
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
<div id="execution-results-GETapi-nuritionists--nuritionist-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-nuritionists--nuritionist-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-nuritionists--nuritionist-"></code></pre>
</div>
<div id="execution-error-GETapi-nuritionists--nuritionist-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-nuritionists--nuritionist-"></code></pre>
</div>
<form id="form-GETapi-nuritionists--nuritionist-" data-method="GET" data-path="api/nuritionists/{nuritionist}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-nuritionists--nuritionist-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-nuritionists--nuritionist-" onclick="tryItOut('GETapi-nuritionists--nuritionist-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-nuritionists--nuritionist-" onclick="cancelTryOut('GETapi-nuritionists--nuritionist-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-nuritionists--nuritionist-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/nuritionists/{nuritionist}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nuritionist</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nuritionist" data-endpoint="GETapi-nuritionists--nuritionist-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Nuritionist in storage.


PUT/PATCH /nuritionists/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/nuritionists/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"est","first_name":"aliquam","middle_name":"ducimus","last_name":"quas","dob":{},"gender":"quidem","language":"accusantium","nationality":"nulla","city_id":"sint","user_id":16,"email":"iusto","employment_type":"ut","qualifications":"sed","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/nuritionists/iure',
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
                'profile_url' => 'est',
                'first_name' => 'aliquam',
                'middle_name' => 'ducimus',
                'last_name' => 'quas',
                'dob' => $o[0],
                'gender' => 'quidem',
                'language' => 'accusantium',
                'nationality' => 'nulla',
                'city_id' => 'sint',
                'user_id' => 16,
                'email' => 'iusto',
                'employment_type' => 'ut',
                'qualifications' => 'sed',
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
    "http://localhost/api/nuritionists/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "est",
    "first_name": "aliquam",
    "middle_name": "ducimus",
    "last_name": "quas",
    "dob": {},
    "gender": "quidem",
    "language": "accusantium",
    "nationality": "nulla",
    "city_id": "sint",
    "user_id": 16,
    "email": "iusto",
    "employment_type": "ut",
    "qualifications": "sed",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-nuritionists--nuritionist-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-nuritionists--nuritionist-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-nuritionists--nuritionist-"></code></pre>
</div>
<div id="execution-error-PUTapi-nuritionists--nuritionist-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-nuritionists--nuritionist-"></code></pre>
</div>
<form id="form-PUTapi-nuritionists--nuritionist-" data-method="PUT" data-path="api/nuritionists/{nuritionist}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-nuritionists--nuritionist-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-nuritionists--nuritionist-" onclick="tryItOut('PUTapi-nuritionists--nuritionist-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-nuritionists--nuritionist-" onclick="cancelTryOut('PUTapi-nuritionists--nuritionist-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-nuritionists--nuritionist-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/nuritionists/{nuritionist}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/nuritionists/{nuritionist}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nuritionist</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nuritionist" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-nuritionists--nuritionist-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Nuritionist from storage.


DELETE /nuritionists/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/nuritionists/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/nuritionists/cupiditate',
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
    "http://localhost/api/nuritionists/cupiditate"
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


<div id="execution-results-DELETEapi-nuritionists--nuritionist-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-nuritionists--nuritionist-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-nuritionists--nuritionist-"></code></pre>
</div>
<div id="execution-error-DELETEapi-nuritionists--nuritionist-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-nuritionists--nuritionist-"></code></pre>
</div>
<form id="form-DELETEapi-nuritionists--nuritionist-" data-method="DELETE" data-path="api/nuritionists/{nuritionist}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-nuritionists--nuritionist-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-nuritionists--nuritionist-" onclick="tryItOut('DELETEapi-nuritionists--nuritionist-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-nuritionists--nuritionist-" onclick="cancelTryOut('DELETEapi-nuritionists--nuritionist-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-nuritionists--nuritionist-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/nuritionists/{nuritionist}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nuritionist</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nuritionist" data-endpoint="DELETEapi-nuritionists--nuritionist-" data-component="url" required  hidden>
<br>
</p>
</form>



