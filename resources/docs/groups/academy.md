# Academy


## Store a newly created Academy in storage.


POST /academies

> Example request:

```bash
curl -X POST \
    "http://localhost/api/academies/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"mollitia","email":"esse","name":"quos","reg_date":{},"profile_url":"qui","academy_age":"ipsum","capacity":"ut","country_id":12,"location":"et"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/academies/register',
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
                'password' => 'mollitia',
                'email' => 'esse',
                'name' => 'quos',
                'reg_date' => $o[0],
                'profile_url' => 'qui',
                'academy_age' => 'ipsum',
                'capacity' => 'ut',
                'country_id' => 12,
                'location' => 'et',
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
    "http://localhost/api/academies/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "mollitia",
    "email": "esse",
    "name": "quos",
    "reg_date": {},
    "profile_url": "qui",
    "academy_age": "ipsum",
    "capacity": "ut",
    "country_id": 12,
    "location": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-academies-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-academies-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-academies-register"></code></pre>
</div>
<div id="execution-error-POSTapi-academies-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-academies-register"></code></pre>
</div>
<form id="form-POSTapi-academies-register" data-method="POST" data-path="api/academies/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-academies-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-academies-register" onclick="tryItOut('POSTapi-academies-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-academies-register" onclick="cancelTryOut('POSTapi-academies-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-academies-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/academies/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-academies-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-academies-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>reg_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reg_date" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>academy_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="academy_age" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="country_id" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-academies-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/academies/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/academies/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php3M8Q4a" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/academies/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php3M8Q4a', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/academies/uploadProfile"
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


<div id="execution-results-POSTapi-academies-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-academies-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-academies-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-academies-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-academies-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-academies-uploadProfile" data-method="POST" data-path="api/academies/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-academies-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-academies-uploadProfile" onclick="tryItOut('POSTapi-academies-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-academies-uploadProfile" onclick="cancelTryOut('POSTapi-academies-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-academies-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/academies/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-academies-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/academies/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/academies/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php66n2j9" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/academies/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php66n2j9', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/academies/uploadDocs"
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


<div id="execution-results-POSTapi-academies-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-academies-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-academies-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-academies-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-academies-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-academies-uploadDocs" data-method="POST" data-path="api/academies/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-academies-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-academies-uploadDocs" onclick="tryItOut('POSTapi-academies-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-academies-uploadDocs" onclick="cancelTryOut('POSTapi-academies-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-academies-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/academies/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-academies-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-academies-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Academy.


GET|HEAD /academies

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/academies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/academies',
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
    "http://localhost/api/academies"
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
<div id="execution-results-GETapi-academies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-academies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-academies"></code></pre>
</div>
<div id="execution-error-GETapi-academies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-academies"></code></pre>
</div>
<form id="form-GETapi-academies" data-method="GET" data-path="api/academies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-academies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-academies" onclick="tryItOut('GETapi-academies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-academies" onclick="cancelTryOut('GETapi-academies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-academies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/academies</code></b>
</p>
</form>


## Store a newly created Academy in storage.


POST /academies

> Example request:

```bash
curl -X POST \
    "http://localhost/api/academies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"veniam","email":"autem","name":"assumenda","reg_date":{},"profile_url":"nihil","academy_age":"similique","capacity":"veritatis","country_id":13,"location":"asperiores"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/academies',
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
                'password' => 'veniam',
                'email' => 'autem',
                'name' => 'assumenda',
                'reg_date' => $o[0],
                'profile_url' => 'nihil',
                'academy_age' => 'similique',
                'capacity' => 'veritatis',
                'country_id' => 13,
                'location' => 'asperiores',
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
    "http://localhost/api/academies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "veniam",
    "email": "autem",
    "name": "assumenda",
    "reg_date": {},
    "profile_url": "nihil",
    "academy_age": "similique",
    "capacity": "veritatis",
    "country_id": 13,
    "location": "asperiores"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-academies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-academies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-academies"></code></pre>
</div>
<div id="execution-error-POSTapi-academies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-academies"></code></pre>
</div>
<form id="form-POSTapi-academies" data-method="POST" data-path="api/academies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-academies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-academies" onclick="tryItOut('POSTapi-academies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-academies" onclick="cancelTryOut('POSTapi-academies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-academies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/academies</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-academies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-academies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>reg_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reg_date" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>academy_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="academy_age" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="country_id" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-academies" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Academy.


GET|HEAD /academies/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/academies/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/academies/illo',
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
    "http://localhost/api/academies/illo"
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
<div id="execution-results-GETapi-academies--academy-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-academies--academy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-academies--academy-"></code></pre>
</div>
<div id="execution-error-GETapi-academies--academy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-academies--academy-"></code></pre>
</div>
<form id="form-GETapi-academies--academy-" data-method="GET" data-path="api/academies/{academy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-academies--academy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-academies--academy-" onclick="tryItOut('GETapi-academies--academy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-academies--academy-" onclick="cancelTryOut('GETapi-academies--academy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-academies--academy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/academies/{academy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>academy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="academy" data-endpoint="GETapi-academies--academy-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Academy in storage.


PUT/PATCH /academies/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/academies/ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptas","reg_date":{},"profile_url":"numquam","academy_age":"sit","capacity":"aut","country_id":17,"location":"nihil"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/academies/ipsum',
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
                'name' => 'voluptas',
                'reg_date' => $o[0],
                'profile_url' => 'numquam',
                'academy_age' => 'sit',
                'capacity' => 'aut',
                'country_id' => 17,
                'location' => 'nihil',
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
    "http://localhost/api/academies/ipsum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptas",
    "reg_date": {},
    "profile_url": "numquam",
    "academy_age": "sit",
    "capacity": "aut",
    "country_id": 17,
    "location": "nihil"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-academies--academy-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-academies--academy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-academies--academy-"></code></pre>
</div>
<div id="execution-error-PUTapi-academies--academy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-academies--academy-"></code></pre>
</div>
<form id="form-PUTapi-academies--academy-" data-method="PUT" data-path="api/academies/{academy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-academies--academy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-academies--academy-" onclick="tryItOut('PUTapi-academies--academy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-academies--academy-" onclick="cancelTryOut('PUTapi-academies--academy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-academies--academy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/academies/{academy}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/academies/{academy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>academy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="academy" data-endpoint="PUTapi-academies--academy-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>reg_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reg_date" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>academy_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="academy_age" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="capacity" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="country_id" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="PUTapi-academies--academy-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Academy from storage.


DELETE /academies/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/academies/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/academies/dolores',
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
    "http://localhost/api/academies/dolores"
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


<div id="execution-results-DELETEapi-academies--academy-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-academies--academy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-academies--academy-"></code></pre>
</div>
<div id="execution-error-DELETEapi-academies--academy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-academies--academy-"></code></pre>
</div>
<form id="form-DELETEapi-academies--academy-" data-method="DELETE" data-path="api/academies/{academy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-academies--academy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-academies--academy-" onclick="tryItOut('DELETEapi-academies--academy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-academies--academy-" onclick="cancelTryOut('DELETEapi-academies--academy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-academies--academy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/academies/{academy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>academy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="academy" data-endpoint="DELETEapi-academies--academy-" data-component="url" required  hidden>
<br>
</p>
</form>



