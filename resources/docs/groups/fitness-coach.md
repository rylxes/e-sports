# Fitness Coach


## Store a newly created FitnessCoach in storage.


POST /fitnessCoaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/fitness_coaches/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"ab","first_name":"quia","middle_name":"sed","last_name":"qui","dob":{},"gender":"temporibus","language":"nemo","nationality":"eum","city_id":"numquam","email":"corporis","employment_type":"quisquam","qualifications":"ad"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/fitness_coaches/register',
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
                'password' => 'ab',
                'first_name' => 'quia',
                'middle_name' => 'sed',
                'last_name' => 'qui',
                'dob' => $o[0],
                'gender' => 'temporibus',
                'language' => 'nemo',
                'nationality' => 'eum',
                'city_id' => 'numquam',
                'email' => 'corporis',
                'employment_type' => 'quisquam',
                'qualifications' => 'ad',
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
    "http://localhost/api/fitness_coaches/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "ab",
    "first_name": "quia",
    "middle_name": "sed",
    "last_name": "qui",
    "dob": {},
    "gender": "temporibus",
    "language": "nemo",
    "nationality": "eum",
    "city_id": "numquam",
    "email": "corporis",
    "employment_type": "quisquam",
    "qualifications": "ad"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-fitness_coaches-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fitness_coaches-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fitness_coaches-register"></code></pre>
</div>
<div id="execution-error-POSTapi-fitness_coaches-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fitness_coaches-register"></code></pre>
</div>
<form id="form-POSTapi-fitness_coaches-register" data-method="POST" data-path="api/fitness_coaches/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fitness_coaches-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fitness_coaches-register" onclick="tryItOut('POSTapi-fitness_coaches-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fitness_coaches-register" onclick="cancelTryOut('POSTapi-fitness_coaches-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fitness_coaches-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fitness_coaches/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-fitness_coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-fitness_coaches-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/fitness_coaches/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/fitness_coaches/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php1uezPH" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/fitness_coaches/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php1uezPH', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/fitness_coaches/uploadProfile"
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


<div id="execution-results-POSTapi-fitness_coaches-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fitness_coaches-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fitness_coaches-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-fitness_coaches-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fitness_coaches-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-fitness_coaches-uploadProfile" data-method="POST" data-path="api/fitness_coaches/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fitness_coaches-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fitness_coaches-uploadProfile" onclick="tryItOut('POSTapi-fitness_coaches-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fitness_coaches-uploadProfile" onclick="cancelTryOut('POSTapi-fitness_coaches-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fitness_coaches-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fitness_coaches/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-fitness_coaches-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/fitness_coaches/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/fitness_coaches/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpzlMmjW" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/fitness_coaches/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpzlMmjW', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/fitness_coaches/uploadDocs"
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


<div id="execution-results-POSTapi-fitness_coaches-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fitness_coaches-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fitness_coaches-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-fitness_coaches-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fitness_coaches-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-fitness_coaches-uploadDocs" data-method="POST" data-path="api/fitness_coaches/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fitness_coaches-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fitness_coaches-uploadDocs" onclick="tryItOut('POSTapi-fitness_coaches-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fitness_coaches-uploadDocs" onclick="cancelTryOut('POSTapi-fitness_coaches-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fitness_coaches-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fitness_coaches/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-fitness_coaches-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-fitness_coaches-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the FitnessCoach.


GET|HEAD /fitnessCoaches

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/fitness_coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/fitness_coaches',
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
    "http://localhost/api/fitness_coaches"
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
<div id="execution-results-GETapi-fitness_coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fitness_coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fitness_coaches"></code></pre>
</div>
<div id="execution-error-GETapi-fitness_coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fitness_coaches"></code></pre>
</div>
<form id="form-GETapi-fitness_coaches" data-method="GET" data-path="api/fitness_coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fitness_coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fitness_coaches" onclick="tryItOut('GETapi-fitness_coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fitness_coaches" onclick="cancelTryOut('GETapi-fitness_coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fitness_coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fitness_coaches</code></b>
</p>
</form>


## Store a newly created FitnessCoach in storage.


POST /fitnessCoaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/fitness_coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"officia","first_name":"et","middle_name":"commodi","last_name":"rerum","dob":{},"gender":"et","language":"est","nationality":"rem","city_id":"qui","email":"temporibus","employment_type":"laudantium","qualifications":"ut"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/fitness_coaches',
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
                'password' => 'officia',
                'first_name' => 'et',
                'middle_name' => 'commodi',
                'last_name' => 'rerum',
                'dob' => $o[0],
                'gender' => 'et',
                'language' => 'est',
                'nationality' => 'rem',
                'city_id' => 'qui',
                'email' => 'temporibus',
                'employment_type' => 'laudantium',
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
    "http://localhost/api/fitness_coaches"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "officia",
    "first_name": "et",
    "middle_name": "commodi",
    "last_name": "rerum",
    "dob": {},
    "gender": "et",
    "language": "est",
    "nationality": "rem",
    "city_id": "qui",
    "email": "temporibus",
    "employment_type": "laudantium",
    "qualifications": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-fitness_coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fitness_coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fitness_coaches"></code></pre>
</div>
<div id="execution-error-POSTapi-fitness_coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fitness_coaches"></code></pre>
</div>
<form id="form-POSTapi-fitness_coaches" data-method="POST" data-path="api/fitness_coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fitness_coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fitness_coaches" onclick="tryItOut('POSTapi-fitness_coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fitness_coaches" onclick="cancelTryOut('POSTapi-fitness_coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fitness_coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fitness_coaches</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-fitness_coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-fitness_coaches" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified FitnessCoach.


GET|HEAD /fitnessCoaches/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/fitness_coaches/rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/fitness_coaches/rem',
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
    "http://localhost/api/fitness_coaches/rem"
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
<div id="execution-results-GETapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fitness_coaches--fitness_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<div id="execution-error-GETapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<form id="form-GETapi-fitness_coaches--fitness_coach-" data-method="GET" data-path="api/fitness_coaches/{fitness_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fitness_coaches--fitness_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fitness_coaches--fitness_coach-" onclick="tryItOut('GETapi-fitness_coaches--fitness_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fitness_coaches--fitness_coach-" onclick="cancelTryOut('GETapi-fitness_coaches--fitness_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fitness_coaches--fitness_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fitness_coaches/{fitness_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>fitness_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fitness_coach" data-endpoint="GETapi-fitness_coaches--fitness_coach-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified FitnessCoach in storage.


PUT/PATCH /fitnessCoaches/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/fitness_coaches/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"iure","first_name":"quis","middle_name":"ut","last_name":"repellendus","dob":{},"gender":"qui","language":"totam","nationality":"libero","city_id":"eveniet","user_id":3,"email":"et","employment_type":"dolor","qualifications":"excepturi","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/fitness_coaches/et',
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
                'profile_url' => 'iure',
                'first_name' => 'quis',
                'middle_name' => 'ut',
                'last_name' => 'repellendus',
                'dob' => $o[0],
                'gender' => 'qui',
                'language' => 'totam',
                'nationality' => 'libero',
                'city_id' => 'eveniet',
                'user_id' => 3,
                'email' => 'et',
                'employment_type' => 'dolor',
                'qualifications' => 'excepturi',
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
    "http://localhost/api/fitness_coaches/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "iure",
    "first_name": "quis",
    "middle_name": "ut",
    "last_name": "repellendus",
    "dob": {},
    "gender": "qui",
    "language": "totam",
    "nationality": "libero",
    "city_id": "eveniet",
    "user_id": 3,
    "email": "et",
    "employment_type": "dolor",
    "qualifications": "excepturi",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-fitness_coaches--fitness_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<div id="execution-error-PUTapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<form id="form-PUTapi-fitness_coaches--fitness_coach-" data-method="PUT" data-path="api/fitness_coaches/{fitness_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-fitness_coaches--fitness_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-fitness_coaches--fitness_coach-" onclick="tryItOut('PUTapi-fitness_coaches--fitness_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-fitness_coaches--fitness_coach-" onclick="cancelTryOut('PUTapi-fitness_coaches--fitness_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-fitness_coaches--fitness_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/fitness_coaches/{fitness_coach}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/fitness_coaches/{fitness_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>fitness_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fitness_coach" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-fitness_coaches--fitness_coach-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified FitnessCoach from storage.


DELETE /fitnessCoaches/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/fitness_coaches/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/fitness_coaches/ad',
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
    "http://localhost/api/fitness_coaches/ad"
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


<div id="execution-results-DELETEapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-fitness_coaches--fitness_coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<div id="execution-error-DELETEapi-fitness_coaches--fitness_coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-fitness_coaches--fitness_coach-"></code></pre>
</div>
<form id="form-DELETEapi-fitness_coaches--fitness_coach-" data-method="DELETE" data-path="api/fitness_coaches/{fitness_coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-fitness_coaches--fitness_coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-fitness_coaches--fitness_coach-" onclick="tryItOut('DELETEapi-fitness_coaches--fitness_coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-fitness_coaches--fitness_coach-" onclick="cancelTryOut('DELETEapi-fitness_coaches--fitness_coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-fitness_coaches--fitness_coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/fitness_coaches/{fitness_coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>fitness_coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fitness_coach" data-endpoint="DELETEapi-fitness_coaches--fitness_coach-" data-component="url" required  hidden>
<br>
</p>
</form>



