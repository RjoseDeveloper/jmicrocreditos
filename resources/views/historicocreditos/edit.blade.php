@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Historicocredito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($historicocredito, ['route' => ['historicocreditos.update', $historicocredito->id], 'method' => 'patch']) !!}

                        @include('historicocreditos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection