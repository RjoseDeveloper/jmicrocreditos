<!-- Id Credito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_credito', 'Id Credito:') !!}
    {!! Form::number('id_credito', null, ['class' => 'form-control']) !!}
</div>

<!-- Modopagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modopagamento', 'Modopagamento:') !!}
    {!! Form::number('modopagamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Ordem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordem', 'Ordem:') !!}
    {!! Form::number('ordem', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorpago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorpago', 'Valorpago:') !!}
    {!! Form::text('valorpago', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historicocreditos.index') !!}" class="btn btn-default">Cancel</a>
</div>
