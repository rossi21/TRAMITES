<!-- Id Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_persona', 'Id Persona:') !!}
    {!! Form::number('id_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_documento', 'Cod Documento:') !!}
    {!! Form::number('cod_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tramites.index') !!}" class="btn btn-default">Cancel</a>
</div>
