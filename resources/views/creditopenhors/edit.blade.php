@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Creditopenhor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($creditopenhor, ['route' => ['creditopenhors.update', $creditopenhor->id], 'method' => 'patch']) !!}

                        @include('creditopenhors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection