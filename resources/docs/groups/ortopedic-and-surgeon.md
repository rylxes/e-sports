# Ortopedic And Surgeon


## Store a newly created OrtopedicAndSurgeon in storage.


POST /ortopedicAndSurgeons

> Example request:

```bash
curl -X POST \
    "http://localhost/api/ortopedic_and_surgeons/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"nostrum","first_name":"asperiores","middle_name":"sunt","last_name":"aut","dob":{},"gender":"quia","language":"modi","nationality":"modi","city_id":"quidem","email":"sed","employment_type":"corporis","qualifications":"quod"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/ortopedic_and_surgeons/register',
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
                'password' => 'nostrum',
                'first_name' => 'asperiores',
                'middle_name' => 'sunt',
                'last_name' => 'aut',
                'dob' => $o[0],
                'gender' => 'quia',
                'language' => 'modi',
                'nationality' => 'modi',
                'city_id' => 'quidem',
                'email' => 'sed',
                'employment_type' => 'corporis',
                'qualifications' => 'quod',
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
    "http://localhost/api/ortopedic_and_surgeons/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "nostrum",
    "first_name": "asperiores",
    "middle_name": "sunt",
    "last_name": "aut",
    "dob": {},
    "gender": "quia",
    "language": "modi",
    "nationality": "modi",
    "city_id": "quidem",
    "email": "sed",
    "employment_type": "corporis",
    "qualifications": "quod"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-ortopedic_and_surgeons-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ortopedic_and_surgeons-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ortopedic_and_surgeons-register"></code></pre>
</div>
<div id="execution-error-POSTapi-ortopedic_and_surgeons-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ortopedic_and_surgeons-register"></code></pre>
</div>
<form id="form-POSTapi-ortopedic_and_surgeons-register" data-method="POST" data-path="api/ortopedic_and_surgeons/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ortopedic_and_surgeons-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ortopedic_and_surgeons-register" onclick="tryItOut('POSTapi-ortopedic_and_surgeons-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ortopedic_and_surgeons-register" onclick="cancelTryOut('POSTapi-ortopedic_and_surgeons-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ortopedic_and_surgeons-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ortopedic_and_surgeons/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-ortopedic_and_surgeons-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/ortopedic_and_surgeons/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/ortopedic_and_surgeons/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpsXd5Ei" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/ortopedic_and_surgeons/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpsXd5Ei', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/ortopedic_and_surgeons/uploadProfile"
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


<div id="execution-results-POSTapi-ortopedic_and_surgeons-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ortopedic_and_surgeons-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ortopedic_and_surgeons-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-ortopedic_and_surgeons-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ortopedic_and_surgeons-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-ortopedic_and_surgeons-uploadProfile" data-method="POST" data-path="api/ortopedic_and_surgeons/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ortopedic_and_surgeons-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ortopedic_and_surgeons-uploadProfile" onclick="tryItOut('POSTapi-ortopedic_and_surgeons-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ortopedic_and_surgeons-uploadProfile" onclick="cancelTryOut('POSTapi-ortopedic_and_surgeons-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ortopedic_and_surgeons-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ortopedic_and_surgeons/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-ortopedic_and_surgeons-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/ortopedic_and_surgeons/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/ortopedic_and_surgeons/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpB7Xkjx" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/ortopedic_and_surgeons/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpB7Xkjx', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/ortopedic_and_surgeons/uploadDocs"
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


<div id="execution-results-POSTapi-ortopedic_and_surgeons-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ortopedic_and_surgeons-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ortopedic_and_surgeons-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-ortopedic_and_surgeons-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ortopedic_and_surgeons-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-ortopedic_and_surgeons-uploadDocs" data-method="POST" data-path="api/ortopedic_and_surgeons/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ortopedic_and_surgeons-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ortopedic_and_surgeons-uploadDocs" onclick="tryItOut('POSTapi-ortopedic_and_surgeons-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ortopedic_and_surgeons-uploadDocs" onclick="cancelTryOut('POSTapi-ortopedic_and_surgeons-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ortopedic_and_surgeons-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ortopedic_and_surgeons/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-ortopedic_and_surgeons-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-ortopedic_and_surgeons-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the OrtopedicAndSurgeon.


GET|HEAD /ortopedicAndSurgeons

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ortopedic_and_surgeons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/ortopedic_and_surgeons',
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
    "http://localhost/api/ortopedic_and_surgeons"
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
<div id="execution-results-GETapi-ortopedic_and_surgeons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ortopedic_and_surgeons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ortopedic_and_surgeons"></code></pre>
</div>
<div id="execution-error-GETapi-ortopedic_and_surgeons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ortopedic_and_surgeons"></code></pre>
</div>
<form id="form-GETapi-ortopedic_and_surgeons" data-method="GET" data-path="api/ortopedic_and_surgeons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ortopedic_and_surgeons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ortopedic_and_surgeons" onclick="tryItOut('GETapi-ortopedic_and_surgeons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ortopedic_and_surgeons" onclick="cancelTryOut('GETapi-ortopedic_and_surgeons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ortopedic_and_surgeons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ortopedic_and_surgeons</code></b>
</p>
</form>


## Store a newly created OrtopedicAndSurgeon in storage.


POST /ortopedicAndSurgeons

> Example request:

```bash
curl -X POST \
    "http://localhost/api/ortopedic_and_surgeons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"repellat","first_name":"quas","middle_name":"non","last_name":"ab","dob":{},"gender":"tenetur","language":"porro","nationality":"officiis","city_id":"labore","email":"consequuntur","employment_type":"harum","qualifications":"in"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/ortopedic_and_surgeons',
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
                'password' => 'repellat',
                'first_name' => 'quas',
                'middle_name' => 'non',
                'last_name' => 'ab',
                'dob' => $o[0],
                'gender' => 'tenetur',
                'language' => 'porro',
                'nationality' => 'officiis',
                'city_id' => 'labore',
                'email' => 'consequuntur',
                'employment_type' => 'harum',
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
    "http://localhost/api/ortopedic_and_surgeons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "repellat",
    "first_name": "quas",
    "middle_name": "non",
    "last_name": "ab",
    "dob": {},
    "gender": "tenetur",
    "language": "porro",
    "nationality": "officiis",
    "city_id": "labore",
    "email": "consequuntur",
    "employment_type": "harum",
    "qualifications": "in"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-ortopedic_and_surgeons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ortopedic_and_surgeons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ortopedic_and_surgeons"></code></pre>
</div>
<div id="execution-error-POSTapi-ortopedic_and_surgeons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ortopedic_and_surgeons"></code></pre>
</div>
<form id="form-POSTapi-ortopedic_and_surgeons" data-method="POST" data-path="api/ortopedic_and_surgeons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ortopedic_and_surgeons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ortopedic_and_surgeons" onclick="tryItOut('POSTapi-ortopedic_and_surgeons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ortopedic_and_surgeons" onclick="cancelTryOut('POSTapi-ortopedic_and_surgeons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ortopedic_and_surgeons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ortopedic_and_surgeons</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-ortopedic_and_surgeons" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified OrtopedicAndSurgeon.


GET|HEAD /ortopedicAndSurgeons/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ortopedic_and_surgeons/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/ortopedic_and_surgeons/molestiae',
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
    "http://localhost/api/ortopedic_and_surgeons/molestiae"
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
<div id="execution-results-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<div id="execution-error-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<form id="form-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-method="GET" data-path="api/ortopedic_and_surgeons/{ortopedic_and_surgeon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="tryItOut('GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="cancelTryOut('GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ortopedic_and_surgeons/{ortopedic_and_surgeon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ortopedic_and_surgeon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ortopedic_and_surgeon" data-endpoint="GETapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified OrtopedicAndSurgeon in storage.


PUT/PATCH /ortopedicAndSurgeons/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/ortopedic_and_surgeons/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"molestias","first_name":"quidem","middle_name":"rem","last_name":"qui","dob":{},"gender":"ratione","language":"veniam","nationality":"qui","city_id":"eligendi","user_id":17,"email":"et","employment_type":"deleniti","qualifications":"ut","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/ortopedic_and_surgeons/eum',
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
                'profile_url' => 'molestias',
                'first_name' => 'quidem',
                'middle_name' => 'rem',
                'last_name' => 'qui',
                'dob' => $o[0],
                'gender' => 'ratione',
                'language' => 'veniam',
                'nationality' => 'qui',
                'city_id' => 'eligendi',
                'user_id' => 17,
                'email' => 'et',
                'employment_type' => 'deleniti',
                'qualifications' => 'ut',
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
    "http://localhost/api/ortopedic_and_surgeons/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "molestias",
    "first_name": "quidem",
    "middle_name": "rem",
    "last_name": "qui",
    "dob": {},
    "gender": "ratione",
    "language": "veniam",
    "nationality": "qui",
    "city_id": "eligendi",
    "user_id": 17,
    "email": "et",
    "employment_type": "deleniti",
    "qualifications": "ut",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<div id="execution-error-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<form id="form-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-method="PUT" data-path="api/ortopedic_and_surgeons/{ortopedic_and_surgeon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="tryItOut('PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="cancelTryOut('PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/ortopedic_and_surgeons/{ortopedic_and_surgeon}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/ortopedic_and_surgeons/{ortopedic_and_surgeon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ortopedic_and_surgeon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ortopedic_and_surgeon" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified OrtopedicAndSurgeon from storage.


DELETE /ortopedicAndSurgeons/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/ortopedic_and_surgeons/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/ortopedic_and_surgeons/placeat',
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
    "http://localhost/api/ortopedic_and_surgeons/placeat"
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


<div id="execution-results-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<div id="execution-error-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-"></code></pre>
</div>
<form id="form-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-method="DELETE" data-path="api/ortopedic_and_surgeons/{ortopedic_and_surgeon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="tryItOut('DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" onclick="cancelTryOut('DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/ortopedic_and_surgeons/{ortopedic_and_surgeon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ortopedic_and_surgeon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ortopedic_and_surgeon" data-endpoint="DELETEapi-ortopedic_and_surgeons--ortopedic_and_surgeon-" data-component="url" required  hidden>
<br>
</p>
</form>



