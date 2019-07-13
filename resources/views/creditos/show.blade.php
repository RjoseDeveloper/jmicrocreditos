@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Credito
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('creditos.show_fields')
                    <a href="{!! route('creditos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
