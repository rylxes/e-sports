@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Club Assesment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clubAssesment, ['route' => ['clubAssesments.update', $clubAssesment->id], 'method' => 'patch']) !!}

                        @include('club_assesments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection