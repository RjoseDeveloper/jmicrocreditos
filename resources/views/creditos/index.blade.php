@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Creditos</h1>
        <h1 class="pull-right">
            <button
                type="button"
                class="btn btn-primary pull-right"
                style="margin-top: -10px;margin-bottom: 5px"
                data-toggle="modal"
                data-target="#AddCreditoModal">
                <i class="fa fa-dollar"></i> adicionar credito
            </button>

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('creditos.table')
            </div>
        </div>
        <div class="text-center">
        </div>
    </div>

{{--    assunto modal--}}
    <div class="modal fade" id="AddCreditoModal"
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
                            {!! Form::open(['route' => 'creditos.store']) !!}

                            @include('creditos.fields');

                            <div class="funcionario">
                                <div class="alert alert-secondary" role="alert">Dados do Funcionario</div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="instituicao" class="control-label mb-1">Instituição</label>
                                        <select required="required" name="instituicao" id="instituicao" class="form-control">
                                            <option value="0">Please Select</option>
                                            <option value="criar">Adicionar</option>
                                            <option value="criar">Nampula</option>
                                        </select>
                                    </div>

                                    <div class="col-6">

                                        <div class="form-group has-success">
                                            <label for="funcao" class="control-label mb-1">Função</label>
                                            <input id="funcao" name="funcao" type="text" class="form-control datapay valid" data-val="true" data-val-required="Please enter the name on card"
                                                   autocomplete="datapay" aria-required="true" aria-invalid="false" aria-describedby="datapay-error">
                                            <span class="help-block field-validation-valid" data-valmsg-for="datapay" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="contactBoss" class="control-label mb-1">Contacto Gestor</label>
                                    <input id="contactBoss" name="contactBoss" type="text" class="form-control"
                                           aria-required="true" aria-invalid="false" value="">
                                </div>

                                <div class="alert alert-secondary" role="alert">Dados Bancarios</div>


                                <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                    <label for="titular">Titular do Conta:</label>
                                    <input class="form-control" type="text" id="titular" name="titular" value="">
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="nr_conta">Numero da Conta</label>

                                            <input class="form-control" type="text" id="nr_conta" name="nr_conta" value="">
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="banco">Nome do Banco</label>
                                            <input class="form-control" type="text" id="banco" name="banco" value="">
                                        </div>
                                    </div>
                                </div>

                                <h3>Anexar Documentos</h3>
                                <hr>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="declaracaoServico">Declaração de Serviço</label>
                                            <input class="form-control" type="file" id="declaracaoServico" name="declaracaoServico" value="">
                                        </div>

                                    </div>

                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="bi">Fotocopia do B.I</label>
                                            <input class="form-control" type="file" id="bi" name="bi" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="banco">Extrato Bancario</label>
                                            <input class="form-control" type="file" id="extrato" name="extrato" value="">
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="penhor">Declaração Válida:</label>
                                            <input class="form-control" type="file" id="penhor" name="penhor" value="">
                                        </div>
                                    </div>
                                </div>

                            </div> <!--  fim div funcionario-->
                            <div class="comerciante">

                                <div class="alert alert-secondary" role="alert">Dados do Credito - Negocio</div>


                                <div class="row">
                                    <div class="col-6">

                                        <label for="titular">Testemunha 1:</label>
                                        <input class="form-control" type="text" id="testemunha1" name="testemunha1" value="">
                                    </div>
                                    <div class="col-6">

                                        <label for="nr_conta">Testemunha 2</label>
                                        <input class="form-control" type="text" id="testemunha2" name="testemunha2" value="">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="banco">Bem a Penhorar</label>
                                            <input class="form-control" type="text" id="bempenhor" name="bempenhor" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="decbairro">Declaração do Bairro</label>
                                            <input class="form-control" type="file" id="decbairro" name="decbairro" value="">
                                        </div>

                                    </div>
                                </div>

                            </div> <!--- fim comerciante -->
                            <div class="creditoPenhor">

                                <div class="alert alert-secondary" role="alert">Credito - Pela Penhor</div>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="banco">Declaração do Imóvel</label>
                                            <input class="form-control" type="file"
                                                   id="urldecimovel" name="urldecimovel" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">

                                            <label for="banco">Declaração do Penhor</label>
                                            <input class="form-control" type="file"
                                                   id="urldeclaracobairro" name="urldeclaracobairro" value="">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="creditovip">

                                <div class="alert alert-secondary" role="alert">Credito - VIP</div>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">
                                            <label for="banco">Declaração do Credor:</label>
                                            <textarea class="form-control" rows="5"
                                                      id="credor" name="credor" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="form-group" data-validate="O Campo Bem por Penhorar é Obrigatório, Insira!">

                                            <label for="banco">Declaração de Hora:</label>
                                            <input class="form-control" type="file"
                                                   id="ulrdechonra" name="urldechonra" value="">
                                        </div>

                                    </div>
                                </div>

                            </div>

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

