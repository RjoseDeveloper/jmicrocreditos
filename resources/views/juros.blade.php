@extends('layouts.app')

@section('content')
<section class="content">

    <div class="callout callout-info">
        <p>Este eh o nosso simulador financeiro,,, antes de pedir financiamento deve simular para certificar
            os juros a taxas a serem aplicadas em cada tipo de credito.</p>
    </div>

    <div class="row">
        <!-- Input addon -->
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Simulador Finenceiro</h3>
                </div>
            <form id="simulador-financiamento">
                <div class="box-body">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input id="valor" name="valor" type="text" class="form-control" placeholder="digite o valor que necesita">
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <select class="form-control" id="idtipocredito" name="idtipocredito" onchange="prencher(this.value)">
                            @foreach($tipocredito as $tipo)
                                <option value="{{$tipo['id']}}">{{$tipo['descricao']}}</option>
                            @endforeach
                        </select>
                    </div><br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-card"></i></span>
                        <input id="juro" name="juro" type="number" class="form-control" placeholder="Taxa de Juro">
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-time"></i></span>
                        <input id="qtdmeses" name="qtdmeses" type="text" class="form-control" placeholder="Qtd. Meses">
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="pgto"><i class="fa fa-dollar"></i></span>

                    </div>
                    <br>

                </div>
            </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <!-- Input addon resultados -->
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Resultado simulado</h3>
                </div>
                <form id="simulador-financiamento">
                    <div class="box-body">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input id="valor-entrada" name="valor-entrada" type="text" readonly class="form-control" placeholder="valor entrada">
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="valor_inicial" name="valor_inicial"
                                   type="text" class="form-control" placeholder="Capital PGTO">
                        </div>
                        <br>

                        <div class="form-group">
                            <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <br />
                        <div class="form-group">
                            <select name="city" id="city" class="form-control input-lg">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        {{ csrf_field() }}
                        <br />

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="taxa-juros" name="taxa-juros" type="text" class="form-control"
                                   placeholder="Juros Cobrados">
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="amortizacao" name="amortizacao" type="text" value=""
                                   class="form-control" readonly placeholder="Amortizacao (Mensal)">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="pgto" name="pgto" type="text" value=""
                                   class="form-control" readonly placeholder="PGTO (Meses)">
                        </div>
                        <br>
                    </div>
                    <div class="input-group">
                        <label>&nbsp;</label>
                        <input id="btn-calcular" class="btn btn-success" type="button" value="Simular Emprestimo" />

                    </div>
                    <br>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </div>
</section>

<script>
    function preencher(i) {
        $.ajax({
            dataType: 'json',
            url: "{{route('/juros')}}?id="+i,
            type: 'GET',
            data: {id:i},
        }).done(function(data){
            alert(data)
        });
    }
</script>

@endsection

