# Personal Details


## Display a listing of the PersonalDetails.


GET|HEAD /personalDetails

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/personal_details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/personal_details"
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
<div id="execution-results-GETapi-personal_details" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-personal_details"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-personal_details"></code></pre>
</div>
<div id="execution-error-GETapi-personal_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-personal_details"></code></pre>
</div>
<form id="form-GETapi-personal_details" data-method="GET" data-path="api/personal_details" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-personal_details', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-personal_details" onclick="tryItOut('GETapi-personal_details');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-personal_details" onclick="cancelTryOut('GETapi-personal_details');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-personal_details" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/personal_details</code></b>
</p>
</form>


## Store a newly created PersonalDetails in storage.


POST /personalDetails

> Example request:

```bash
curl -X POST \
    "http://localhost/api/personal_details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":10,"first_name":"impedit","marital_status":"officiis","mother_maiden_name":"non","last_name":"dolorem","height":"aliquam","body_weight":"aliquam","phone":"repellat","sm_handle":"et","highest_education":"voluptas","place_of_birth":"rem","school":"rerum","career_preference":"accusantium","is_still_schooling":false,"contact_address":"est","dob":{},"country_id":9,"state_of_origin":10,"zipcode":20,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/personal_details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 10,
    "first_name": "impedit",
    "marital_status": "officiis",
    "mother_maiden_name": "non",
    "last_name": "dolorem",
    "height": "aliquam",
    "body_weight": "aliquam",
    "phone": "repellat",
    "sm_handle": "et",
    "highest_education": "voluptas",
    "place_of_birth": "rem",
    "school": "rerum",
    "career_preference": "accusantium",
    "is_still_schooling": false,
    "contact_address": "est",
    "dob": {},
    "country_id": 9,
    "state_of_origin": 10,
    "zipcode": 20,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-personal_details" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-personal_details"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-personal_details"></code></pre>
</div>
<div id="execution-error-POSTapi-personal_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-personal_details"></code></pre>
</div>
<form id="form-POSTapi-personal_details" data-method="POST" data-path="api/personal_details" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-personal_details', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-personal_details" onclick="tryItOut('POSTapi-personal_details');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-personal_details" onclick="cancelTryOut('POSTapi-personal_details');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-personal_details" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/personal_details</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-personal_details" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>marital_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="marital_status" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>mother_maiden_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mother_maiden_name" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>height</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="height" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>body_weight</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="body_weight" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sm_handle</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sm_handle" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>highest_education</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="highest_education" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>place_of_birth</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="place_of_birth" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>school</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="school" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>career_preference</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="career_preference" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_still_schooling</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-personal_details" hidden><input type="radio" name="is_still_schooling" value="true" data-endpoint="POSTapi-personal_details" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-personal_details" hidden><input type="radio" name="is_still_schooling" value="false" data-endpoint="POSTapi-personal_details" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>contact_address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact_address" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="country_id" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>state_of_origin</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="state_of_origin" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>zipcode</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="zipcode" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-personal_details" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified PersonalDetails.


GET|HEAD /personalDetails/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/personal_details/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/personal_details/molestias"
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
<div id="execution-results-GETapi-personal_details--personal_detail-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-personal_details--personal_detail-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-personal_details--personal_detail-"></code></pre>
</div>
<div id="execution-error-GETapi-personal_details--personal_detail-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-personal_details--personal_detail-"></code></pre>
</div>
<form id="form-GETapi-personal_details--personal_detail-" data-method="GET" data-path="api/personal_details/{personal_detail}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-personal_details--personal_detail-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-personal_details--personal_detail-" onclick="tryItOut('GETapi-personal_details--personal_detail-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-personal_details--personal_detail-" onclick="cancelTryOut('GETapi-personal_details--personal_detail-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-personal_details--personal_detail-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/personal_details/{personal_detail}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>personal_detail</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="personal_detail" data-endpoint="GETapi-personal_details--personal_detail-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified PersonalDetails in storage.


PUT/PATCH /personalDetails/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/personal_details/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"nihil","marital_status":"minima","mother_maiden_name":"necessitatibus","last_name":"quo","height":"sed","body_weight":"dolore","phone":"officiis","sm_handle":"exercitationem","highest_education":"inventore","place_of_birth":"eum","school":"eius","career_preference":"tempora","is_still_schooling":false,"contact_address":"est","dob":{},"country_id":2,"state_of_origin":9,"zipcode":14,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/personal_details/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "nihil",
    "marital_status": "minima",
    "mother_maiden_name": "necessitatibus",
    "last_name": "quo",
    "height": "sed",
    "body_weight": "dolore",
    "phone": "officiis",
    "sm_handle": "exercitationem",
    "highest_education": "inventore",
    "place_of_birth": "eum",
    "school": "eius",
    "career_preference": "tempora",
    "is_still_schooling": false,
    "contact_address": "est",
    "dob": {},
    "country_id": 2,
    "state_of_origin": 9,
    "zipcode": 14,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-personal_details--personal_detail-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-personal_details--personal_detail-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-personal_details--personal_detail-"></code></pre>
</div>
<div id="execution-error-PUTapi-personal_details--personal_detail-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-personal_details--personal_detail-"></code></pre>
</div>
<form id="form-PUTapi-personal_details--personal_detail-" data-method="PUT" data-path="api/personal_details/{personal_detail}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-personal_details--personal_detail-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-personal_details--personal_detail-" onclick="tryItOut('PUTapi-personal_details--personal_detail-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-personal_details--personal_detail-" onclick="cancelTryOut('PUTapi-personal_details--personal_detail-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-personal_details--personal_detail-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/personal_details/{personal_detail}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/personal_details/{personal_detail}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>personal_detail</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="personal_detail" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>marital_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="marital_status" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>mother_maiden_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mother_maiden_name" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>height</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="height" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>body_weight</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="body_weight" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>sm_handle</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sm_handle" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>highest_education</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="highest_education" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>place_of_birth</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="place_of_birth" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>school</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="school" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>career_preference</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="career_preference" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_still_schooling</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-personal_details--personal_detail-" hidden><input type="radio" name="is_still_schooling" value="true" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-personal_details--personal_detail-" hidden><input type="radio" name="is_still_schooling" value="false" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>contact_address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact_address" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="country_id" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>state_of_origin</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="state_of_origin" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>zipcode</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="zipcode" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-personal_details--personal_detail-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified PersonalDetails from storage.


DELETE /personalDetails/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/personal_details/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/personal_details/velit"
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


<div id="execution-results-DELETEapi-personal_details--personal_detail-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-personal_details--personal_detail-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-personal_details--personal_detail-"></code></pre>
</div>
<div id="execution-error-DELETEapi-personal_details--personal_detail-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-personal_details--personal_detail-"></code></pre>
</div>
<form id="form-DELETEapi-personal_details--personal_detail-" data-method="DELETE" data-path="api/personal_details/{personal_detail}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-personal_details--personal_detail-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-personal_details--personal_detail-" onclick="tryItOut('DELETEapi-personal_details--personal_detail-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-personal_details--personal_detail-" onclick="cancelTryOut('DELETEapi-personal_details--personal_detail-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-personal_details--personal_detail-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/personal_details/{personal_detail}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>personal_detail</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="personal_detail" data-endpoint="DELETEapi-personal_details--personal_detail-" data-component="url" required  hidden>
<br>
</p>
</form>



