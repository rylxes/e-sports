<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $transaction->id }}</p>
</div>

<!-- From Id Field -->
<div class="form-group">
    {!! Form::label('from_id', 'From Id:') !!}
    <p>{{ $transaction->from_id }}</p>
</div>

<!-- To Id Field -->
<div class="form-group">
    {!! Form::label('to_id', 'To Id:') !!}
    <p>{{ $transaction->to_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

