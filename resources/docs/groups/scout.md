# Scout


## Store a newly created Scout in storage.


POST /scouts

> Example request:

```bash
curl -X POST \
    "http://localhost/api/scouts/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"odit","middle_name":"unde","last_name":"repellendus","dob":{},"gender":"et","scouting_age":"dignissimos","scouting_gender":"commodi","sports":"aut","specialization":"similique","language":"doloribus","nationality":"mollitia","city_id":"maxime","user_id":13,"password":"fuga","email":"id","employment_type":"sit","scouting_level":"natus","qualifications":"error","team_club":"aut"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/scouts/register',
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
                'first_name' => 'odit',
                'middle_name' => 'unde',
                'last_name' => 'repellendus',
                'dob' => $o[0],
                'gender' => 'et',
                'scouting_age' => 'dignissimos',
                'scouting_gender' => 'commodi',
                'sports' => 'aut',
                'specialization' => 'similique',
                'language' => 'doloribus',
                'nationality' => 'mollitia',
                'city_id' => 'maxime',
                'user_id' => 13,
                'password' => 'fuga',
                'email' => 'id',
                'employment_type' => 'sit',
                'scouting_level' => 'natus',
                'qualifications' => 'error',
                'team_club' => 'aut',
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
    "http://localhost/api/scouts/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "odit",
    "middle_name": "unde",
    "last_name": "repellendus",
    "dob": {},
    "gender": "et",
    "scouting_age": "dignissimos",
    "scouting_gender": "commodi",
    "sports": "aut",
    "specialization": "similique",
    "language": "doloribus",
    "nationality": "mollitia",
    "city_id": "maxime",
    "user_id": 13,
    "password": "fuga",
    "email": "id",
    "employment_type": "sit",
    "scouting_level": "natus",
    "qualifications": "error",
    "team_club": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-scouts-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-scouts-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-scouts-register"></code></pre>
</div>
<div id="execution-error-POSTapi-scouts-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-scouts-register"></code></pre>
</div>
<form id="form-POSTapi-scouts-register" data-method="POST" data-path="api/scouts/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-scouts-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-scouts-register" onclick="tryItOut('POSTapi-scouts-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-scouts-register" onclick="cancelTryOut('POSTapi-scouts-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-scouts-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/scouts/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_age" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_gender" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-scouts-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-scouts-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_level</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_level" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="POSTapi-scouts-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/scouts/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/scouts/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php9Mun9b" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/scouts/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php9Mun9b', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/scouts/uploadProfile"
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


<div id="execution-results-POSTapi-scouts-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-scouts-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-scouts-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-scouts-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-scouts-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-scouts-uploadProfile" data-method="POST" data-path="api/scouts/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-scouts-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-scouts-uploadProfile" onclick="tryItOut('POSTapi-scouts-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-scouts-uploadProfile" onclick="cancelTryOut('POSTapi-scouts-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-scouts-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/scouts/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-scouts-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/scouts/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/scouts/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php8FAS5J" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/scouts/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/php8FAS5J', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/scouts/uploadDocs"
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


<div id="execution-results-POSTapi-scouts-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-scouts-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-scouts-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-scouts-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-scouts-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-scouts-uploadDocs" data-method="POST" data-path="api/scouts/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-scouts-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-scouts-uploadDocs" onclick="tryItOut('POSTapi-scouts-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-scouts-uploadDocs" onclick="cancelTryOut('POSTapi-scouts-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-scouts-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/scouts/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-scouts-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-scouts-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Scout.


GET|HEAD /scouts

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/scouts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/scouts',
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
    "http://localhost/api/scouts"
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
<div id="execution-results-GETapi-scouts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-scouts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-scouts"></code></pre>
</div>
<div id="execution-error-GETapi-scouts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-scouts"></code></pre>
</div>
<form id="form-GETapi-scouts" data-method="GET" data-path="api/scouts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-scouts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-scouts" onclick="tryItOut('GETapi-scouts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-scouts" onclick="cancelTryOut('GETapi-scouts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-scouts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/scouts</code></b>
</p>
</form>


## Store a newly created Scout in storage.


POST /scouts

> Example request:

```bash
curl -X POST \
    "http://localhost/api/scouts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"id","middle_name":"et","last_name":"odit","dob":{},"gender":"ut","scouting_age":"est","scouting_gender":"incidunt","sports":"similique","specialization":"quia","language":"nihil","nationality":"nostrum","city_id":"repellendus","user_id":1,"password":"ducimus","email":"omnis","employment_type":"vel","scouting_level":"ipsum","qualifications":"qui","team_club":"provident"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/scouts',
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
                'first_name' => 'id',
                'middle_name' => 'et',
                'last_name' => 'odit',
                'dob' => $o[0],
                'gender' => 'ut',
                'scouting_age' => 'est',
                'scouting_gender' => 'incidunt',
                'sports' => 'similique',
                'specialization' => 'quia',
                'language' => 'nihil',
                'nationality' => 'nostrum',
                'city_id' => 'repellendus',
                'user_id' => 1,
                'password' => 'ducimus',
                'email' => 'omnis',
                'employment_type' => 'vel',
                'scouting_level' => 'ipsum',
                'qualifications' => 'qui',
                'team_club' => 'provident',
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
    "http://localhost/api/scouts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "id",
    "middle_name": "et",
    "last_name": "odit",
    "dob": {},
    "gender": "ut",
    "scouting_age": "est",
    "scouting_gender": "incidunt",
    "sports": "similique",
    "specialization": "quia",
    "language": "nihil",
    "nationality": "nostrum",
    "city_id": "repellendus",
    "user_id": 1,
    "password": "ducimus",
    "email": "omnis",
    "employment_type": "vel",
    "scouting_level": "ipsum",
    "qualifications": "qui",
    "team_club": "provident"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-scouts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-scouts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-scouts"></code></pre>
</div>
<div id="execution-error-POSTapi-scouts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-scouts"></code></pre>
</div>
<form id="form-POSTapi-scouts" data-method="POST" data-path="api/scouts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-scouts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-scouts" onclick="tryItOut('POSTapi-scouts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-scouts" onclick="cancelTryOut('POSTapi-scouts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-scouts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/scouts</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_age" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_gender" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-scouts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-scouts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_level</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_level" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="POSTapi-scouts" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Scout.


GET|HEAD /scouts/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/scouts/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/scouts/est',
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
    "http://localhost/api/scouts/est"
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
<div id="execution-results-GETapi-scouts--scout-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-scouts--scout-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-scouts--scout-"></code></pre>
</div>
<div id="execution-error-GETapi-scouts--scout-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-scouts--scout-"></code></pre>
</div>
<form id="form-GETapi-scouts--scout-" data-method="GET" data-path="api/scouts/{scout}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-scouts--scout-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-scouts--scout-" onclick="tryItOut('GETapi-scouts--scout-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-scouts--scout-" onclick="cancelTryOut('GETapi-scouts--scout-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-scouts--scout-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/scouts/{scout}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>scout</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="scout" data-endpoint="GETapi-scouts--scout-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Scout in storage.


PUT/PATCH /scouts/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/scouts/vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"placeat","first_name":"molestiae","middle_name":"tenetur","last_name":"quos","dob":{},"gender":"distinctio","scouting_age":"sit","scouting_gender":"ex","sports":"soluta","specialization":"qui","language":"quisquam","nationality":"nobis","city_id":"adipisci","user_id":16,"email":"quibusdam","employment_type":"repellat","scouting_level":"minima","qualifications":"voluptatem","team_club":"in","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/scouts/vitae',
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
                'profile_url' => 'placeat',
                'first_name' => 'molestiae',
                'middle_name' => 'tenetur',
                'last_name' => 'quos',
                'dob' => $o[0],
                'gender' => 'distinctio',
                'scouting_age' => 'sit',
                'scouting_gender' => 'ex',
                'sports' => 'soluta',
                'specialization' => 'qui',
                'language' => 'quisquam',
                'nationality' => 'nobis',
                'city_id' => 'adipisci',
                'user_id' => 16,
                'email' => 'quibusdam',
                'employment_type' => 'repellat',
                'scouting_level' => 'minima',
                'qualifications' => 'voluptatem',
                'team_club' => 'in',
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
    "http://localhost/api/scouts/vitae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "placeat",
    "first_name": "molestiae",
    "middle_name": "tenetur",
    "last_name": "quos",
    "dob": {},
    "gender": "distinctio",
    "scouting_age": "sit",
    "scouting_gender": "ex",
    "sports": "soluta",
    "specialization": "qui",
    "language": "quisquam",
    "nationality": "nobis",
    "city_id": "adipisci",
    "user_id": 16,
    "email": "quibusdam",
    "employment_type": "repellat",
    "scouting_level": "minima",
    "qualifications": "voluptatem",
    "team_club": "in",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-scouts--scout-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-scouts--scout-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-scouts--scout-"></code></pre>
</div>
<div id="execution-error-PUTapi-scouts--scout-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-scouts--scout-"></code></pre>
</div>
<form id="form-PUTapi-scouts--scout-" data-method="PUT" data-path="api/scouts/{scout}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-scouts--scout-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-scouts--scout-" onclick="tryItOut('PUTapi-scouts--scout-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-scouts--scout-" onclick="cancelTryOut('PUTapi-scouts--scout-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-scouts--scout-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/scouts/{scout}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/scouts/{scout}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>scout</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="scout" data-endpoint="PUTapi-scouts--scout-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_age" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_gender" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scouting_level</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scouting_level" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-scouts--scout-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Scout from storage.


DELETE /scouts/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/scouts/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/scouts/sed',
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
    "http://localhost/api/scouts/sed"
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


<div id="execution-results-DELETEapi-scouts--scout-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-scouts--scout-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-scouts--scout-"></code></pre>
</div>
<div id="execution-error-DELETEapi-scouts--scout-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-scouts--scout-"></code></pre>
</div>
<form id="form-DELETEapi-scouts--scout-" data-method="DELETE" data-path="api/scouts/{scout}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-scouts--scout-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-scouts--scout-" onclick="tryItOut('DELETEapi-scouts--scout-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-scouts--scout-" onclick="cancelTryOut('DELETEapi-scouts--scout-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-scouts--scout-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/scouts/{scout}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>scout</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="scout" data-endpoint="DELETEapi-scouts--scout-" data-component="url" required  hidden>
<br>
</p>
</form>



