@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Super Agent
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('super_agents.show_fields')
                    <a href="{{ route('superAgents.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
