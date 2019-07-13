<!-- Testemunha1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('testemunha1', 'Testemunha1:') !!}
    {!! Form::number('testemunha1', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Credito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_credito', 'Id Credito:') !!}
    {!! Form::number('id_credito', null, ['class' => 'form-control']) !!}
</div>

<!-- Testemunha2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('testemunha2', 'Testemunha2:') !!}
    {!! Form::number('testemunha2', null, ['class' => 'form-control']) !!}
</div>

<!-- Bem Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bem', 'Bem:') !!}
    {!! Form::textarea('bem', null, ['class' => 'form-control']) !!}
</div>

<!-- Urldeclaracao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urldeclaracao', 'Urldeclaracao:') !!}
    {!! Form::text('urldeclaracao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('creditonegocios.index') !!}" class="btn btn-default">Cancel</a>
</div>
