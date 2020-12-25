# Psych Predictor


## Display a listing of the PsychPredictor.


GET|HEAD /psychPredictors

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/psych_predictors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/psych_predictors"
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
<div id="execution-results-GETapi-psych_predictors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-psych_predictors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-psych_predictors"></code></pre>
</div>
<div id="execution-error-GETapi-psych_predictors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-psych_predictors"></code></pre>
</div>
<form id="form-GETapi-psych_predictors" data-method="GET" data-path="api/psych_predictors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-psych_predictors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-psych_predictors" onclick="tryItOut('GETapi-psych_predictors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-psych_predictors" onclick="cancelTryOut('GETapi-psych_predictors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-psych_predictors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/psych_predictors</code></b>
</p>
</form>


## Store a newly created PsychPredictor in storage.


POST /psychPredictors

> Example request:

```bash
curl -X POST \
    "http://localhost/api/psych_predictors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":15,"time_practice_in_week":8,"hours_practice_in_week":14,"is_parent_in_support":false,"is_team_player":false,"parent_in_support_reason":"recusandae","challenges":"reiciendis","greatest_motivation":"sit","strength":"eos","weakness":"saepe","can_overcome_challenges":false,"time_start_sport":"assumenda","rating_sports":"iusto","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/psych_predictors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 15,
    "time_practice_in_week": 8,
    "hours_practice_in_week": 14,
    "is_parent_in_support": false,
    "is_team_player": false,
    "parent_in_support_reason": "recusandae",
    "challenges": "reiciendis",
    "greatest_motivation": "sit",
    "strength": "eos",
    "weakness": "saepe",
    "can_overcome_challenges": false,
    "time_start_sport": "assumenda",
    "rating_sports": "iusto",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-psych_predictors" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-psych_predictors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-psych_predictors"></code></pre>
</div>
<div id="execution-error-POSTapi-psych_predictors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-psych_predictors"></code></pre>
</div>
<form id="form-POSTapi-psych_predictors" data-method="POST" data-path="api/psych_predictors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-psych_predictors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-psych_predictors" onclick="tryItOut('POSTapi-psych_predictors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-psych_predictors" onclick="cancelTryOut('POSTapi-psych_predictors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-psych_predictors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/psych_predictors</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-psych_predictors" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>time_practice_in_week</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="time_practice_in_week" data-endpoint="POSTapi-psych_predictors" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>hours_practice_in_week</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="hours_practice_in_week" data-endpoint="POSTapi-psych_predictors" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_parent_in_support</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="is_parent_in_support" value="true" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="is_parent_in_support" value="false" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_team_player</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="is_team_player" value="true" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="is_team_player" value="false" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>parent_in_support_reason</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="parent_in_support_reason" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>challenges</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="challenges" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>greatest_motivation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="greatest_motivation" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>strength</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="strength" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>weakness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="weakness" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>can_overcome_challenges</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="can_overcome_challenges" value="true" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-psych_predictors" hidden><input type="radio" name="can_overcome_challenges" value="false" data-endpoint="POSTapi-psych_predictors" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>time_start_sport</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="time_start_sport" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>rating_sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rating_sports" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-psych_predictors" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified PsychPredictor.


GET|HEAD /psychPredictors/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/psych_predictors/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/psych_predictors/qui"
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
<div id="execution-results-GETapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-psych_predictors--psych_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<div id="execution-error-GETapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<form id="form-GETapi-psych_predictors--psych_predictor-" data-method="GET" data-path="api/psych_predictors/{psych_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-psych_predictors--psych_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-psych_predictors--psych_predictor-" onclick="tryItOut('GETapi-psych_predictors--psych_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-psych_predictors--psych_predictor-" onclick="cancelTryOut('GETapi-psych_predictors--psych_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-psych_predictors--psych_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/psych_predictors/{psych_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>psych_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="psych_predictor" data-endpoint="GETapi-psych_predictors--psych_predictor-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified PsychPredictor in storage.


PUT/PATCH /psychPredictors/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/psych_predictors/deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":16,"time_practice_in_week":9,"hours_practice_in_week":7,"is_parent_in_support":false,"is_team_player":false,"parent_in_support_reason":"deserunt","challenges":"nam","greatest_motivation":"doloremque","strength":"officiis","weakness":"consectetur","can_overcome_challenges":false,"time_start_sport":"nobis","rating_sports":"repudiandae","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/psych_predictors/deserunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 16,
    "time_practice_in_week": 9,
    "hours_practice_in_week": 7,
    "is_parent_in_support": false,
    "is_team_player": false,
    "parent_in_support_reason": "deserunt",
    "challenges": "nam",
    "greatest_motivation": "doloremque",
    "strength": "officiis",
    "weakness": "consectetur",
    "can_overcome_challenges": false,
    "time_start_sport": "nobis",
    "rating_sports": "repudiandae",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-psych_predictors--psych_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<div id="execution-error-PUTapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<form id="form-PUTapi-psych_predictors--psych_predictor-" data-method="PUT" data-path="api/psych_predictors/{psych_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-psych_predictors--psych_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-psych_predictors--psych_predictor-" onclick="tryItOut('PUTapi-psych_predictors--psych_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-psych_predictors--psych_predictor-" onclick="cancelTryOut('PUTapi-psych_predictors--psych_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-psych_predictors--psych_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/psych_predictors/{psych_predictor}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/psych_predictors/{psych_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>psych_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="psych_predictor" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>time_practice_in_week</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="time_practice_in_week" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>hours_practice_in_week</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="hours_practice_in_week" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_parent_in_support</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="is_parent_in_support" value="true" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="is_parent_in_support" value="false" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_team_player</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="is_team_player" value="true" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="is_team_player" value="false" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>parent_in_support_reason</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="parent_in_support_reason" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>challenges</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="challenges" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>greatest_motivation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="greatest_motivation" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>strength</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="strength" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>weakness</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="weakness" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>can_overcome_challenges</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="can_overcome_challenges" value="true" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-psych_predictors--psych_predictor-" hidden><input type="radio" name="can_overcome_challenges" value="false" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>time_start_sport</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="time_start_sport" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>rating_sports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rating_sports" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-psych_predictors--psych_predictor-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified PsychPredictor from storage.


DELETE /psychPredictors/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/psych_predictors/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/psych_predictors/repellat"
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


<div id="execution-results-DELETEapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-psych_predictors--psych_predictor-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<div id="execution-error-DELETEapi-psych_predictors--psych_predictor-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-psych_predictors--psych_predictor-"></code></pre>
</div>
<form id="form-DELETEapi-psych_predictors--psych_predictor-" data-method="DELETE" data-path="api/psych_predictors/{psych_predictor}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-psych_predictors--psych_predictor-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-psych_predictors--psych_predictor-" onclick="tryItOut('DELETEapi-psych_predictors--psych_predictor-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-psych_predictors--psych_predictor-" onclick="cancelTryOut('DELETEapi-psych_predictors--psych_predictor-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-psych_predictors--psych_predictor-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/psych_predictors/{psych_predictor}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>psych_predictor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="psych_predictor" data-endpoint="DELETEapi-psych_predictors--psych_predictor-" data-component="url" required  hidden>
<br>
</p>
</form>



