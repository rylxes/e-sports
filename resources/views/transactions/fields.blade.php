<!-- From Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_id', 'From Id:') !!}
    {!! Form::text('from_id', null, ['class' => 'form-control']) !!}
</div>

<!-- To Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_id', 'To Id:') !!}
    {!! Form::text('to_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transactions.index') }}" class="btn btn-default">Cancel</a>
</div>
