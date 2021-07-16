@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Super Agent
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($superAgent, ['route' => ['superAgents.update', $superAgent->id], 'method' => 'patch']) !!}

                        @include('super_agents.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection