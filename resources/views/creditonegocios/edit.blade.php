@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Creditonegocio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($creditonegocio, ['route' => ['creditonegocios.update', $creditonegocio->id], 'method' => 'patch']) !!}

                        @include('creditonegocios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection