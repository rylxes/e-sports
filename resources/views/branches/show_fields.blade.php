<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $branch->name }}</p>
</div>

<!-- Union Id Field -->
<div class="form-group">
    {!! Form::label('union_id', 'Union Id:') !!}
    <p>{{ $branch->union_id }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $branch->address }}</p>
</div>

<!-- Lga Id Field -->
<div class="form-group">
    {!! Form::label('lga_id', 'Lga Id:') !!}
    <p>{{ $branch->lga_id }}</p>
</div>

