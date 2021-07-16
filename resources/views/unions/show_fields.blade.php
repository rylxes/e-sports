<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $union->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $union->address }}</p>
</div>

<!-- Lga Id Field -->
<div class="form-group">
    {!! Form::label('lga_id', 'Lga Id:') !!}
    <p>{{ $union->lga_id }}</p>
</div>

