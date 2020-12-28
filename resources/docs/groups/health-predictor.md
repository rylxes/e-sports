# Health Predictor


## Display a listing of the HealthPredictor.


GET|HEAD /healthPredictors

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/health_predictors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/health_predictors"
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
<div id="execution-results-GETapi-health_predictors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-health_predictors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-health_predictors"></code></pre>
</div>
<div id="execution-error-GETapi-health_predictors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-health_predictors"></code></pre>
</div>
<form id="form-GETapi-health_predictors" data-method="GET" data-path="api/health_predictors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-health_predictors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-health_predictors" onclick="tryItOut('GETapi-health_predictors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-health_predictors" onclick="cancelTryOut('GETapi-health_predictors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-health_predictors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/health_predictors</code></b>
</p>
</form>


## Store a newly created HealthPredictor in storage.


POST /healthPredictors

> Example request:

```bash
curl -X POST \
    "http://localhost/api/health_predictors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":2,"blood_group":"libero","is_hereditary_issue":false,"is_current_health_injury":false,"is_receiving_treatment":false,"is_long_term_injury":false,"hereditary_issue":"sit","long_term_injury":"assumenda","treatment_type":"ea","current_health_injury":"officia","is_personal_health_challenge":false,"personal_health_challenge":"magni","injury_seriousness":"quo","medical_treatment":"sit","injury_location":"voluptatem","genotype":"blanditiis","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/health_predictors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 2,
    "blood_group": "libero",
    "is_hereditary_issue": false,
    "is_current_health_injury": false,
    "is_receiving_treatment": false,
    "is_long_term_injury": false,
    "hereditary_issue": "sit",
    "long_term_injury": "assumenda",
    "treatment_type": "ea",
    "current_health_injury": "officia",
    "is_personal_health_challenge": false,
    "personal_health_challenge": "magni",
    "injury_seriousness": "quo",
    "medical_treatment": "sit",
    "injury_location": "voluptatem",
    "genotype": "blanditiis",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-health_predictors" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-health_predictors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-health_predictors"></code></pre>
</div>
<div id="execution-error-POSTapi-health_predictors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-health_predictors"></code></pre>
</div>
<form id="form-POSTapi-health_predictors" data-method="POST" data-path="api/health_predictors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-health_predictors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-health_predictors" onclick="tryItOut('POSTapi-health_predictors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-health_predictors" onclick="cancelTryOut('POSTapi-health_predictors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-health_predictors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/health_predictors</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-health_predictors" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>blood_group</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="blood_group" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_hereditary_issue</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_hereditary_issue" value="true" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_hereditary_issue" value="false" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_current_health_injury</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_current_health_injury" value="true" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_current_health_injury" value="false" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_receiving_treatment</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_receiving_treatment" value="true" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_receiving_treatment" value="false" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_long_term_injury</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_long_term_injury" value="true" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_long_term_injury" value="false" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>hereditary_issue</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="hereditary_issue" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>long_term_injury</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="long_term_injury" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>treatment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="treatment_type" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>current_health_injury</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_health_injury" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_personal_health_challenge</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_personal_health_challenge" value="true" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-health_predictors" hidden><input type="radio" name="is_personal_health_challenge" value="false" data-endpoint="POSTapi-health_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>personal_health_challenge</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="personal_health_challenge" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>injury_seriousness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="injury_seriousness" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>medical_treatment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="medical_treatment" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>injury_location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="injury_location" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>genotype</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="genotype" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-health_predictors" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified HealthPredictor.


GET|HEAD /healthPredictors/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/health_predictors/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/health_predictors/recusandae"
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
<div id="execution-results-GETapi-health_predictors--health_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-health_predictors--health_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-health_predictors--health_predictor-"></code></pre>
</div>
<div id="execution-error-GETapi-health_predictors--health_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-health_predictors--health_predictor-"></code></pre>
</div>
<form id="form-GETapi-health_predictors--health_predictor-" data-method="GET" data-path="api/health_predictors/{health_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-health_predictors--health_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-health_predictors--health_predictor-" onclick="tryItOut('GETapi-health_predictors--health_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-health_predictors--health_predictor-" onclick="cancelTryOut('GETapi-health_predictors--health_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-health_predictors--health_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/health_predictors/{health_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>health_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="health_predictor" data-endpoint="GETapi-health_predictors--health_predictor-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified HealthPredictor in storage.


PUT/PATCH /healthPredictors/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/health_predictors/perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":11,"blood_group":"ullam","is_hereditary_issue":false,"is_current_health_injury":false,"is_receiving_treatment":false,"is_long_term_injury":false,"hereditary_issue":"in","long_term_injury":"est","treatment_type":"exercitationem","current_health_injury":"corporis","is_personal_health_challenge":false,"personal_health_challenge":"non","injury_seriousness":"hic","medical_treatment":"ut","injury_location":"temporibus","genotype":"omnis","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/health_predictors/perspiciatis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 11,
    "blood_group": "ullam",
    "is_hereditary_issue": false,
    "is_current_health_injury": false,
    "is_receiving_treatment": false,
    "is_long_term_injury": false,
    "hereditary_issue": "in",
    "long_term_injury": "est",
    "treatment_type": "exercitationem",
    "current_health_injury": "corporis",
    "is_personal_health_challenge": false,
    "personal_health_challenge": "non",
    "injury_seriousness": "hic",
    "medical_treatment": "ut",
    "injury_location": "temporibus",
    "genotype": "omnis",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-health_predictors--health_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-health_predictors--health_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-health_predictors--health_predictor-"></code></pre>
</div>
<div id="execution-error-PUTapi-health_predictors--health_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-health_predictors--health_predictor-"></code></pre>
</div>
<form id="form-PUTapi-health_predictors--health_predictor-" data-method="PUT" data-path="api/health_predictors/{health_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-health_predictors--health_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-health_predictors--health_predictor-" onclick="tryItOut('PUTapi-health_predictors--health_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-health_predictors--health_predictor-" onclick="cancelTryOut('PUTapi-health_predictors--health_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-health_predictors--health_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/health_predictors/{health_predictor}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/health_predictors/{health_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>health_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="health_predictor" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>blood_group</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="blood_group" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_hereditary_issue</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_hereditary_issue" value="true" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_hereditary_issue" value="false" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_current_health_injury</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_current_health_injury" value="true" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_current_health_injury" value="false" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_receiving_treatment</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_receiving_treatment" value="true" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_receiving_treatment" value="false" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_long_term_injury</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_long_term_injury" value="true" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_long_term_injury" value="false" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>hereditary_issue</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="hereditary_issue" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>long_term_injury</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="long_term_injury" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>treatment_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="treatment_type" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>current_health_injury</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_health_injury" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_personal_health_challenge</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_personal_health_challenge" value="true" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-health_predictors--health_predictor-" hidden><input type="radio" name="is_personal_health_challenge" value="false" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>personal_health_challenge</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="personal_health_challenge" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>injury_seriousness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="injury_seriousness" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>medical_treatment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="medical_treatment" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>injury_location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="injury_location" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>genotype</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="genotype" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-health_predictors--health_predictor-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified HealthPredictor from storage.


DELETE /healthPredictors/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/health_predictors/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/health_predictors/eius"
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


<div id="execution-results-DELETEapi-health_predictors--health_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-health_predictors--health_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-health_predictors--health_predictor-"></code></pre>
</div>
<div id="execution-error-DELETEapi-health_predictors--health_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-health_predictors--health_predictor-"></code></pre>
</div>
<form id="form-DELETEapi-health_predictors--health_predictor-" data-method="DELETE" data-path="api/health_predictors/{health_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-health_predictors--health_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-health_predictors--health_predictor-" onclick="tryItOut('DELETEapi-health_predictors--health_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-health_predictors--health_predictor-" onclick="cancelTryOut('DELETEapi-health_predictors--health_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-health_predictors--health_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/health_predictors/{health_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>health_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="health_predictor" data-endpoint="DELETEapi-health_predictors--health_predictor-" data-component="url" required  hidden>
<br>
</p>
</form>



