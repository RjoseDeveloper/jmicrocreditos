@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tipo de Credito</h1>
        <h1 class="pull-right">
            <button
                type="button"
                class="btn btn-primary pull-right"
                style="margin-top: -10px;margin-bottom: 4px"
                data-toggle="modal"
                data-target="#AddtipoCreditoModal">
                <i class="fa fa-dollar"></i> adicionar tipo
            </button>

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('tipocreditos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

    {{--    assunto modal--}}
    <div class="modal fade" id="AddtipoCreditoModal"
         tabindex="-1" role="dialog"
         aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"
                        id="favoritesModalLabel"> Novo credido</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            {!! Form::open(['route' => 'tipocreditos.store']) !!}

                            @include('tipocreditos.fields');

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="text-red pull-left">*</span> <span class="pull-left"> Campos Obrigatorios</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal medium -->
@endsection

