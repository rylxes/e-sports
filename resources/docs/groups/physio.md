# Physio


## Store a newly created Physio in storage.


POST /physios

> Example request:

```bash
curl -X POST \
    "http://localhost/api/physios/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"sit","first_name":"placeat","middle_name":"est","last_name":"consequatur","dob":{},"gender":"delectus","language":"officiis","nationality":"optio","city_id":"facilis","email":"sint","employment_type":"incidunt","qualifications":"illo"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/physios/register',
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
                'password' => 'sit',
                'first_name' => 'placeat',
                'middle_name' => 'est',
                'last_name' => 'consequatur',
                'dob' => $o[0],
                'gender' => 'delectus',
                'language' => 'officiis',
                'nationality' => 'optio',
                'city_id' => 'facilis',
                'email' => 'sint',
                'employment_type' => 'incidunt',
                'qualifications' => 'illo',
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
    "http://localhost/api/physios/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "sit",
    "first_name": "placeat",
    "middle_name": "est",
    "last_name": "consequatur",
    "dob": {},
    "gender": "delectus",
    "language": "officiis",
    "nationality": "optio",
    "city_id": "facilis",
    "email": "sint",
    "employment_type": "incidunt",
    "qualifications": "illo"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-physios-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-physios-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-physios-register"></code></pre>
</div>
<div id="execution-error-POSTapi-physios-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-physios-register"></code></pre>
</div>
<form id="form-POSTapi-physios-register" data-method="POST" data-path="api/physios/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-physios-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-physios-register" onclick="tryItOut('POSTapi-physios-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-physios-register" onclick="cancelTryOut('POSTapi-physios-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-physios-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/physios/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-physios-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-physios-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/physios/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/physios/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpHIn8TZ" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/physios/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpHIn8TZ', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/physios/uploadProfile"
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


<div id="execution-results-POSTapi-physios-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-physios-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-physios-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-physios-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-physios-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-physios-uploadProfile" data-method="POST" data-path="api/physios/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-physios-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-physios-uploadProfile" onclick="tryItOut('POSTapi-physios-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-physios-uploadProfile" onclick="cancelTryOut('POSTapi-physios-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-physios-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/physios/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-physios-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/physios/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/physios/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php1lYVoE" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/physios/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php1lYVoE', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/physios/uploadDocs"
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


<div id="execution-results-POSTapi-physios-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-physios-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-physios-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-physios-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-physios-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-physios-uploadDocs" data-method="POST" data-path="api/physios/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-physios-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-physios-uploadDocs" onclick="tryItOut('POSTapi-physios-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-physios-uploadDocs" onclick="cancelTryOut('POSTapi-physios-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-physios-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/physios/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-physios-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-physios-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Physio.


GET|HEAD /physios

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/physios" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/physios',
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
    "http://localhost/api/physios"
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
<div id="execution-results-GETapi-physios" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-physios"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-physios"></code></pre>
</div>
<div id="execution-error-GETapi-physios" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-physios"></code></pre>
</div>
<form id="form-GETapi-physios" data-method="GET" data-path="api/physios" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-physios', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-physios" onclick="tryItOut('GETapi-physios');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-physios" onclick="cancelTryOut('GETapi-physios');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-physios" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/physios</code></b>
</p>
</form>


## Store a newly created Physio in storage.


POST /physios

> Example request:

```bash
curl -X POST \
    "http://localhost/api/physios" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"est","first_name":"harum","middle_name":"voluptatibus","last_name":"recusandae","dob":{},"gender":"sunt","language":"rem","nationality":"quam","city_id":"facere","email":"cum","employment_type":"explicabo","qualifications":"in"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/physios',
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
                'password' => 'est',
                'first_name' => 'harum',
                'middle_name' => 'voluptatibus',
                'last_name' => 'recusandae',
                'dob' => $o[0],
                'gender' => 'sunt',
                'language' => 'rem',
                'nationality' => 'quam',
                'city_id' => 'facere',
                'email' => 'cum',
                'employment_type' => 'explicabo',
                'qualifications' => 'in',
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
    "http://localhost/api/physios"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "est",
    "first_name": "harum",
    "middle_name": "voluptatibus",
    "last_name": "recusandae",
    "dob": {},
    "gender": "sunt",
    "language": "rem",
    "nationality": "quam",
    "city_id": "facere",
    "email": "cum",
    "employment_type": "explicabo",
    "qualifications": "in"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-physios" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-physios"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-physios"></code></pre>
</div>
<div id="execution-error-POSTapi-physios" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-physios"></code></pre>
</div>
<form id="form-POSTapi-physios" data-method="POST" data-path="api/physios" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-physios', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-physios" onclick="tryItOut('POSTapi-physios');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-physios" onclick="cancelTryOut('POSTapi-physios');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-physios" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/physios</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-physios" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-physios" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Physio.


GET|HEAD /physios/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/physios/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/physios/assumenda',
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
    "http://localhost/api/physios/assumenda"
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
<div id="execution-results-GETapi-physios--physio-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-physios--physio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-physios--physio-"></code></pre>
</div>
<div id="execution-error-GETapi-physios--physio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-physios--physio-"></code></pre>
</div>
<form id="form-GETapi-physios--physio-" data-method="GET" data-path="api/physios/{physio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-physios--physio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-physios--physio-" onclick="tryItOut('GETapi-physios--physio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-physios--physio-" onclick="cancelTryOut('GETapi-physios--physio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-physios--physio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/physios/{physio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>physio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="physio" data-endpoint="GETapi-physios--physio-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Physio in storage.


PUT/PATCH /physios/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/physios/laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"corporis","first_name":"ea","middle_name":"iste","last_name":"qui","dob":{},"gender":"natus","language":"pariatur","nationality":"et","city_id":"et","user_id":3,"email":"commodi","employment_type":"pariatur","qualifications":"sed","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/physios/laudantium',
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
                'profile_url' => 'corporis',
                'first_name' => 'ea',
                'middle_name' => 'iste',
                'last_name' => 'qui',
                'dob' => $o[0],
                'gender' => 'natus',
                'language' => 'pariatur',
                'nationality' => 'et',
                'city_id' => 'et',
                'user_id' => 3,
                'email' => 'commodi',
                'employment_type' => 'pariatur',
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
    "http://localhost/api/physios/laudantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "corporis",
    "first_name": "ea",
    "middle_name": "iste",
    "last_name": "qui",
    "dob": {},
    "gender": "natus",
    "language": "pariatur",
    "nationality": "et",
    "city_id": "et",
    "user_id": 3,
    "email": "commodi",
    "employment_type": "pariatur",
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


<div id="execution-results-PUTapi-physios--physio-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-physios--physio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-physios--physio-"></code></pre>
</div>
<div id="execution-error-PUTapi-physios--physio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-physios--physio-"></code></pre>
</div>
<form id="form-PUTapi-physios--physio-" data-method="PUT" data-path="api/physios/{physio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-physios--physio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-physios--physio-" onclick="tryItOut('PUTapi-physios--physio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-physios--physio-" onclick="cancelTryOut('PUTapi-physios--physio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-physios--physio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/physios/{physio}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/physios/{physio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>physio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="physio" data-endpoint="PUTapi-physios--physio-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-physios--physio-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Physio from storage.


DELETE /physios/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/physios/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/physios/corporis',
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
    "http://localhost/api/physios/corporis"
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


<div id="execution-results-DELETEapi-physios--physio-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-physios--physio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-physios--physio-"></code></pre>
</div>
<div id="execution-error-DELETEapi-physios--physio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-physios--physio-"></code></pre>
</div>
<form id="form-DELETEapi-physios--physio-" data-method="DELETE" data-path="api/physios/{physio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-physios--physio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-physios--physio-" onclick="tryItOut('DELETEapi-physios--physio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-physios--physio-" onclick="cancelTryOut('DELETEapi-physios--physio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-physios--physio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/physios/{physio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>physio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="physio" data-endpoint="DELETEapi-physios--physio-" data-component="url" required  hidden>
<br>
</p>
</form>



