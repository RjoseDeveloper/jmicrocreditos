@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Credito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($credito, ['route' => ['creditos.update', $credito->id], 'method' => 'patch']) !!}

                        @include('creditos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection