
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $superAgent->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $superAgent->address }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $superAgent->user->email }}</p>
</div>

