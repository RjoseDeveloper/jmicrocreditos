<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pgto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pgto', 'Pgto:') !!}
    {!! Form::number('pgto', null, ['class' => 'form-control']) !!}
</div>

<!-- Juro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juro', 'Juro:') !!}
    {!! Form::number('juro', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Estado do Juro:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', null, true) !!} Activo
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipocreditos.index') !!}" class="btn btn-default">Cancel</a>
</div>
