<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $agent->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $agent->address }}</p>
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $agent->user->email }}</p>
</div>

<!-- Super Agent Id Field -->
<div class="form-group">
    {!! Form::label('super_agent_id', 'Super Agent:') !!}
    <p>{{ @$agent->superAgent->name }}</p>
</div>

