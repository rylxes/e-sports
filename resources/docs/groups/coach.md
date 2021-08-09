# Coach


## Store a newly created Coach in storage.


POST /coaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/coaches/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"culpa","email":"et","first_name":"dicta","middle_name":"quis","last_name":"quidem","dob":{},"gender":"vel","coaching_age":"unde","coaching_gender":"sunt","sports":"quos","specialization":"doloremque","language":"repellendus","nationality":"aperiam","city_id":"qui","employment_type":"eos","team_club":"est"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/coaches/register',
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
                'password' => 'culpa',
                'email' => 'et',
                'first_name' => 'dicta',
                'middle_name' => 'quis',
                'last_name' => 'quidem',
                'dob' => $o[0],
                'gender' => 'vel',
                'coaching_age' => 'unde',
                'coaching_gender' => 'sunt',
                'sports' => 'quos',
                'specialization' => 'doloremque',
                'language' => 'repellendus',
                'nationality' => 'aperiam',
                'city_id' => 'qui',
                'employment_type' => 'eos',
                'team_club' => 'est',
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
    "http://localhost/api/coaches/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "culpa",
    "email": "et",
    "first_name": "dicta",
    "middle_name": "quis",
    "last_name": "quidem",
    "dob": {},
    "gender": "vel",
    "coaching_age": "unde",
    "coaching_gender": "sunt",
    "sports": "quos",
    "specialization": "doloremque",
    "language": "repellendus",
    "nationality": "aperiam",
    "city_id": "qui",
    "employment_type": "eos",
    "team_club": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-coaches-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-coaches-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-coaches-register"></code></pre>
</div>
<div id="execution-error-POSTapi-coaches-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-coaches-register"></code></pre>
</div>
<form id="form-POSTapi-coaches-register" data-method="POST" data-path="api/coaches/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-coaches-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-coaches-register" onclick="tryItOut('POSTapi-coaches-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-coaches-register" onclick="cancelTryOut('POSTapi-coaches-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-coaches-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/coaches/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-coaches-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_age" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_gender" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="POSTapi-coaches-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/coaches/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/coaches/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpZDixkP" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/coaches/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpZDixkP', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/coaches/uploadProfile"
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


<div id="execution-results-POSTapi-coaches-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-coaches-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-coaches-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-coaches-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-coaches-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-coaches-uploadProfile" data-method="POST" data-path="api/coaches/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-coaches-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-coaches-uploadProfile" onclick="tryItOut('POSTapi-coaches-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-coaches-uploadProfile" onclick="cancelTryOut('POSTapi-coaches-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-coaches-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/coaches/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-coaches-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/coaches/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/coaches/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpxa3GwH" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/coaches/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpxa3GwH', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/coaches/uploadDocs"
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


<div id="execution-results-POSTapi-coaches-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-coaches-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-coaches-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-coaches-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-coaches-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-coaches-uploadDocs" data-method="POST" data-path="api/coaches/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-coaches-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-coaches-uploadDocs" onclick="tryItOut('POSTapi-coaches-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-coaches-uploadDocs" onclick="cancelTryOut('POSTapi-coaches-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-coaches-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/coaches/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-coaches-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-coaches-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Coach.


GET|HEAD /coaches

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/coaches',
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
    "http://localhost/api/coaches"
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
<div id="execution-results-GETapi-coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-coaches"></code></pre>
</div>
<div id="execution-error-GETapi-coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-coaches"></code></pre>
</div>
<form id="form-GETapi-coaches" data-method="GET" data-path="api/coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-coaches" onclick="tryItOut('GETapi-coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-coaches" onclick="cancelTryOut('GETapi-coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/coaches</code></b>
</p>
</form>


## Store a newly created Coach in storage.


POST /coaches

> Example request:

```bash
curl -X POST \
    "http://localhost/api/coaches" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"vitae","email":"perspiciatis","first_name":"ut","middle_name":"perferendis","last_name":"libero","dob":{},"gender":"impedit","coaching_age":"reprehenderit","coaching_gender":"nihil","sports":"tempore","specialization":"blanditiis","language":"reiciendis","nationality":"magnam","city_id":"quia","employment_type":"cum","team_club":"est"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/coaches',
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
                'password' => 'vitae',
                'email' => 'perspiciatis',
                'first_name' => 'ut',
                'middle_name' => 'perferendis',
                'last_name' => 'libero',
                'dob' => $o[0],
                'gender' => 'impedit',
                'coaching_age' => 'reprehenderit',
                'coaching_gender' => 'nihil',
                'sports' => 'tempore',
                'specialization' => 'blanditiis',
                'language' => 'reiciendis',
                'nationality' => 'magnam',
                'city_id' => 'quia',
                'employment_type' => 'cum',
                'team_club' => 'est',
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
    "http://localhost/api/coaches"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "vitae",
    "email": "perspiciatis",
    "first_name": "ut",
    "middle_name": "perferendis",
    "last_name": "libero",
    "dob": {},
    "gender": "impedit",
    "coaching_age": "reprehenderit",
    "coaching_gender": "nihil",
    "sports": "tempore",
    "specialization": "blanditiis",
    "language": "reiciendis",
    "nationality": "magnam",
    "city_id": "quia",
    "employment_type": "cum",
    "team_club": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-coaches" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-coaches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-coaches"></code></pre>
</div>
<div id="execution-error-POSTapi-coaches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-coaches"></code></pre>
</div>
<form id="form-POSTapi-coaches" data-method="POST" data-path="api/coaches" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-coaches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-coaches" onclick="tryItOut('POSTapi-coaches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-coaches" onclick="cancelTryOut('POSTapi-coaches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-coaches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/coaches</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-coaches" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_age" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_gender" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="POSTapi-coaches" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Coach.


GET|HEAD /coaches/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/coaches/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/coaches/odio',
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
    "http://localhost/api/coaches/odio"
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
<div id="execution-results-GETapi-coaches--coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-coaches--coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-coaches--coach-"></code></pre>
</div>
<div id="execution-error-GETapi-coaches--coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-coaches--coach-"></code></pre>
</div>
<form id="form-GETapi-coaches--coach-" data-method="GET" data-path="api/coaches/{coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-coaches--coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-coaches--coach-" onclick="tryItOut('GETapi-coaches--coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-coaches--coach-" onclick="cancelTryOut('GETapi-coaches--coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-coaches--coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/coaches/{coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="coach" data-endpoint="GETapi-coaches--coach-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Coach in storage.


PUT/PATCH /coaches/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/coaches/deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"officia","qualifications":"hic","user_id":20,"email":"atque","first_name":"eum","middle_name":"provident","last_name":"sunt","dob":{},"gender":"laudantium","coaching_age":"atque","coaching_gender":"sit","sports":"necessitatibus","specialization":"tempore","language":"animi","nationality":"qui","city_id":"sint","employment_type":"sit","team_club":"atque","created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/coaches/deserunt',
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
                'profile_url' => 'officia',
                'qualifications' => 'hic',
                'user_id' => 20,
                'email' => 'atque',
                'first_name' => 'eum',
                'middle_name' => 'provident',
                'last_name' => 'sunt',
                'dob' => $o[0],
                'gender' => 'laudantium',
                'coaching_age' => 'atque',
                'coaching_gender' => 'sit',
                'sports' => 'necessitatibus',
                'specialization' => 'tempore',
                'language' => 'animi',
                'nationality' => 'qui',
                'city_id' => 'sint',
                'employment_type' => 'sit',
                'team_club' => 'atque',
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
    "http://localhost/api/coaches/deserunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "officia",
    "qualifications": "hic",
    "user_id": 20,
    "email": "atque",
    "first_name": "eum",
    "middle_name": "provident",
    "last_name": "sunt",
    "dob": {},
    "gender": "laudantium",
    "coaching_age": "atque",
    "coaching_gender": "sit",
    "sports": "necessitatibus",
    "specialization": "tempore",
    "language": "animi",
    "nationality": "qui",
    "city_id": "sint",
    "employment_type": "sit",
    "team_club": "atque",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-coaches--coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-coaches--coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-coaches--coach-"></code></pre>
</div>
<div id="execution-error-PUTapi-coaches--coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-coaches--coach-"></code></pre>
</div>
<form id="form-PUTapi-coaches--coach-" data-method="PUT" data-path="api/coaches/{coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-coaches--coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-coaches--coach-" onclick="tryItOut('PUTapi-coaches--coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-coaches--coach-" onclick="cancelTryOut('PUTapi-coaches--coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-coaches--coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/coaches/{coach}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/coaches/{coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="coach" data-endpoint="PUTapi-coaches--coach-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_age</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_age" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>coaching_gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="coaching_gender" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>specialization</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="specialization" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>employment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="employment_type" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>team_club</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="team_club" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-coaches--coach-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Coach from storage.


DELETE /coaches/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/coaches/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/coaches/eum',
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
    "http://localhost/api/coaches/eum"
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


<div id="execution-results-DELETEapi-coaches--coach-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-coaches--coach-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-coaches--coach-"></code></pre>
</div>
<div id="execution-error-DELETEapi-coaches--coach-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-coaches--coach-"></code></pre>
</div>
<form id="form-DELETEapi-coaches--coach-" data-method="DELETE" data-path="api/coaches/{coach}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-coaches--coach-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-coaches--coach-" onclick="tryItOut('DELETEapi-coaches--coach-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-coaches--coach-" onclick="cancelTryOut('DELETEapi-coaches--coach-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-coaches--coach-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/coaches/{coach}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>coach</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="coach" data-endpoint="DELETEapi-coaches--coach-" data-component="url" required  hidden>
<br>
</p>
</form>



