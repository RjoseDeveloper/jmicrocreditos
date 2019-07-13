<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    @auth
        @if (Auth::user()->role_id > 2)
            <input id="idcliente" name="idcliente" class="form-control" type="hidden" value="{{Auth::user()->id}}">
        @else
            <label for="user_id">Selecionar cliente:</label>
            <select class="form-control" id="idcliente" name="idcliente">
                <option selected="selected"> </option>
                @foreach($utilizadores as $utilizadore)
                    <option value="{{$utilizadore['id']}}">{{$utilizadore['name']}}</option>
                @endforeach
            </select>
        @endif
    @endauth
</div>

<!-- Idtipocredito Field -->
<div class="form-group col-sm-6">
    <label for="idtipocredito">Tipo de credito:</label>
    <select class="form-control" id="idtipocredito" name="idtipocredito" onchange="validar_credito(this.value)">
        <option selected="selected"> </option>
        <option value="1">credito a consumo</option>
        <option value="2">credito a negocio</option>
        <option value="3">credito penhor</option>
        <option value="4">credito VIP</option>
    </select>
</div>

<!-- Nr Max Pag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nr_max_pag', 'Nr Max Pag:') !!}
    {!! Form::number('nr_max_pag', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Emprestimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_emprestimo', 'Inicio de pagamento:') !!}
    {!! Form::date('data_emprestimo', null, ['class' => 'form-control','id'=>'data_emprestimo']) !!}
</div>



@section('scripts')
    <script type="text/javascript">
        $('#data_emprestim').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true
        })
    </script>
@endsection

<!-- Data Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_pagamento', 'Fim de pagamento:') !!}
    {!! Form::date('data_pagamento', null, ['class' => 'form-control','id'=>'data_pagamento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_pagamento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Idestado Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('idestado',5, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('creditos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
