# Talent


## Store a newly created Talent in storage.


POST /talent

> Example request:

```bash
curl -X POST \
    "http://localhost/api/talent/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"scheme":"aut","password":"quia","email":"sit","first_name":"voluptatem","middle_name":"temporibus","last_name":"sequi","dob":{},"age":2,"gender":"quae","languages":"a","city_id":"voluptatem","genotype":"non","blood_group":"aut","sports":"ullam","positions":"fugiat","educational_background":"est","nationality":"ut","height":33998805.487353,"weight":446627551.34292}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/talent/register',
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
                'scheme' => 'aut',
                'password' => 'quia',
                'email' => 'sit',
                'first_name' => 'voluptatem',
                'middle_name' => 'temporibus',
                'last_name' => 'sequi',
                'dob' => $o[0],
                'age' => 2,
                'gender' => 'quae',
                'languages' => 'a',
                'city_id' => 'voluptatem',
                'genotype' => 'non',
                'blood_group' => 'aut',
                'sports' => 'ullam',
                'positions' => 'fugiat',
                'educational_background' => 'est',
                'nationality' => 'ut',
                'height' => 33998805.487353,
                'weight' => 446627551.34292,
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
    "http://localhost/api/talent/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "scheme": "aut",
    "password": "quia",
    "email": "sit",
    "first_name": "voluptatem",
    "middle_name": "temporibus",
    "last_name": "sequi",
    "dob": {},
    "age": 2,
    "gender": "quae",
    "languages": "a",
    "city_id": "voluptatem",
    "genotype": "non",
    "blood_group": "aut",
    "sports": "ullam",
    "positions": "fugiat",
    "educational_background": "est",
    "nationality": "ut",
    "height": 33998805.487353,
    "weight": 446627551.34292
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-talent-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-talent-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-talent-register"></code></pre>
</div>
<div id="execution-error-POSTapi-talent-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-talent-register"></code></pre>
</div>
<form id="form-POSTapi-talent-register" data-method="POST" data-path="api/talent/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-talent-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-talent-register" onclick="tryItOut('POSTapi-talent-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-talent-register" onclick="cancelTryOut('POSTapi-talent-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-talent-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/talent/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>scheme</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scheme" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-talent-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-talent-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-talent-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-talent-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="age" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>languages</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="languages" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>genotype</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="genotype" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>blood_group</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="blood_group" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>positions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positions" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>educational_background</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="educational_background" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>height</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="height" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>weight</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="weight" data-endpoint="POSTapi-talent-register" data-component="body"  hidden>
<br>
</p>

</form>


## api/talent/uploadProfile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/talent/uploadProfile" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "file=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpqUcdtv" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/talent/uploadProfile',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpqUcdtv', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/talent/uploadProfile"
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


<div id="execution-results-POSTapi-talent-uploadProfile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-talent-uploadProfile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-talent-uploadProfile"></code></pre>
</div>
<div id="execution-error-POSTapi-talent-uploadProfile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-talent-uploadProfile"></code></pre>
</div>
<form id="form-POSTapi-talent-uploadProfile" data-method="POST" data-path="api/talent/uploadProfile" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-talent-uploadProfile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-talent-uploadProfile" onclick="tryItOut('POSTapi-talent-uploadProfile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-talent-uploadProfile" onclick="cancelTryOut('POSTapi-talent-uploadProfile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-talent-uploadProfile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/talent/uploadProfile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTapi-talent-uploadProfile" data-component="body"  hidden>
<br>
The value must be a file.</p>

</form>


## api/talent/uploadDocs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/talent/uploadDocs" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "pictures[]=@/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpXBukWL" 
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/talent/uploadDocs',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'pictures[]',
                'contents' => fopen('/private/var/folders/sd/h50tvsg11bzf8pm7x_71wpzr0000gn/T/phpXBukWL', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/talent/uploadDocs"
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


<div id="execution-results-POSTapi-talent-uploadDocs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-talent-uploadDocs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-talent-uploadDocs"></code></pre>
</div>
<div id="execution-error-POSTapi-talent-uploadDocs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-talent-uploadDocs"></code></pre>
</div>
<form id="form-POSTapi-talent-uploadDocs" data-method="POST" data-path="api/talent/uploadDocs" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-talent-uploadDocs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-talent-uploadDocs" onclick="tryItOut('POSTapi-talent-uploadDocs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-talent-uploadDocs" onclick="cancelTryOut('POSTapi-talent-uploadDocs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-talent-uploadDocs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/talent/uploadDocs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-talent-uploadDocs" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-talent-uploadDocs" data-component="body" hidden>
<br>
The value must be a file.</p>

</form>


## Display a listing of the Talent.


GET|HEAD /talent

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/talent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/talent',
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
    "http://localhost/api/talent"
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
<div id="execution-results-GETapi-talent" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-talent"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-talent"></code></pre>
</div>
<div id="execution-error-GETapi-talent" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-talent"></code></pre>
</div>
<form id="form-GETapi-talent" data-method="GET" data-path="api/talent" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-talent', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-talent" onclick="tryItOut('GETapi-talent');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-talent" onclick="cancelTryOut('GETapi-talent');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-talent" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/talent</code></b>
</p>
</form>


## Store a newly created Talent in storage.


POST /talent

> Example request:

```bash
curl -X POST \
    "http://localhost/api/talent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"scheme":"ullam","password":"et","email":"dolor","first_name":"minima","middle_name":"suscipit","last_name":"et","dob":{},"age":14,"gender":"sit","languages":"aperiam","city_id":"facilis","genotype":"eum","blood_group":"consequatur","sports":"itaque","positions":"minima","educational_background":"et","nationality":"nemo","height":2,"weight":6.223378706}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/talent',
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
                'scheme' => 'ullam',
                'password' => 'et',
                'email' => 'dolor',
                'first_name' => 'minima',
                'middle_name' => 'suscipit',
                'last_name' => 'et',
                'dob' => $o[0],
                'age' => 14,
                'gender' => 'sit',
                'languages' => 'aperiam',
                'city_id' => 'facilis',
                'genotype' => 'eum',
                'blood_group' => 'consequatur',
                'sports' => 'itaque',
                'positions' => 'minima',
                'educational_background' => 'et',
                'nationality' => 'nemo',
                'height' => 2.0,
                'weight' => 6.223378706,
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
    "http://localhost/api/talent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "scheme": "ullam",
    "password": "et",
    "email": "dolor",
    "first_name": "minima",
    "middle_name": "suscipit",
    "last_name": "et",
    "dob": {},
    "age": 14,
    "gender": "sit",
    "languages": "aperiam",
    "city_id": "facilis",
    "genotype": "eum",
    "blood_group": "consequatur",
    "sports": "itaque",
    "positions": "minima",
    "educational_background": "et",
    "nationality": "nemo",
    "height": 2,
    "weight": 6.223378706
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-talent" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-talent"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-talent"></code></pre>
</div>
<div id="execution-error-POSTapi-talent" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-talent"></code></pre>
</div>
<form id="form-POSTapi-talent" data-method="POST" data-path="api/talent" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-talent', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-talent" onclick="tryItOut('POSTapi-talent');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-talent" onclick="cancelTryOut('POSTapi-talent');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-talent" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/talent</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>scheme</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scheme" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-talent" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-talent" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-talent" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-talent" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="age" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>languages</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="languages" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>genotype</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="genotype" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>blood_group</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="blood_group" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>positions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positions" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>educational_background</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="educational_background" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>height</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="height" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>weight</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="weight" data-endpoint="POSTapi-talent" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Talent.


GET|HEAD /talent/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/talent/expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/talent/expedita',
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
    "http://localhost/api/talent/expedita"
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
<div id="execution-results-GETapi-talent--talent-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-talent--talent-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-talent--talent-"></code></pre>
</div>
<div id="execution-error-GETapi-talent--talent-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-talent--talent-"></code></pre>
</div>
<form id="form-GETapi-talent--talent-" data-method="GET" data-path="api/talent/{talent}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-talent--talent-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-talent--talent-" onclick="tryItOut('GETapi-talent--talent-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-talent--talent-" onclick="cancelTryOut('GETapi-talent--talent-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-talent--talent-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/talent/{talent}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>talent</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="talent" data-endpoint="GETapi-talent--talent-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Talent in storage.


PUT/PATCH /talent/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/talent/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"profile_url":"ut","qualifications":"vero","scheme":"quibusdam","user_id":13,"email":"dolorum","first_name":"voluptatum","middle_name":"sunt","last_name":"maiores","dob":{},"age":14,"gender":"itaque","languages":"magnam","city_id":"nobis","genotype":"molestiae","blood_group":"velit","sports":"deleniti","positions":"commodi","educational_background":"perferendis","nationality":"voluptatem","height":2703429.4210946,"weight":649.5745,"created_at":{},"updated_at":{}}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/talent/id',
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
                'profile_url' => 'ut',
                'qualifications' => 'vero',
                'scheme' => 'quibusdam',
                'user_id' => 13,
                'email' => 'dolorum',
                'first_name' => 'voluptatum',
                'middle_name' => 'sunt',
                'last_name' => 'maiores',
                'dob' => $o[0],
                'age' => 14,
                'gender' => 'itaque',
                'languages' => 'magnam',
                'city_id' => 'nobis',
                'genotype' => 'molestiae',
                'blood_group' => 'velit',
                'sports' => 'deleniti',
                'positions' => 'commodi',
                'educational_background' => 'perferendis',
                'nationality' => 'voluptatem',
                'height' => 2703429.4210946,
                'weight' => 649.5745,
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
    "http://localhost/api/talent/id"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_url": "ut",
    "qualifications": "vero",
    "scheme": "quibusdam",
    "user_id": 13,
    "email": "dolorum",
    "first_name": "voluptatum",
    "middle_name": "sunt",
    "last_name": "maiores",
    "dob": {},
    "age": 14,
    "gender": "itaque",
    "languages": "magnam",
    "city_id": "nobis",
    "genotype": "molestiae",
    "blood_group": "velit",
    "sports": "deleniti",
    "positions": "commodi",
    "educational_background": "perferendis",
    "nationality": "voluptatem",
    "height": 2703429.4210946,
    "weight": 649.5745,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-talent--talent-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-talent--talent-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-talent--talent-"></code></pre>
</div>
<div id="execution-error-PUTapi-talent--talent-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-talent--talent-"></code></pre>
</div>
<form id="form-PUTapi-talent--talent-" data-method="PUT" data-path="api/talent/{talent}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-talent--talent-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-talent--talent-" onclick="tryItOut('PUTapi-talent--talent-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-talent--talent-" onclick="cancelTryOut('PUTapi-talent--talent-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-talent--talent-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/talent/{talent}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/talent/{talent}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>talent</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="talent" data-endpoint="PUTapi-talent--talent-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>profile_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_url" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>qualifications</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="qualifications" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>scheme</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="scheme" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>middle_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="middle_name" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="age" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>languages</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="languages" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city_id" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>genotype</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="genotype" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>blood_group</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="blood_group" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sports" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>positions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positions" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>educational_background</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="educational_background" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nationality</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nationality" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>height</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="height" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>weight</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="weight" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-talent--talent-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Talent from storage.


DELETE /talent/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/talent/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/talent/quo',
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
    "http://localhost/api/talent/quo"
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


<div id="execution-results-DELETEapi-talent--talent-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-talent--talent-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-talent--talent-"></code></pre>
</div>
<div id="execution-error-DELETEapi-talent--talent-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-talent--talent-"></code></pre>
</div>
<form id="form-DELETEapi-talent--talent-" data-method="DELETE" data-path="api/talent/{talent}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-talent--talent-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-talent--talent-" onclick="tryItOut('DELETEapi-talent--talent-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-talent--talent-" onclick="cancelTryOut('DELETEapi-talent--talent-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-talent--talent-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/talent/{talent}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>talent</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="talent" data-endpoint="DELETEapi-talent--talent-" data-component="url" required  hidden>
<br>
</p>
</form>



