@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Load Super Agent Account
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::open(['url' => 'superAgents/saveAccount']) !!}
                <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('amount', 'Amount:') !!}
                        <input type="hidden" name="id" value="{{$id}}">
                        {!! Form::text('amount', null,['type'=>'number','class' => 'form-control']) !!}
                    </div>
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('superAgents.index') }}" class="btn btn-default">Cancel</a>
                    </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
