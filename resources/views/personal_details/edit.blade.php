@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personal Details
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personalDetails, ['route' => ['personalDetails.update', $personalDetails->id], 'method' => 'patch']) !!}

                        @include('personal_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection