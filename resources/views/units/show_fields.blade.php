<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $unit->name }}</p>
</div>

<!-- Branch Id Field -->
<div class="form-group">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    <p>{{ $unit->branch_id }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $unit->address }}</p>
</div>

<!-- Lga Id Field -->
<div class="form-group">
    {!! Form::label('lga_id', 'Lga Id:') !!}
    <p>{{ $unit->lga_id }}</p>
</div>

