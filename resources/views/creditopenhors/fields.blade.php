<!-- Urlimovel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urlimovel', 'Urlimovel:') !!}
    {!! Form::text('urlimovel', null, ['class' => 'form-control']) !!}
</div>

<!-- Urldecpenhor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urldecpenhor', 'Urldecpenhor:') !!}
    {!! Form::text('urldecpenhor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('creditopenhors.index') !!}" class="btn btn-default">Cancel</a>
</div>
