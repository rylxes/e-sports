# Country


## Display a listing of the Country.


GET|HEAD /countries

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/countries"
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
<div id="execution-results-GETapi-countries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries"></code></pre>
</div>
<div id="execution-error-GETapi-countries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries"></code></pre>
</div>
<form id="form-GETapi-countries" data-method="GET" data-path="api/countries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries" onclick="tryItOut('GETapi-countries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries" onclick="cancelTryOut('GETapi-countries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries</code></b>
</p>
</form>


## Display the specified Country.


GET|HEAD /countries/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/countries/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/countries/nam"
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
<div id="execution-results-GETapi-countries--country-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries--country-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--country-"></code></pre>
</div>
<div id="execution-error-GETapi-countries--country-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--country-"></code></pre>
</div>
<form id="form-GETapi-countries--country-" data-method="GET" data-path="api/countries/{country}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--country-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--country-" onclick="tryItOut('GETapi-countries--country-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--country-" onclick="cancelTryOut('GETapi-countries--country-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--country-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries/{country}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country" data-endpoint="GETapi-countries--country-" data-component="url" required  hidden>
<br>
</p>
</form>



