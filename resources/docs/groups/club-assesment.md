# Club Assesment


## Display a listing of the ClubAssesment.


GET|HEAD /clubAssesments

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/club_assesments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/club_assesments"
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
<div id="execution-results-GETapi-club_assesments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-club_assesments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-club_assesments"></code></pre>
</div>
<div id="execution-error-GETapi-club_assesments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-club_assesments"></code></pre>
</div>
<form id="form-GETapi-club_assesments" data-method="GET" data-path="api/club_assesments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-club_assesments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-club_assesments" onclick="tryItOut('GETapi-club_assesments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-club_assesments" onclick="cancelTryOut('GETapi-club_assesments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-club_assesments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/club_assesments</code></b>
</p>
</form>


## Store a newly created ClubAssesment in storage.


POST /clubAssesments

> Example request:

```bash
curl -X POST \
    "http://localhost/api/club_assesments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"enjoy_practice_routines":false,"is_participated_in_competitions":false,"is_selected_to_represent":false,"competitions":"in","motivation":"molestiae","achievement":"accusantium","admired_sportsperson":"reprehenderit","top_athlete_plans":"sunt","current_team":"eos","date_joined_team":{},"favourite_jersey_number":"et","nickname":"dolorem","favourite_sports_team":"repellat","why_like_team":"nemo","no_of_teams_played_for":13,"why_leave":"quo","can_improve_in_team":false,"is_like_coach_team":false,"positions_play":"quae","preferred_foot":"sunt","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/club_assesments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "enjoy_practice_routines": false,
    "is_participated_in_competitions": false,
    "is_selected_to_represent": false,
    "competitions": "in",
    "motivation": "molestiae",
    "achievement": "accusantium",
    "admired_sportsperson": "reprehenderit",
    "top_athlete_plans": "sunt",
    "current_team": "eos",
    "date_joined_team": {},
    "favourite_jersey_number": "et",
    "nickname": "dolorem",
    "favourite_sports_team": "repellat",
    "why_like_team": "nemo",
    "no_of_teams_played_for": 13,
    "why_leave": "quo",
    "can_improve_in_team": false,
    "is_like_coach_team": false,
    "positions_play": "quae",
    "preferred_foot": "sunt",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-club_assesments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-club_assesments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-club_assesments"></code></pre>
</div>
<div id="execution-error-POSTapi-club_assesments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-club_assesments"></code></pre>
</div>
<form id="form-POSTapi-club_assesments" data-method="POST" data-path="api/club_assesments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-club_assesments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-club_assesments" onclick="tryItOut('POSTapi-club_assesments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-club_assesments" onclick="cancelTryOut('POSTapi-club_assesments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-club_assesments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/club_assesments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>enjoy_practice_routines</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="enjoy_practice_routines" value="true" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="enjoy_practice_routines" value="false" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_participated_in_competitions</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_participated_in_competitions" value="true" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_participated_in_competitions" value="false" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_selected_to_represent</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_selected_to_represent" value="true" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_selected_to_represent" value="false" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>competitions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="competitions" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>motivation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="motivation" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>achievement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="achievement" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>admired_sportsperson</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admired_sportsperson" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>top_athlete_plans</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="top_athlete_plans" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>current_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_team" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>date_joined_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="date_joined_team" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>favourite_jersey_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="favourite_jersey_number" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nickname</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nickname" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>favourite_sports_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="favourite_sports_team" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>why_like_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="why_like_team" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>no_of_teams_played_for</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="no_of_teams_played_for" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>why_leave</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="why_leave" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>can_improve_in_team</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="can_improve_in_team" value="true" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="can_improve_in_team" value="false" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_like_coach_team</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_like_coach_team" value="true" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-club_assesments" hidden><input type="radio" name="is_like_coach_team" value="false" data-endpoint="POSTapi-club_assesments" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>positions_play</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positions_play" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>preferred_foot</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="preferred_foot" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-club_assesments" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified ClubAssesment.


GET|HEAD /clubAssesments/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/club_assesments/quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/club_assesments/quam"
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
<div id="execution-results-GETapi-club_assesments--club_assesment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-club_assesments--club_assesment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-club_assesments--club_assesment-"></code></pre>
</div>
<div id="execution-error-GETapi-club_assesments--club_assesment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-club_assesments--club_assesment-"></code></pre>
</div>
<form id="form-GETapi-club_assesments--club_assesment-" data-method="GET" data-path="api/club_assesments/{club_assesment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-club_assesments--club_assesment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-club_assesments--club_assesment-" onclick="tryItOut('GETapi-club_assesments--club_assesment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-club_assesments--club_assesment-" onclick="cancelTryOut('GETapi-club_assesments--club_assesment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-club_assesments--club_assesment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/club_assesments/{club_assesment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>club_assesment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="club_assesment" data-endpoint="GETapi-club_assesments--club_assesment-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified ClubAssesment in storage.


PUT/PATCH /clubAssesments/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/club_assesments/ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"enjoy_practice_routines":false,"is_participated_in_competitions":false,"is_selected_to_represent":false,"competitions":"illum","motivation":"modi","achievement":"cupiditate","admired_sportsperson":"sunt","top_athlete_plans":"officiis","current_team":"ea","date_joined_team":{},"favourite_jersey_number":"amet","nickname":"consequatur","favourite_sports_team":"velit","why_like_team":"molestiae","no_of_teams_played_for":1,"why_leave":"nobis","can_improve_in_team":false,"is_like_coach_team":false,"positions_play":"pariatur","preferred_foot":"nam","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/club_assesments/ab"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "enjoy_practice_routines": false,
    "is_participated_in_competitions": false,
    "is_selected_to_represent": false,
    "competitions": "illum",
    "motivation": "modi",
    "achievement": "cupiditate",
    "admired_sportsperson": "sunt",
    "top_athlete_plans": "officiis",
    "current_team": "ea",
    "date_joined_team": {},
    "favourite_jersey_number": "amet",
    "nickname": "consequatur",
    "favourite_sports_team": "velit",
    "why_like_team": "molestiae",
    "no_of_teams_played_for": 1,
    "why_leave": "nobis",
    "can_improve_in_team": false,
    "is_like_coach_team": false,
    "positions_play": "pariatur",
    "preferred_foot": "nam",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-club_assesments--club_assesment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-club_assesments--club_assesment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-club_assesments--club_assesment-"></code></pre>
</div>
<div id="execution-error-PUTapi-club_assesments--club_assesment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-club_assesments--club_assesment-"></code></pre>
</div>
<form id="form-PUTapi-club_assesments--club_assesment-" data-method="PUT" data-path="api/club_assesments/{club_assesment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-club_assesments--club_assesment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-club_assesments--club_assesment-" onclick="tryItOut('PUTapi-club_assesments--club_assesment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-club_assesments--club_assesment-" onclick="cancelTryOut('PUTapi-club_assesments--club_assesment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-club_assesments--club_assesment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/club_assesments/{club_assesment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/club_assesments/{club_assesment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>club_assesment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="club_assesment" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>enjoy_practice_routines</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="enjoy_practice_routines" value="true" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="enjoy_practice_routines" value="false" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_participated_in_competitions</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_participated_in_competitions" value="true" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_participated_in_competitions" value="false" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_selected_to_represent</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_selected_to_represent" value="true" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_selected_to_represent" value="false" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>competitions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="competitions" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>motivation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="motivation" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>achievement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="achievement" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>admired_sportsperson</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admired_sportsperson" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>top_athlete_plans</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="top_athlete_plans" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>current_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_team" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>date_joined_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="date_joined_team" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>favourite_jersey_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="favourite_jersey_number" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nickname</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nickname" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>favourite_sports_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="favourite_sports_team" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>why_like_team</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="why_like_team" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>no_of_teams_played_for</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="no_of_teams_played_for" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>why_leave</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="why_leave" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>can_improve_in_team</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="can_improve_in_team" value="true" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="can_improve_in_team" value="false" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_like_coach_team</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_like_coach_team" value="true" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-club_assesments--club_assesment-" hidden><input type="radio" name="is_like_coach_team" value="false" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>positions_play</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="positions_play" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>preferred_foot</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="preferred_foot" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-club_assesments--club_assesment-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified ClubAssesment from storage.


DELETE /clubAssesments/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/club_assesments/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/club_assesments/aut"
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


<div id="execution-results-DELETEapi-club_assesments--club_assesment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-club_assesments--club_assesment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-club_assesments--club_assesment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-club_assesments--club_assesment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-club_assesments--club_assesment-"></code></pre>
</div>
<form id="form-DELETEapi-club_assesments--club_assesment-" data-method="DELETE" data-path="api/club_assesments/{club_assesment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-club_assesments--club_assesment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-club_assesments--club_assesment-" onclick="tryItOut('DELETEapi-club_assesments--club_assesment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-club_assesments--club_assesment-" onclick="cancelTryOut('DELETEapi-club_assesments--club_assesment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-club_assesments--club_assesment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/club_assesments/{club_assesment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>club_assesment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="club_assesment" data-endpoint="DELETEapi-club_assesments--club_assesment-" data-component="url" required  hidden>
<br>
</p>
</form>



